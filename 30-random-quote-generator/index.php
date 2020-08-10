<?php

$quotes = [
    [
        'author' => 'Antoine De Saint',
        'text'  =>   'A designer knows that he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away.'
    ],
    [
        'author' => 'Benjamin Frankin',
        'text'  =>   'A investment in knowledge always pays the best interest.'
    ],
    [
        'author' => 'John Updike',
        'text'  =>   'Dreams come true. Without that possibility, nature would not incite us to have them.'
    ],
    [
        'author' => 'Socrates',
        'text'  =>   'The life which is unexamined is not worth living.'
    ],
    [
        'author' => 'Aristotle',
        'text'  =>   'We cannot learn without pain.'
    ]
];

/* How I build it

$quote = $quotes[rand(0, array_key_last($quotes))];
// count gave error when it could not find array offset 5  Notice: Trying to access array offset on value of type null in
// https://stackoverflow.com/questions/3687358/whats-the-best-way-to-get-the-last-element-of-an-array-without-deleting-it
https://www.php.net/manual/en/function.array-key-last.php

echo '<h2>"' . $quote['text'] . '"</h2>';
echo '<h4>- ' . $quote['author'] . '</h4>';
*/

// $quote = array_rand($quotes);

// var_dump($quote); // int 4

// die();
// exit();

// $quote = $quotes[rand(0, count($quotes) -1)];
$quote = $quotes[array_rand($quotes)];

$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random quote</title>
</head>
<body>
    <blockquote>
        <h2>&ldquo;<?php echo $quoteText; ?>&ldquo;</h2>
        <strong>- <?php echo $quoteAuthor; ?></strong>
    </blockquote>
</body>
</html>