<?php

$name = $_POST['name'] ?? null;

if (empty(trim($name))) {
    header('Location: http://phpbasics.test/29-submitting-a-form');
}

echo "Greetings {$_POST['name']}!";

// header('Location: http://phpbasics.test/29-submitting-a-form');