<?php
/*
for (;;) {
    //
}

// will loop till error.
*/

/*
for ($x = 1; $x <= 10; $x++) {
    echo $x , '<br>';
}
*/
/*
    1
    2
    3
    4
    5
    6
    7
    8
    9
    10
*/

/*

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = $totalItems / $itemsPerPage;

echo $pageCount; // 8.4

*/

/*
$totalItems = 210;
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

echo $pageCount; // 9
*/

/*
// $totalItems = 210; // 1 2 3 4 5 6 7 8 9
$totalItems = 811; // // 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

for ($i = 1; $i <= $pageCount; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a> ';

}

*/

/*
$totalItems = 25;
$itemsPerPage = 25;
$pageCount = ceil($totalItems / $itemsPerPage);
// only display when pageCount greater than 1
if ($pageCount > 1) {
    for ($i = 1; $i <= $pageCount; $i++) {
        echo '<a href="?page=' . $i . '">' . $i . '</a> ';
    }
}
*/

$names = ['john', 'joe', 'jane', 'karen'];

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . '<br>';
}






