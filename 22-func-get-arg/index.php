<?php

/*
function add($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}

echo add(5,10,10);
*/

/*
function add($num1, $num2, $num3, $num4) {
    return $num1 + $num2 + $num3;
}

echo add(5,10,10);

// Uncaught ArgumentCountError: Too few arguments to function add(), 3 passed in
*/


/*
$numbers = [5,10,10];

function add(array $numbers,$result = 0) {
    foreach ($numbers as $number) {
    $result += $number;
    }
    return $result;
    
}
echo add(1);
*/
// Uncaught TypeError: Argument 1 passed to add() must be of the type array, int given, 

/*
$numbers = [5,10,10];

function add(array $numbers) {
    $result = 0;
    foreach ($numbers as $number) {
    $result += $number;
    }
    return $result;
    
}
// echo add($numbers);
echo add( [5,10,10]); // 25
*/

/*

function add()
{
    var_dump(func_get_args()); 
}
*/

/*
echo add();

 array (size=0)
   empty
*/

/*
echo add( 5,10,10);
array (size=3)
  0 => int 5
  1 => int 10
  2 => int 10
*/

/*
function add() {
    $total = 0;
    foreach (func_get_args() as $number) {

        $total += $number;
    }
    return $total;
}

// echo add(5, 10, 10, 'john');
echo add(5, 10, 10, '1john');
*/

/*
function add() {
    $total = 0;
    foreach (func_get_args() as $number) {

    if (!is_numeric($number)) {
        continue;
    }
        $total += $number;
    }
    return $total;
}

// echo add(5, 10, 10, 'john');
echo add(5, 10, 10, '1john');
*/

// echo array_sum([5, 10, 10]); // 25


/*
function add() {
    return array_sum(func_get_args());
}

echo add(5, 10, 10);
*/


function add(array $numbers) {
    $result = 0;
    foreach ($numbers as $number) {
    if (!is_numeric($number)) {
        continue;
    }
    $result += $number;
    }
    return $result;   
}
$numbers = [5, 10, 10 , '1john'];

echo add($numbers);