<?php

# Will give error message
// echo $message = 'It's a lovely day today';

# To solve it use  '\' which tell php we should not consider next ' as literal string
echo $message = 'It\'s a lovely day today';

echo '<br>';
# Alternative you can use double quotes "

echo $message = "It's a lovely day today";

echo '<br>';

# Same issue if you have double quotes

// echo $message = "He said "learning PHP is great";
echo $message = "He said \"learning PHP is great\"";


echo '<br>';

# YOu can fix it by using ' instead

// echo $message = "He said "learning PHP is great";
echo $message = "He said 'learning PHP is great'";

echo '<br>';

#  You should usually use save coding standard, yet, if it makes things easier then use both.

$name = 'john';

$message = $name . ' said "learning PHP is great".';

echo $message;

echo '<br>';

# another situation we use both is when we use a link tag.

// will get error
// echo "<a href="https://www.google.com/">Link</a>";

echo "<a href=\"https://www.google.com\">Link</a>";

echo '<br>';

# Yet with both different quotes lookes better

echo '<a href="https://www.google.com">Link</a>';