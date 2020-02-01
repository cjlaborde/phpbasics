
<?php

# Arrays Resume
/*
// $names = ['john', 'joe'];
$names = array('john', 'joe');

# You can also add new value to the array.
$names[] = 'Arnold';


echo $names[0];
echo '<br>';
echo $names[1];

var_dump($names);
*/

# Lets use Keys instead

$people = [
    'john' => 26,
    'joe' => 21,

];

var_dump($people);

# We get error since we not using numeric
// echo $people[0]; //Undefined offset: 0

echo $people['john']; // 26
echo '<br>';
echo $people['joe']; // 21

# Error since the key doesn't exist
// echo $people['mike']; // Undefined index: mike

echo '<br>';

$users = [ 
    ['username' => 'john'], 
    ['username' => 'joe']
];

var_dump($users);

# What we will get as return is an Array 
// echo($users[0]); // Array
var_dump($users[0]);

# So to actually get the first value
echo($users[0]['username']);

echo '<br>';

echo($users[1]['username']);

echo '<br>';

# Now we will add another property to the user.
$users = [
    [
        'username' => 'john',
        'email' => 'john@email.com'
    ],
    [
        'username' => 'joe',
        'email' => 'joe@email.com'
    ],
];

var_dump($users);

echo '<br>';
# Make it look more organized if you don't have extention that does it for you.
echo '<pre>' . var_dump($users) . '</pre>';

echo '<br>';
# Challenge Try to access second user email address.

echo($users[1]['email']);

# Lets Go one level deep and say each of these users have a set of likes.
$users = [
    [
        'username' => 'john',
        'email' => 'john@email.com',
        'likes' => [
            'cats', 'food'

        ]
    ],
    [
        'username' => 'joe',
        'email' => 'joe@email.com',
        'likes' => [
            'books' ,'cats'
        ]
    ],
];

echo '<br>';


var_dump($users);

echo '<br>';

echo $users[0]['likes'][0];

echo '<br>';

# now we will use foreach

foreach($users as $user) {
    var_dump($user);   
}

echo '<br>';



foreach($users as $user) {
    echo $user['username'] . '<br>';    
}


# Now to add a new array to the array which is more complicated
$users[] = [
    'username' => 'josh',
    'email' => 'josh@email.com',
    'likes' => [
        'reading', 'cooking'
    ]
];

echo '<br>';

var_dump($users);

echo '<br>';

$users[2] = 'josh';


var_dump($users);

echo '<br>';


$users[1]['likes'][0] = 'videos';


var_dump($users[1]) . '<br>';

$users[1]['about'] = 'I am learning to code';

var_dump($users[1]);

