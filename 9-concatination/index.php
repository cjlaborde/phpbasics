<?php

/*
$weather = 'sunny';

echo 'The current weather is ';
echo $weather;
*/

/*
$weather = 'sunny';

$degrees = 30.5;

$status = 'The current weather is ' . $weather . ' and it\'s ' . $degrees . ' degress';

// echo $status;

var_dump($status);

*/

/*
$weather = 'sunny';

$degrees = 30.5;


echo $status = 'The current weather is $weather and it\'s $degrees degress';
// The current weather is $weather and it's $degrees degress

echo '<br>';

// But if we use "" instead PHP will convert them for you.


echo $status = "The current weather is $weather and it's $degrees degress";

// The current weather is sunny and it\'s 30.5 degress

*/

/*

$weather = 'sunny';

$degrees = 30.5;


echo $status = "The current weather is {$weather} and it's {$degrees} degress";

*/


/*
$weather = 'sunny';

$degrees = 30.5;

// echo $status = "The current weather is $weather and it's $degreeso degress"; // fail

echo $status = "The current weather is {$weather} and it's {$degrees}o degress"; // su ccess

*/

$name = 'John';

// echo 'My name is ', $name;
// My name is John.


// $text = 'My name is ', $name; // Parse error: syntax error, unexpected ',' in



echo $text = 'My name is ' . $name; 

























