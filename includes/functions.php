<?php
function clockHandAngle($time) {
    $time = explode(':', $time);
    $hours = $time[0];
    if($hours > 12) {
        $hours -= 12;
    }
    $minutes = $time[1];
    $seconds = $time[2];
    $angle = abs(30 * $hours + 0.5 * $minutes + ($seconds / 120) - (6 * $minutes + 0.1 * $seconds));
    return min($angle, abs(360 - $angle));
}

function clockHandAngle2($angle, $timeNow) {
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
        if($hours > 12) {
            $hours -= 12;
        }
    }
    $time = strtotime($hours . ':' . $minutes . ':' . $seconds);

    return  date('H:i:s', $time);
}
