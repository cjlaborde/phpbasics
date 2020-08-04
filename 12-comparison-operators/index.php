<?php
/*
$uploaded = true;

if ($uploaded == true) {
    echo 'Uploaded';
}

echo '<br>';


if ($uploaded) {
    echo 'Uploaded';
}

*/

// Nothing wrong but it can be confusing
/*
$uploaded = 1;

if ($uploaded == true) {
    echo 'Uploaded';
}
*/
// So we introduce === comparison than checks type as well.

/*
$uploaded = 1;

if ($uploaded === true) {
    echo 'Uploaded';
}
*/
/*
$tablesAvailable = true;

if ($tablesAvailable) {
    echo 'Book a table';
}
// Book a table

echo '<br>';

$tablesAvailable = '1false';

if ($tablesAvailable) {
    echo 'Book a table';
}
// Book a table
*/
/*
echo '1john'; // 1john

echo '<br>';

echo (int) '1john'; // 1
*/


// var_dump((int) '1john'); // int 1

// var_dump((bool) 'false'); // boolean true

/*

$tablesAvailable = 'false';

if ($tablesAvailable == true) {
    echo 'Book a table';
}
//Book a table

echo '<br>';


if ($tablesAvailable === true) {
    echo 'Book a table';
}
// 
*/

/*
$tablesAvailable = 'true';

if ($tablesAvailable != true) {
    echo 'No table available';
}
// 



$tablesAvailable = 'true';

if ($tablesAvailable !== true) {
    echo 'No table available';
}

// No table available

*/

/*
$tablesAvailable = 'false';

if (!$tablesAvailable) {
    echo 'No table available';
}

// 

$tablesAvailable = false;

if (!$tablesAvailable) {
    echo 'No table available';
}

// No table available

$tablesAvailable = true;

if (!$tablesAvailable) {
    echo 'No table available';
}
// 


$tablesAvailable = '1';

if (!$tablesAvailable) {
    echo 'No table available';
}

//
*/

// Alternative way ro !$tablesAvailable is 
// Which reads better and have type check
/*
$tablesAvailable = false;

if ($tablesAvailable !== true) {
    echo 'No table available';
}
*/

/*
// $tablesAvailable = 'true'; //
$tablesAvailable = true; //
// $tablesAvailable = false; // No table available
// $tablesAvailable = 'false'; //



if ($tablesAvailable <> true) {
    echo 'No table available';
}

*/

/*
// $roomsRequested = 4;
$roomsRequested = 3;
$roomsAvailable = 3;

if ($roomsRequested > $roomsAvailable) {
  echo 'Sorry, not enough rooms.';
}
// Sorry, not enough rooms
*/

/*

$roomsRequested = 4; // Sorry, not enough rooms
$roomsAvailable = 3;

if ($roomsAvailable < $roomsRequested) {
  echo 'Sorry, not enough rooms.';
}

*/
/*
$roomsRequested = 2;
$roomsAvailable = 3;

if ($roomsRequested >= $roomsAvailable) {
  echo 'Not enough rooms.';
}
// Not enough rooms.
*/

/*
$roomsRequested = 2; //
$roomsRequested = 3; // Sorry, not enough rooms.
$roomsAvailable = 3;

if ($roomsAvailable <= $roomsRequested) {
    echo 'Sorry, not enough rooms.';
}
*/

$maxRoomsAllowed = 5;
$roomsRequested = 7;
$roomsAvailable = 20;


if (($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)) {
    echo 'Please choose less rooms.';
} else {
    echo 'Your booking is complete.';
}




