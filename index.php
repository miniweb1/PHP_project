<?php
function clockHandAngle($time) {
    $time = explode(':', $time);
    $hours = $time[0];
    $minutes = $time[1];
    $degree = 0.5 * (60 * $hours - 11 * $minutes);
    $degree = abs($degree);
    if($degree > 180) {
        return 360 - $degree;
    }
    return $degree;
}

echo clockHandAngle('10:16:00');