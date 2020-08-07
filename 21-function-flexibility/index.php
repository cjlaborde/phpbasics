<?php
/*
function fullName($firstName, $lastName = null, $separator = '_') {
    return "{$firstName} {$lastName}";
}

echo fullName('John'); // John_

*/

/*

function fullName($firstName, $lastName = null, $separator = '_') {
    return 'John';
    echo 'Hello.';

    return "{$firstName} {$lastName}"; 
}

echo fullName('John'); // John
*/

/*
function fullName($firstName, $lastName = null, $separator = '_') {
   if ($lastName === null) {
       return $firstName;
   }

    return "{$firstName}{$separator}{$lastName}"; 
}

echo fullName('John'); // John
echo fullName('John', 'Bond'); // John_Bond
*/

function fullName($firstName, $lastName = null, $separator = '_') {
    if (trim($firstName) === '') {
      return;
    }

   if ($lastName === null) {
      return $firstName;
   }

    return "{$firstName}{$separator}{$lastName}"; 
}

// echo fullName('    '); // 

// var_dump(fullName('    ')); // Null
var_dump(fullName('John')); // John











