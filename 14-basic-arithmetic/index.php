<?php
/*

$views = 0;

$views = $views + 1;

echo $views; // 1
*/

/*

$views = 0;

$views = $views + 5.5;

echo $views; // 5.5
*/


/*
$views = 0;

$views = $views + '1';

echo $views; // 1
*/

/*

$views = 0;

$views = $views + 1;

$views = $views + 1;

echo $views; // 2
*/

/*
$views = 0;

$views = $views++;

echo $views; // 0
*/

/*
$views = 0;

$views++;

$views++;

$views++;


echo $views; // 1
*/

/*
$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = ($completedLessons / $totalLessons) * 100;

echo "You've completed {$percentageComplete}% of this course!";

*/

/*

$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = ($completedLessons / $totalLessons) * 100;
$percentageComplete = number_format($percentageComplete, 3);

echo "You've completed {$percentageComplete}% of this course!"; // You've completed 23.333% of this course!
*/

/*
$totalLessons = 30;
$completedLessons = 7;

$percentageComplete =  number_format(($completedLessons / $totalLessons) * 100);

echo "You've completed {$percentageComplete}% of this course!"; // You've completed 23% of this course!

*/

/*
$balance = 500;
$cost = 25;

echo $balance = $balance - $cost;

// 475
*/

/*
$views = 0;

$views;

echo $views; // -1
*/

/*
$points = 0;
$points += 10;

echo $points; // 10
*/


/*
$points = 0;
$points += 10;
$points -= 2;

echo $points; // 8
*/

/*
$a = 10;
$b = 8;

echo $a % $b; // 2
*/

/*
$rows = 10;

for ($row = 1; $row <= $rows; $row++) {
  echo '1<br>';
}

// 1
// 1
// 1
// 1
// 1
// 1
// 1
// 1
// 1
// 1

*/

/*

$rows = 10;

for ($row = 1; $row <= $rows; $row++) {
    if ($row % 2 === 0) {
        echo 'Even';
    } else {
        echo 'Odd';
    }
}
// OddEvenOddEvenOddEvenOddEvenOddEven
*/

$a = 10;

echo $a ** 2; // 100












