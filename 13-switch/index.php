<?php
/*
switch (2) {
    case 1:
        echo 'The value is one.';
        break;
    case 2:
        echo 'The value is two.';
        break;
    default:
        echo 'The value is unknown.';
        break;
}
*/

$weather = 'sunny';
$color = null;

switch (true) {
    case $weather == 'sunny';
        $color = 'blue';
    break;
    case $weather == 'cloudy';
        $color = 'gray';
    break;
}

echo $color;