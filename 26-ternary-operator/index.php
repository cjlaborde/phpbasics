<?php

/*
$page = 1;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

echo $page;
*/
// phpinfo();


// $page = isset($_GET['page']) ? $_GET['page'] : 1;

// $page =  $_GET['page'] ?? 1;

// echo $page;


$balance = 0;
/*
if ($balance === 0) {
    $balance = 'zero';
}
*/

$availableBalance = $balance ?: 'zerro';

echo 'Your available balance is ' . $availableBalance;