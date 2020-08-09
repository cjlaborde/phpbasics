<?php 

// var_dump($_GET);

/*
array (size=1)
  'slug' => string 'learn-php' (length=9)
*/

// echo $_GET['slug']; // learn-php

/*

$page = $_GET['page'];
$searchTerm = $_GET['search'];
$pages = 10;

echo '<h3>Searching for: ' . $searchTerm . '</h3>';
echo '<p>You are on page ' . $page . '</p>';

// Undefined index: page in 

for ($i = 1; $i <= $pages; $i++) {
  echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . '</a> ';
}

*/

if (isset($_GET['search'])) {
  $searchTerm = $_GET['search'];
  echo '<h3>Searching for: ' . $searchTerm . '</h3>';
}
