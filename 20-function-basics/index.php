<?php
/*
function fullName() {
    return 'Joe Bond';
}
*/

// echo fullName(); 

/*
$fullName = fullName();
echo $fullName; // // Joe Bond
*/


/*
$firstName = 'Joe';
$lastName = 'Bond';


function fullName ($firstName, $lastName) {
    return $firstName . ' ' . $lastName;
}

// var_dump(fullName()); //
$fullName = fullName('Joe', 'Bond');
echo $fullName; // Joe Bond

// $fullName = fullName($firstName, $lastName);


// var_dump(fullName($firstName, $lastName));
*/
/*
function fullName ($firstName, $lastName) {
    return "{$firstName} {$lastName}";
}
$fullName = fullName('Joe', 'Bond');
echo $fullName; // Joe Bond
*/

/*

function firstName() {
    return 'Joe';
}


function fullName ($firstName, $lastName) {
    return "{$firstName} {$lastName}";
}
$fullName = fullName(firstName(), 'Bond');
echo $fullName; // Joe Bond
*/

/*
function fullName ($firstName, $lastName, $separator = ' ') {
    return $firstName . $separator . $lastName;
}
$fullName = fullName('Joe', 'Bond');
echo $fullName; // Joe Bond
*/

/*

function fullName ($firstName, $lastName, $separator = ' ') {
    return "{$firstName}{$separator}{$lastName}";
}

$fullName = fullName('Joe', 'Bond'); // Joe Bond
$fullName = fullName('Joe', 'Bond', '_'); // Joe_Bond

echo $fullName; // Joe_Bond

*/

/*
echo $fullName('Joe', 'Bond');

$fullName = function ($firstName, $lastName, $separator = ' ') {
    return "{$firstName}{$separator}{$lastName}";
};

// : Undefined variable: fullName 

//  Uncaught Error: Function name must be a string 
*/

echo fullName('Joe', 'Bond'); // Joe Bond

function fullName ($firstName, $lastName, $separator = ' ') {
    return "{$firstName}{$separator}{$lastName}";
}














