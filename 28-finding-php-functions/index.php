<?php

// echo strlen('john'); // 4

// var_dump(strlen('john')); // int 4

// echo strtoupper('John'); // JOHN


// echo strtolower('John'); // john


// echo trim('               John      '); // John


// $name = '               John      ';

// echo strlen($name); // 25
// echo strlen(trim($name)); // 4


// character_mask
/*
$name = '.........................John...........';

echo strlen($name); // 40
echo strlen(trim($name)); // 40
echo strlen(trim($name, '.')); // 4
*/

// $name = '                  John';

// echo ltrim($name);



// $name = 'John           ';

// echo rtrim($name);


// $name = 'joe';

// echo substr($name, 0, 1); // j
// echo substr($name, 0, 2); // jo
// echo substr($name, 0, 10); // joe
// echo substr($name, 0, strlen($name) / 2); // jo


// $name = 'anastasia';

// echo substr($name, 0, ceil(strlen($name) / 2)); // anast


/*
$page = $_GET['page'] ?? 1;

if (empty($page)) {
    $page = 1;
}

echo $page;

// http://phpbasics.test/28-finding-php-functions?page=
*/


/*
$page = $_GET['page'] ?? 1;

if (empty(trim($page))) {
    $page = 1;
}

echo $page;
*/
// $number = 5.65445656; 

// echo $number; // 5.65445656
// echo number_format($number); // 6
// echo number_format($number, 2); // 5.65


// $number =  1000000000;
// echo number_format($number, 2); // 1,000,000,000.00
// echo number_format($number, 0); // 1,000,000,000


// echo number_format($number, 0, '.' , '_'); // 1_000_000_000


header('Location: /28-finding-php-functions/page.php');



















