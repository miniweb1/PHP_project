<?php
function clockHandAngle($time) {
    $time = explode(':', $time);
    $hours = $time[0];
    $minutes = $time[1];
    $angle = 0.5 * (60 * $hours - 11 * $minutes);
    $angle = abs($degree);
    if($angle > 180) {
        return 360 - $angle;
    }
    return $angle;
}

function clockHandAngle2($angle, $timeNow) {
    $timeNow = explode(':', $timeNow);
    $hours = $timeNow[0];
    $minutes = $timeNow[1];

}
