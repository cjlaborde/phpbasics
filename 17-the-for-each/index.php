<?php
/*
$names = ['John', 'Joe', 'Jane'];


foreach ($names as $name) {
    echo $name . '<br>';
}
*/
/*
    John
    Joe
    Jane
*/
/*
$names = ['John', 'Joe', 'Jane'];


foreach ($names as $index => $name) {
    echo $index, ': ', $name, '<br>';
}
*/

/*
    0: John
    1: Joe
    2: Jane
*/

$topics = [
    [
        'id'    => 1,
        'title' => 'The best way to learn PHP?',
        'posts' => [
            ['body' => 'Practice a lot!'],
            ['body' => 'Work on a project'],
        ]
    ],
    [
        'id'    => 2,
        'title' => 'How do I use a foreach loop?',
        'posts' => [
            ['body' => 'Just watch this part.'],
        ]
    ]
];

foreach ($topics as $topic) {
    echo '<h1>' . $topic['title'] . '</h1>';
    foreach ($topic['posts'] as $post) {
        echo '<p>' . $post['body'] . '</p>';
    }
}
// The best way to learn PHP?
// How do I use a foreach loop?