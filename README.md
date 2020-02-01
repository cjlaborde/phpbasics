# phpbasics

- [phpbasics](#phpbasics)
    - [Variables](#variables)
    - [Main Data types we can work with in PHP](#main-data-types-we-can-work-with-in-php)
    - [Strings](#strings)
    - [The numbers: Integers and floats](#the-numbers-integers-and-floats)
    - [Booleans](#booleans)
    - [Array basics](#array-basics)
    - [Diving into arrays](#diving-into-arrays)
      - [Basics of Arrays resume](#basics-of-arrays-resume)
      - [Index Types, Multi dimensional arrays, array functions build into php](#index-types-multi-dimensional-arrays-array-functions-build-into-php)

### Variables
1. String
```php
 <?php

$name = 'john';

echo $name; // john

   ```

2. Integer

```php

$daysInWeek = 7;

echo $daysInWeek; // 7

```
3. concatenation
```php
$daysInWeek = 7;

$text = echo 'There are ' . $daysInWeek . ' in a week.';

echo $text;
echo $text;
// There are 7 in a week.
// There are 7 in a week.
```

4. reWriteVariable
```php
$rewriteVariable = 7;
$rewriteVariable = 8;

echo $rewriteVariable;
```

5. echo and declare same time
```php
echo $text = 'There are ' . $daysInWeek . ' in a week.';
```
### Main Data types we can work with in PHP 

1. Boolean
    * true

    * false

2. integer
    * 12345

3. Floating point 
    * 3.15

4. Array
    * ['john', 'joe']

5. Object
    * {}

6. Resource
    * Basically something that returns when you upen up a file with php

7. NULL

8. Callback/ Callable

### Strings

1. Choose a standard of `$name = 'john';` or `$name = "john";`
2. you can also store number` $name = '7';`
3. Now if you want to use single quotes between a string
```php
$message = 'It's a lovely day today';
```
4. To solve issue use  '\' which tell php we should not consider next ' as literal string
```php
echo $message = 'It\'s a lovely day today';
```

5. Alternative you can use double quotes "
```php
echo $message = "It's a lovely day today";
```

6. Same issue if you have double quotes
```php
$message = "He said "learning PHP is great";
```

7. 
```php
echo $message = "He said \"learning PHP is great\"";
```


8. You can fix it by using ' instead
```php
echo $message = "He said 'learning PHP is great'";
```
9. You should usually use save coding standard, yet, if it makes things easier then use both.
```php
$name = 'john';

$message = $name . ' said "learning PHP is great".';

echo $message;
```

10. another situation we use both is when we use a link tag.

11. will get error
```php
    echo "<a href="https://www.google.com/">Link</a>";
```

12. Works but does not looks clean.
```php
echo "<a href=\"https://www.google.com\">Link</a>";
```
13. With both different quotes types lookes better
```php
echo '<a href="https://www.google.com">Link</a>';
```

### The numbers: Integers and floats

1. Integers
```php
$daysInWeek = 7;
$daysInWeek = 0;
$daysInWeek = -100;
```
2. Floats are similar they any number with decimal point

3. They are know as floating point integers, doubles or real numbers
4. But most of the time they called floats
5. a Good example is Pi
```php
$pi =3.141;
```
6. We can perform calculations with numbers + / - * etc
7. You can define big numbers with e example
```php
    $bankBalance = 1.2e6

    echo $bankBalance;
    // 1,200,000
```
8. There are certain data types that we can't echo out.

9. But the numbers are just changed to string when you use echo

10. We can also concatinate float values and integers values.
```php
    echo 'Your bank balance is $' . $bankBalance;
```
### Booleans

1. When you programming you need to figure out if something is true or false
2. To change direction of your code with if statements
3. Now we will use if statement with boolean value to see how it works.
4. The 2 boolean values are
    * true
    * false
5. We can assign it to variables.
```php
$fileIsUploaded = true;
$fileIsUploaded = false;
```
6. We will use if statement to see if it true or false.
7. () is the condition
8. We will check if this ()  condition evalue to true.
9. If this condition is true we run the block of code.
10. If we use false since it does not evaluate to true we don't see anthing
```php
if (false) { //
    echo 'Your file was uploaded';
}
```
9. But if we use true
```php
if (true) { // Your file was uploaded
    echo 'Your file was uploaded';
}
```
11. Using true or false don't make sense so we will use variable
```php
$fileIsUploaded = true;

if ($fileUploaded) { // Your file was uploaded
    echo 'Your file was uploaded';
}
```
12. Now set it to false and message will not show.
```php
$fileIsUploaded = false;

if ($fileUploaded) { //
    echo 'Your file was uploaded';
}
```

13. We can also use numbers for same effect.
```php
$fileIsUploaded = 1;

if ($fileUploaded) { // Your file was uploaded
    echo 'Your file was uploaded';
}
```

14. Here is 0 that is read as false as well.
```php
$fileIsUploaded = 0;

if ($fileUploaded) { // 
    echo 'Your file was uploaded';
}
```
15. But if we set it to -1 still works why?
```php
$fileIsUploaded = -1;

if ($fileUploaded) { // Your file was uploaded
    echo 'Your file was uploaded';
}
```
16. Key Question where do Booleans come from?

17. If we uploaded a file how do we know its been uploaded or not.
18. What happens if that when you use functions in php you get a value.
19. Lets say we have function to upload a file like
20. `upload_file();` This may return a value
```php
$fileIsUploaded = upload_file();

if ($fileUploaded) { // Your file was uploaded
    echo 'Your file was uploaded';
}
```
21. We will pass a value and it will return true or false
22. This function will return true or false.
```php
$isInt = is_int(1);

if ($isInt) {
    echo 'That is an integer';
}
// That is an integer
```

23. Now what if we pass string here

```php
$isInt = is_int(1);

if ($isInt) {
    echo 'That is an integer';
}
// That is an integer
```

24. We can also use var_dump instead
25. This will dump our variable. 
26. Because we can't echo var_dump will tell us what type of variable this is
```php
var_dump(is_int('john'));
// bool(false)
```
27. Here we use 1 which is true.

```php
var_dump(is_int(1));
// bool(true)
```
28. var_dump is great since it give us an insight of type of values we working with

### Array basics
> Arrays are data types that allow for multiple values, to be store within 1 value.

> These values can be mixed data types you can store string, integer, float, boolean inside an array.

> Purpose of array is been able to store multiple values. without having to create variable for each value.

> This allow you to organize the data and later allow you to iterate over these values, allow you to count them, add them and anything else you want it to do.

1. Here is a basic array, list of different names
2. instead of doing.
```php
$names1 = 'john';
$names1 = 'joe';
```
3. We want to conveniently store it in 1 value.
```php
$names = ['john', 'joe', 'leonardo', 7];

echo $names; // Array
```
4. Lets use var_dump to see values inside an array.
5. What it says here is we have an array with 4 items in it.
6. First item is 0 since this is what we call Zero Index
7. First value is a string with 4 characters, string(4)
8. As well we have our index 3 which is an int with value 7, [3]=> int(7)
```php
var_dump($names); // array(4) { [0]=> string(4) "john" [1]=> string(3) "joe" [2]=> string(8) "leonardo" [3]=> int(7) }
```
9. Now lets output first name
```php
echo $names[0]; // john
```
10. Error: Undefined since there is no value at that position
```php
echo $names[5]; echo '<br>'; // Error: Notice: Undefined offset: 5
```
11. We can also loop through array to asses each value in the loop.
12. What happens if I want to add items to array.
13. For example we have add if statement that if it evaluate to true we can add it to $names array
14. We going to assign new value to array
```php
$names[] = 'justin';
```
15. Lets see the content of the array 
```php
var_dump($names);
/*
array (size=5)
  0 => string 'john' (length=4)
  1 => string 'joe' (length=3)
  2 => string 'leonardo' (length=8)
  3 => int 7
  4 => string 'justin' (length=6)
*/
```
16. Now we can output that value since is part of the array.
```php
echo $names[5]; // justin
```

### Diving into arrays
> You see arrays everywhere when you work with php. So understand when to use them is crucial.

#### Basics of Arrays resume

1. The Basics create variable and assign it an array.
```php
    $names = [];
    var_dump($names); // array (size=0)
```
2. We can also assign values when we create and array
```php
$names = ['john', 'joe'];

var_dump($names);
/*
array (size=2)
  0 => string 'john' (length=4)
  1 => string 'joe' (length=3)
*/
```
3. The alternative way to create arrays with `array();` but `[];` is a lot easier to type and read.
```php
$names = ['john', 'joe'];
$names = array('john', 'joe');
```

4. You also know how to return an array value
```php
echo $names[0];
echo $names[1];
```
5. You can also add new value to the array.
```php
$names[] = 'Arnold';
var_dump($names);

/*
array (size=3)
  0 => string 'john' (length=4)
  1 => string 'joe' (length=3)
  2 => string 'Arnold' (length=6)
*/
```

#### Index Types, Multi dimensional arrays, array functions build into php

1. We know that by usng var_dump we got numerical indexes
```json
array (size=3)
  0 => string 'john' (length=4)
  1 => string 'joe' (length=3)
  2 => string 'Arnold' (length=6)
```
2. We using numerical index since we only have values in our array.

3. Because PHP doesn't know what we want to name these values they automatically get assigned numbers.

4. Now we will use keys instead, which is called associate array.
5. `=>` Means assign value
6. Here rather than numerical index we have strings as index
7. Why use this? Because in reality if you working with more complex data. It's great to assign keys these data.
8. So we know what to access.
```php

$people = [
    'john' => 26,
    'joe' => 21,
];

var_dump($people);

/*

array (size=2)
  'john' => int 26
  'joe' => int 21

*/

```
9. Before we were using $people[0]; Which in this case since we not using numeric
```php
echo $people[0]; //Undefined offset: 0
```
10. Instead we will access data by specific key
```php
echo $people['john']; // 26
echo $people['joe']; // 21
```
11. Lets look at a more complicated real life example
12. Lets say we have list of users that come from database
13. This will have an array as the first element of the array.
14. We are creating an arrays within an array.
```php
$users = [ 
    ['username' => 'john'], 
    ['username' => 'joe']];

    var_dump($users);
```
15. Now the first item is a numerical index is an array.
16. The second item is a numerical index is another array.
17. What we have here is essentially created a more powerful structure.
18. We can not iterate over this and access username and do that for each user.
```json
array (size=2)
  0 => 
    array (size=1)
      'username' => string 'john' (length=4)
  1 => 
    array (size=1)
      'username' => string 'joe' (length=3)
```
19. For example when we see website that list through a list of users.
20. Or List of forum topics. This is what is going on. Behind the scenes.
21. As example lets access the first user. Then grab that username.
22. We know that if we try to get first value like this we get Array as return
```php
echo($users[0]); // Array
```
23. We can also use var_dump
```json
array (size=1)
  'username' => string 'john' (length=4)
```
23. The question is how to get the values inside the array of the array.
23. 1) First element [0] then then the key within the array to get the value of the key used.
```php
echo($users[0]['username']); // john
echo($users[1]['username']); // joe
```
24. What we created was a multi dimensional array. Which means placing an array within an array.

25. We can build on into this and create even more levels of this.
26. At the moment each of there users have single property. What if they also had email address?
27. Here we will add another property to this particular user.
```php
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

```
28. As you see we have array with 2 elements, the first array has index 0 with 2 items inside, username & email, second array has index10 with 2 items inside, username & email as well.
```json
array (size=2)
  0 => 
    array (size=2)
      'username' => string 'john' (length=4)
      'email' => string 'john@email.com' (length=14)
  1 => 
    array (size=2)
      'username' => string 'joe' (length=3)
      'email' => string 'joe@email.com' (length=13)
```
29. You can also use `echo '<pre>' . var_dump($users) . '</pre>';`

30. As challenge try to access second user email address
```php
    echo($users[1]['email']);
```
31. Its really all about looking at the structure and drilling down into it. How you need to.
32. Now what we will do is go one level deeper to drill this is.
33. lets say each of these users have a set of likes
```php
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

```
34. Here we have an Array sincie another and inside another array.
```js

array (size=2)
  0 => 
    array (size=3)
      'username' => string 'john' (length=4)
      'email' => string 'john@email.com' (length=14)
      'likes' => 
        array (size=2)
          0 => string 'cats' (length=4)
          1 => string 'food' (length=4)
  1 => 
    array (size=3)
      'username' => string 'joe' (length=3)
      'email' => string 'joe@email.com' (length=13)
      'likes' => 
        array (size=2)
          0 => string 'books' (length=5)
          1 => string 'cats' (length=4)
```
35. To access the first type of like for John. `echo $users[0]['likes'][0];`

36. Know that many times you will not build these Array structures yourself and use one created by someone else.

37. So you got to get use to use var_dump on data you get from somewhere and workout how you going to loop over it.

38. Now we will take quick look at a loop

39. Array like this useless without been able to do something with it.

40. This case we want to list through the users and show them in the browser.

41. we wll use a `foreach ()` for each thing we want to call the block of code to do something.
```php
foreach($users as $user) {
    var_dump($user);   
}
```

42. `var_dump($user);`
```js
array (size=3)
  'username' => string 'john' (length=4)
  'email' => string 'john@email.com' (length=14)
  'likes' => 
    array (size=2)
      0 => string 'cats' (length=4)
      1 => string 'food' (length=4)
array (size=3)
  'username' => string 'joe' (length=3)
  'email' => string 'joe@email.com' (length=13)
  'likes' => 
    array (size=2)
      0 => string 'books' (length=5)
      1 => string 'cats' (length=4)

```
43.  Get the user from the array. Now rather than accesing the item directly we looping over them.
```php
foreach($users as $user) {
    echo $user['username'] . '<br>';    
}
```

44. Now we going to modify a more complex array like this.

45. Before we sae how we can add to the array by `$users[] = 'josh';

46. Now to add a new array to the array which is more complicated
```php
$users[] = [
    'username' => 'josh',
    'email' => 'josh@email.com',
    'likes' => [
        'reading', 'cooking'
        ]
```
47. `var_dump($users);` as you see we added josh array to the original array
```js
array (size=3)
  0 => 
    array (size=3)
      'username' => string 'john' (length=4)
      'email' => string 'john@email.com' (length=14)
      'likes' => 
        array (size=2)
          0 => string 'cats' (length=4)
          1 => string 'food' (length=4)
  1 => 
    array (size=3)
      'username' => string 'joe' (length=3)
      'email' => string 'joe@email.com' (length=13)
      'likes' => 
        array (size=2)
          0 => string 'books' (length=5)
          1 => string 'cats' (length=4)
  2 => 
    array (size=3)
      'username' => string 'josh' (length=4)
      'email' => string 'josh@email.com' (length=14)
      'likes' => 
        array (size=2)
          0 => string 'reading' (length=7)
          1 => string 'cooking' (length=7)
```

48. You don't want to keep same structure but in this case because we looking over this user array. You will want all the same properties.

49. Now we want to modify value in one of these items `$users[2] = 'john';
```php

array (size=3)
  0 => 
    array (size=3)
      'username' => string 'john' (length=4)
      'email' => string 'john@email.com' (length=14)
      'likes' => 
        array (size=2)
          0 => string 'cats' (length=4)
          1 => string 'food' (length=4)
  1 => 
    array (size=3)
      'username' => string 'joe' (length=3)
      'email' => string 'joe@email.com' (length=13)
      'likes' => 
        array (size=2)
          0 => string 'books' (length=5)
          1 => string 'cats' (length=4)
  2 => string 'josh' (length=4)
  ```
50. What I want to do is change the likes 'books', 'cats'

51. Lets change value from books to videos
52. `$users[1]['likes'][0] = 'videos';`
53. `var_dump($users[1]);`
```php
array (size=3)
  'username' => string 'joe' (length=3)
  'email' => string 'joe@email.com' (length=13)
  'likes' => 
    array (size=2)
      0 => string 'videos' (length=6)
      1 => string 'cats' (length=4)
```
54. You can even add more properties if you want to. Lets say we going to add about section to joe.
55. `$users[1]['about'] = 'I am learning to code';`
```js
array (size=4)
  'username' => string 'joe' (length=3)
  'email' => string 'joe@email.com' (length=13)
  'likes' => 
    array (size=2)
      0 => string 'videos' (length=6)
      1 => string 'cats' (length=4)
  'about' => string 'I am learning to code' (length=21)

```
