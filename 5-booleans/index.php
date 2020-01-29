<?php

$fileIsUploaded = true;
$fileIsUploaded = false;
$fileIsUploaded = 1;
$fileIsUploaded = -1;

# () if the condition evaluate to true.
if ($fileIsUploaded) { // Your file was uploaded
    echo 'Your file was uploaded';
}

echo '<br>';


# Using isInt with int value
$isInt = is_int(1);

if ($isInt) {
    echo 'That is an integer';
    // That is an integer
}


echo '<br>';

# Using isInt with string value

$isInt = is_int('string');

if ($isInt) {
    echo 'That is an integer';
    //
}

echo '<br>';

# We can also use var_dump without need of if.

var_dump(is_int('john'));

echo '<br>';

var_dump(is_int(1));


