<?php
function validateTime($hours, $minutes, $seconds, $angle = null) {

    if(!ctype_digit($hours) || !ctype_digit($minutes) || !ctype_digit($seconds)) {
        return 'Невалиден формат! Стойността не може да бъде текст!';
    }
    if($hours > 24) {
        return 'Невалиден формат на часа.';
    }
    if($minutes > 60) {
        return 'Невалиден формат на минутите.';
    }
    if($seconds > 60) {
        return 'Невалиден формат на секундите.';
    }

    if($angle > 360) {
        return 'Въведете ъгъл между 0 и 360 градуса.';
    }
    
    return true;
}

function clockHandAngle($time) {
    // Get the hours, minutes and seconds from the string
    $time = explode(':', $time);
    $hours = $time[0];
    $minutes = $time[1];
    $seconds = $time[2];
    
    // Check if hours are greater than 12, so the function can work with 24-hour clock
    if($hours > 12) {
        $hours -= 12;
    }
    // Formula for finding angle
    $angle = abs(30 * $hours + 0.5 * $minutes + ($seconds / 120) - (6 * $minutes + 0.1 * $seconds));
    // Return the smaller angle
    return min($angle, abs(360 - $angle));
}

function clockHandAngle2($angle, $timeNow) {
    // Get the hours, minutes and seconds from the string
    $timeNow = explode(':', $timeNow);
    $hours = $timeNow[0];
    $minutes = $timeNow[1];
    $seconds = $timeNow[2];

    $e = 0.09;
    while (clockHandAngle($hours . ':' . $minutes . ':' . $seconds) - $angle > $e) {
        $seconds += 1;
        if($seconds >= 60) {
            $seconds = 0;
            $minutes += 1;
        }
        if($minutes >= 60) {
            $minutes = 0;
            $hours += 1;
        }
        // Check if hours are greater than 12, so the function can work with 24-hour clock
        if($hours > 12) {
            $hours -= 12;
        }
    }
    // Format the time
    $time = strtotime($hours . ':' . $minutes . ':' . $seconds);

    return date('H:i:s', $time);
}
