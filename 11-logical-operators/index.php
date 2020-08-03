<?php

// if (true && true) {
//     echo 'Hello';
//   }

/*

  if (true && false) {
    echo 'Hello';
  }
*/

/*

$username = 'alex';
$password = 'ilovecats';

if ($username == 'alex' && $password == 'ilovecats') {
  echo 'You are in!';
}

*/

/*
$dayOfWeek = 5;

if ($dayOfWeek == 6 || $dayOfWeek == 7) {
  echo 'The weekend is here!';
}
*/

/*
$dayOfWeek = 6; // You have a day off!
// $dayOfWeek = 7; //
$workingTheWeekend = true;

if ($dayOfWeek == 6 || $dayOfWeek == 7 && !$workingTheWeekend) {
  echo 'You have a day off!';
}
*/

/*

$dayOfWeek = 7; // You have a day off!
// $dayOfWeek = 7; //
$workingTheWeekend = true;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) {
  echo 'You have a day off!';
}
*/


$dayOfWeek = 7; // You have a day off!

$workingTheWeekend = false;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) {
  echo 'You have a day off!';
}