<?php

/*

$names = ['alex' => 27, 'billy' => 23];

var_dump($names);

*/

/*
$names = [
    ['name' => 'John', 'age' => 28],
    ['name' => 'Joe', 'age' => 33]
];


var_dump($names);
*/
/*

array (size=2)
  0 => 
    array (size=2)
      'name' => string 'John' (length=4)
      'age' => int 28
  1 => 
    array (size=2)
      'name' => string 'Joe' (length=3)
      'age' => int 33
*/

/*
$users = [
    ['name' => 'John', 'age' => 28],
    ['name' => 'Joe', 'age' => 33]
];

echo '<pre>',
  var_dump($users),
'</pre>';
*/


/*
array (size=2)
  0 => 
    array (size=2)
      'name' => string 'John' (length=4)
      'age' => int 28
  1 => 
    array (size=2)
      'name' => string 'Joe' (length=3)
      'age' => int 33
*/

$users = [
    ['name' => 'John', 'age' => 28],
    ['name' => 'Joe', 'age' => 33]
];

// print_r($users); // Array ( [0] => Array ( [name] => John [age] => 28 ) [1] => Array ( [name] => Joe [age] => 33 ) )

echo '<pre>', print_r($users), '</pre>';

/*
Array
(
    [0] => Array
        (
            [name] => John
            [age] => 28
        )

    [1] => Array
        (
            [name] => Joe
            [age] => 33
        )

)
1
*/



