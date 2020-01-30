<?php
// phpinfo();
// print_r(php_ini_loaded_file());

$names = ['john', 'joe', 'leonardo', 7];

#echo $names; // Array

echo '<br>';

# Here is how we see values inside an array
var_dump($names); // array(3) { [0]=> string(4) "john" [1]=> string(3) "joe" [2]=> string(8) "leonardo" }

echo '<br>';
# Now lets output second name
echo $names[0]; echo '<br>'; // john
echo $names[1]; echo '<br>'; // joe
echo $names[2]; echo '<br>'; // leonardo


# echo $names[5]; echo '<br>'; // Error: Notice: Undefined offset: 5

# lets add new name
$names[] = 'justin';

echo '<br>';

var_dump($names);


echo '<br>';

echo $names[5]; // justin