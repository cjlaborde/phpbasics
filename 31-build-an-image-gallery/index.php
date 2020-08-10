<?php
/*
$directory = opendir('images');

// var_dump($directory);

while ($imageFile = readdir($directory)) {
    var_dump($imageFile);
}
*/

require 'directoryreader.php';

// we going to open images directory
$images = directoryreader('images');
// $images = directoryreader('cats');

if (!$images) {
    die ('Could not load files.');
}

// var_dump($images);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <?php foreach ($images as $image): ?>
        <img src="31-build-an-image-gallery/<?php echo $image; ?>">
    <?php endforeach; ?>
</body>
</html>