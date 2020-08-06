<?php
/*
    $names = ['John', 'Joe', 'Jane'];

    foreach ($names as $name) {
        echo $name, '<br>';
        break;
    }

*/

/*

$users = [
    ['username' => 'John'],
    ['username' => 'Joe'],
    ['username' => 'Jane'],
    ['username' => 'Ashley'],
    ['username' => 'Karen'],
    ['username' => 'Anastasia'],
];

$toFind = 'Anastasia';
$result = null;

foreach ($users as $user) {
    if ($user['username'] === $toFind) {
        $result = $user;
    break;
    }
}

var_dump($result);

// array (size=1) 'username' => string 'Jane' (length=4)
*/

/*

$users = [
    ['username' => 'John'],
    ['username' => 'Joe'],
    ['username' => 'Jane'],
    ['username' => 'Ashley'],
    ['username' => 'Karen'],
    ['username' => 'Anastasia'],
];

$toSkip = 'Ashley';

foreach ($users as $user) {
    if ($user['username'] === $toSkip) {
        continue;
    }

    echo $user['username'] . '<br>';
}

*/

$users = [
    [
        'username' => 'jane',
        'likes' => ['cats', 'food'],
    ],
    [
        'username' => 'john',
        'likes' => ['code', 'cats', 'food'],
    ],
    [
        'username' => 'joe',
        'likes' => ['code', 'cats', 'music'],
    ],
];

$toFind = 'code';
$found = null;

foreach ($users as $user) {
    foreach ($user['likes'] as $like) {
        if ($like === $toFind) {
            $found = $user;
            break 2;
        }
    }
}

var_dump($found);

/*
  'username' => string 'joe' (length=3)
  'likes' => 
    array (size=3)
      0 => string 'code' (length=4)
      1 => string 'cats' (length=4)
      2 => string 'music' (length=5)
*/






















