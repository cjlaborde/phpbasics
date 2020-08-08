<?php

$config = [
    'separator' => '_'
];


/*
function fullName($firstName, $lastName) {
    return "{$firstName} {$config['separator']} {$lastName}";
}

echo fullName('John', 'Bond');

*/

/*
function fullName($firstName, $lastName) {
    $greeting = 'hello';
      return "{$firstName} {$lastName}";
  }
  echo $greeting;
  
  echo fullName('John', 'Bond');
*/

/*

  function fullName($firstName, $lastName) {
    global $config;
    return "{$firstName}{$config['separator']}{$lastName}";
}

echo fullName('John', 'Bond');
*/


/*
function fullName($firstName, $lastName, $config) {
    return "{$firstName}{$config['separator']}{$lastName}";
}

echo fullName('John', 'Bond', $config); // John Bond
*/


$fullName = function ($firstName, $lastName) use ($config) {
    return "{$firstName} {$config['separator']} {$lastName}";
};

echo $fullName('John', 'Bond');
