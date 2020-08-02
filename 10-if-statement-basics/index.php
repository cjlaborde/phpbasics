<?php
/*
$daOfWeek = 1;

if ($dayfWeek = 2) {

}

echo $dayfWeek; // 2
*/

/*

$dayOfWeek = 1;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
}
*/

/*
$dayOfWeek = 2;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
}

*/

/*
$dayOfWeek = 2;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
} else {
    echo 'It is NOT Monday';
}

// It is NOT Monday

*/

/*

$dayOfWeek = 5;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
} elseif ($dayOfWeek == 2) {
  echo 'It is Tuesday.';
} elseif ($dayOfWeek == 3) {
  echo 'It is Wednedays';
} else {
  echo 'It is not a valid day.';
}
*/

/*

$dayOfWeek = 1; 

$daysOfWeek = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday'
];

*/

// var_dump(array_keys($daysOfWeek));
/*

array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3

*/

/*

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
  echo $daysOfWeek[$dayOfWeek];
} else {
    echo 'That is not a valid day';
}

*/

// Nesting If Statements

/*
$name = 'Alexander James Garrett';

if ($name) {
    echo 'Your name is ' . $name;

    if (strlen($name) > 10) {
        echo ' Oh you have a long name';
    }
}

echo '<br>';

$name = 'Alex';

if ($name) {
    echo 'Your name is ' . $name;

    if (strlen($name) > 10) {
        echo '. Oh you have a long name';
    }
}
*/

/*
$name = null;

if (!$name) {
    return; // returns breaks the execution of the code if name is no name.
}

echo 'Hello'; // Hello

*/

/*

$name = 'Alexander James Garrett';

if (!$name) {
    return; // returns breaks the execution of the code if name is no name.
}

echo 'Your name is ' . $name . '.';

if (strlen($name) > 10) {
    echo ' Oh, and you have a long name.';
}
// Your name is Alexander James Garrett. Oh, and you have a long name.
*/



if (-5) {
    echo 'This will not run when set to false or boolean 0';
  }


























