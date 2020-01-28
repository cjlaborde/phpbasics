<?php

# 1) String
echo  "<br>" . 'String:' . "<br>";
$name = 'john';

echo $name;

echo "<br>";

# 2) Integer
echo  "<br>" . 'Integer:' . "<br>";
$daysInWeek = 7;

echo $daysInWeek;

echo "<br>";

# 3) concatenation
echo  "<br>" . 'Concatenation:' . "<br>";
$text = 'There are ' . $daysInWeek . ' in a week.';

echo $text;

echo "<br>";

echo $text;

echo "<br>";

# 4) reWriteVariable
echo  "<br>" . 'reWriteVariable:' . "<br>";
$rewriteVariable = 7;
$rewriteVariable = 8;

echo $rewriteVariable;

echo "<br>";


# 5) echo and declare same time
echo  "<br>" . 'echo and declare same time:' . "<br>";
echo $text = 'There are ' . $daysInWeek . ' in a week.';
