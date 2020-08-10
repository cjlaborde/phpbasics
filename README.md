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
    - [NULL](#null)
    - [Concatination](#concatination)
      - [Now we we look into variable parting an alternative to concatination.](#now-we-we-look-into-variable-parting-an-alternative-to-concatination)
      - [Other alternative when we echo things out is using a comma ,](#other-alternative-when-we-echo-things-out-is-using-a-comma-)
    - [If Statement Basics](#if-statement-basics)
      - [Nesting If statements](#nesting-if-statements)
      - [Inversion Operator](#inversion-operator)
      - [check which values will run true or not](#check-which-values-will-run-true-or-not)
    - [Logical Operators](#logical-operators)
      - [&& and Operator](#-and-operator)
      - [OR Operator](#or-operator)
      - [NOT operator !](#not-operator-)
    - [Comparison Operators](#comparison-operators)
      - [Equal operators == (does not check type) and === (checks type)](#equal-operators--does-not-check-type-and--checks-type)
      - [Not Equal operator](#not-equal-operator)
      - [using Not equal on !variable](#using-not-equal-on-variable)
      - [using <> symbol as not equal](#using--symbol-as-not-equal)
      - [Using < and > to compare.](#using--and--to-compare)
      - [Combine with logical operator](#combine-with-logical-operator)
    - [Switch](#switch)
      - [Using comparison operator in switch cases.](#using-comparison-operator-in-switch-cases)
    - [Basi Arithmetic](#basi-arithmetic)
      - [using ++](#using-)
      - [Now we will use more complicated function using %.](#now-we-will-use-more-complicated-function-using-)
      - [Now we will use substraction](#now-we-will-use-substraction)
      - [Now we will use short version +=](#now-we-will-use-short-version-)
      - [Modular](#modular)
      - [Exponential operator](#exponential-operator)
    - [For Loop](#for-loop)
      - [Pagination example](#pagination-example)
      - [We can also use a for loop to go through an array.](#we-can-also-use-a-for-loop-to-go-through-an-array)
    - [The While and Do While loop](#the-while-and-do-while-loop)
      - [Now we will count to 10 using this while loop](#now-we-will-count-to-10-using-this-while-loop)
      - [Now we create example where we check how many times we have roll dice to reach specific number.](#now-we-create-example-where-we-check-how-many-times-we-have-roll-dice-to-reach-specific-number)
      - [Do While Loop](#do-while-loop)
    - [The Foreach Loop](#the-foreach-loop)
      - [Foreach Loop using multidimensional array](#foreach-loop-using-multidimensional-array)
    - [Breaking and continuing](#breaking-and-continuing)
      - [Break](#break)
      - [continuing](#continuing)
      - [break out the outer loop from within the inner loop.](#break-out-the-outer-loop-from-within-the-inner-loop)
    - [Dumping](#dumping)
      - [xdebug](#xdebug)
      - [using <pre>](#using-pre)
      - [print_r](#print_r)
    - [Functions basics](#functions-basics)
      - [Pass optional arguments to a function](#pass-optional-arguments-to-a-function)
      - [Assign a function to a variable](#assign-a-function-to-a-variable)
    - [Function flexibility](#function-flexibility)
    - [func-get-arg](#func-get-arg)
      - [func-get-arg](#func-get-arg-1)
      - [Array_sum](#array_sum)
    - [lets talk about scope](#lets-talk-about-scope)
      - [global](#global)
      - [use keyword](#use-keyword)
    - [Breaking up files](#breaking-up-files)
      - [require_once && include_once](#require_once--include_once)
      - [why break code?](#why-break-code)
      - [Create separated function](#create-separated-function)
    - [Post and get superglobals](#post-and-get-superglobals)
      - [$_GET superglobal](#_get-superglobal)
      - [isset](#isset)
      - [Form submitting with $_POST](#form-submitting-with-_post)
    - [Ternary Operator](#ternary-operator)
      - [Null Coalescing Operator](#null-coalescing-operator)
      - [Short hard way to do ternary operator](#short-hard-way-to-do-ternary-operator)
    - [Commeting](#commeting)
    - [Finding PHP Functions](#finding-php-functions)
      - [Convert all letters from a name to upper/lower case](#convert-all-letters-from-a-name-to-upperlower-case)
      - [trim](#trim)
      - [substr](#substr)
      - [empty](#empty)
      - [number_format](#number_format)
      - [Redirect to another page using header](#redirect-to-another-page-using-header)
    - [Submitting a form](#submitting-a-form)

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
9. You should usually use same coding standard, yet, if it makes things easier then use both.
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
    echo 'Your file was not uploaded';
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
28. As you see we have array with 2 elements, the first array has index 0 with 2 items inside, username & email, second array has index 1 with 2 items inside, username & email as well.
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
34. Here we have an Array since another and inside another array.
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

45. Before we saw how we can add to the array by `$users[] = 'josh';

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

### NULL
> Null represents a variable with no value. Know happens when a variable is assigned the value null or has simply not been set a value.

1. $name = null;


```php
var_dump($name); //null
```

2. We use null usually when we want to set a variable for name, but we not sure what the value would be yet.
3. We will eventually update the value.
```php
$name = null;

$name = 'John';

var_dump($name); // John
```
4. Reason why we use null value is because we can NOT do.
```php
$name

$name = ;

```
5. It would give an error.
6. If you var_dump something that doesn't exist you get null and error.
   ```php
   var_dump($age); // null
   ```
7. Using unset will set variable to null and give error
```php
$name = 'John';

unset($name);

var_dump($name);
```
8.  if you see Null anywhere, it must be set prior to be overwrittern.
9.  But if you see Null and error message 
10. >Notice: Undefined variable: name
11. Then it means the variable has not been set and doesn't exist
12. Instead of using unset() set variable to null.
```php
$name = null;
```
13. Which mean variable does exist and you will not see error message and see just Null output instead.

### Concatination

1. Lets say we have simple variable called weather
```php
echo 'The current weather is ';
echo $weather;

// The current weather is sunny

```
2. Instead we can concatinate using a dot . we get exact same result.
```php
'The current weather is ' . $weather;

//The current weather is sunny
```
3. You can also add multiple variables and sentences.
```php
$weather = 'sunny';

$degrees = 30.5;

$status = 'The current weather is ' . $weather . ' and it\'s ' . $degrees . ' degress';

echo $status;

// The current weather is sunny and it's 30 degress

```

4. php will convert all into a single string including integers and float values
```php
var_dump($status);

string 'The current weather is sunny and it's 30.5 degress' (length=50)
```

#### Now we we look into variable parting an alternative to concatination.
1. just type the variables inside.
```php
echo $status = 'The current weather is $weather and it'/s $degrees degress';
// The current weather is $weather and it's $degrees degress
``` 

2. If we use double quotes instead PHP does convert the variables.
```php
echo $status = "The current weather is $weather and it's $degrees degress";
// The current weather is sunny and it/'s 30.5 degress
``` 

3. You can also put them inside {} and get same result
```php
echo $status = "The current weather is {$weather} and it's {$degrees} degress";
// The current weather is sunny and it/'s 30.5 degress
```

4. Reason we use  {} is because PHP doesn't know when the variable stats and when the variable ends.

5. What if we add symnbo like degree symbol o it will fail. (php seems to reconigze other symbols like # or $)
```php
echo $status = "The current weather is $weather and it's $degreeso degress";
// Undefined variable: degreeso

```
6. If ou use {} it works correctly
```php
echo $status = "The current weather is {$weather} and it's {$degrees}o degress";
```

#### Other alternative when we echo things out is using a comma ,
1. Using a comma only works with echo
```php
$name = 'John';

echo 'My name is ', $name;
// My name is John.
```
2. Is a way to chain many strings to build a string as you echo out.
3. It will not work when declaring a variable
```php

$name = 'John';

$text = 'My name is ', $name;

// Parse error: syntax error, unexpected ',' in
```

4. Instead we should use a dot instead.

```php
$name = 'John';

$text = 'My name is ' . $name;
// My name is John

```

5. Good practice to use . dots instead of commas no matter if you use echo or not.

6. As well when code start to get complicated use "" double quotes instead and when needed curly brackets "".

### If Statement Basics
> If Statements can Control the flow of your aplication by checking a certain condition. Then running code
> when ever that condition evaluate to true or false.

1. You have to be careful with what you use to compare when you do an if statement, you can't use =
```php
$dayOfWeek = 1;

if ($dayfWeek = 2) {

}

echo $dayfWeek; // 2
```

2. You should use  == or === (also compares types)
```php
$dayOfWeek = 1;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
}
// It is Monday. 
```

3. If it false returns nothing
```php
$dayOfWeek = 2;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
}
```

4. Using else statement
```php
$dayOfWeek = 2;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
} else {
    echo 'It is NOT Monday';
}

// It is NOT Monday
```

5. Using elseif to chain together conditions, Yet this is not efficient and we will use more efficient way next.
```php
$dayOfWeek = 5;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
} elseif ($dayOfWeek == 2) {
  echo 'It is Tuesday.';
} elseif ($dayOfWeek == 3) {
  echo 'It is Wednedays';
} else {
  echo 'It is not a valid day.';
} 
// It is not a valid day.
```

6. Now we will use an array and use array_keys, which create new array with just keys
```php
$daysOfWeek = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday'
];

var_dump(array_keys($daysOfWeek));
/*

array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3

*/
```
7. Now we will use if statement with in_array and array keys
8. We will take $dayOfWeek and compare it to see if is inside the new array that has only keys with in_array 
```php
$dayOfWeek = 1; 

$daysOfWeek = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday'
];

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
  echo $daysOfWeek[$dayOfWeek];
} else {
    echo 'That is not a valid day';
}
```

#### Nesting If statements
1. Here we nest an if statement inside another.
```php
$name = 'Alexander James Garrett';

if ($name) {
    echo 'Your name is ' . $name;

    if (strlen($name) > 10) {
        echo ' Oh you have a long name';
    }
}
// Your name is Alexander James Garrett Oh you have a long name
```

2. Now with short name.
```php
$name = 'Alex';

if ($name) {
    echo 'Your name is ' . $name;

    if (strlen($name) > 10) {
        echo ' Oh you have a long name';
    }
}
// Your name is Alex
```
3. You can nest inside an if as many times as needed but makes code hard to read and maintain.
```php
$name = 'Alex';

if ($name) {
    echo 'Your name is ' . $name;

    if (strlen($name) > 10) {
        echo ' Oh you have a long name';
         if (strlen($name) > 10) {
           echo ' Oh you have a long name';
            if (strlen($name) > 10) {
              echo ' Oh you have a long name';
            }
         }
    }
}

```
4. Here is a way to write the same but make it a lot more cleaner using inversion operator
  
#### Inversion Operator
1. First we going to do is check if we don't have a name and do not do anything.
```php
$name = 'Alex';

if (!$name) {
    return; // returns breaks the execution of the code if name is no name.
}

echo 'Hello'; // Hello
```

2. Now without name, returns nothing since code stop running after the return.
```php
$name = null;

if (!$name) {
    return; // returns breaks the execution of the code if name is no name.
}

echo 'Hello'; //

```

3. Here is more efficient cleaner way alternative to nesting which you should not use often.
```php

$name = 'Alexander James Garrett';

if (!$name) {
    return; // returns breaks the execution of the code if name is no name.
}

echo 'Your name is ' . $name . '.';

if (strlen($name) > 10) {
    echo ' Oh, and you have a long name.';
}
// Your name is Alexander James Garrett. Oh, and you have a long name.
```

#### check which values will run true or not

1. true will always run the code and false will not
```php
if (true) {
  echo 'This will alwas run when set to true or boolean 1';
}
// This will alwas run when set to true or boolean 1

if (false) {
  echo 'This will not run when set to false or boolean 0';
}
//

```
2. Same with Numbers
```php
if (1) {
  echo 'This will alwas run when set to true or boolean 1';
}
// This will alwas run when set to true or boolean 1

if (0) {
  echo 'This will not run when set to false or boolean 0';
}
```
3. what if the value negative?
```php

if (-5) {
  echo 'This will not run when set to false or boolean 0';
}
// This will not run when set to false or boolean 0
```
4. Above ran even if it negative. It is important to know that
```php
if (5) {
  echo 'will it run';
}
// will run

if (0) {
  echo 'will it run';
}
//
if (-5) {
  echo 'will run';
}
// will run

```
5. Is important to know this because when you using variable in if statement is important to know what you working with.
6. You can do that using var_dump()


### Logical Operators

#### && and Operator

1. we going to use the && operator

```php
if (true && true) {
  echo 'Hello';
}
// Hello
```

2. What if one is true and other false
```php
if (true && false) {
  echo 'Hello';
}
// 
if (true && false && true {
  echo 'Hello';
}
//

if (true && true & true) {
  echo 'Hello';
}
// Hello

if (true && true & false) {
  echo 'Hello';
}
//
```

3. Now we will use a more detailed example of logical operator
```php
// $username = 'billy'; //
$username = 'alex';  // You are in!
$password = 'ilovecats';

if ($username == 'alex' && $password == 'ilovecats') {
  echo 'You are in!';
}
// 

```
#### OR Operator

1. We going to check if day of the week provided is either 6 or 7.
```php
$dayOfWeek = 7; // The weekend is here!
// $dayOfWeek = 5; //

if ($dayOfWeek == 6 || $dayOfWeek == 7) {
  echo 'The weekend is here!';
}

```

#### NOT operator !
1. You can combine multiple operators
```php
$dayOfWeek = 6; // You have a day off!
$dayOfWeek = 7; //
$workingTheWeekend = true;

if ($dayOfWeek == 6 || $dayOfWeek == 7 && !$workingTheWeekend) {
  echo 'You have a day off!';
}

```

2. Our code above is not working correctly. It should not display on $dayOfWeek = 6;  // You have day off.
3. Reason for this not working is operator Presidence.
4. Since is only checking `$dayOfWeek == 7 && !$workingTheWeekend` this part here.
5. then `$dayOfWeek == 6` this part here been evaluated Only that why resulting true and not checking for `!$workingTheWeekend`
6. To fix this we need to first set the first condition we want to evaluate sorounded by ()
```php

$dayOfWeek = 6; //
// $dayOfWeek = 7; //
$workingTheWeekend = true;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) {
  echo 'You have a day off!';
}
```
7. Now we use right condition and works properly
```php

$dayOfWeek = 7; // You have a day off!

$workingTheWeekend = false;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) {
  echo 'You have a day off!';
}
```

7. All operators you really need are  &&(And), || (or), ! (not)
8. Be wat way of your parentesis and what is checked first to avoid Operator Presidence issue we had in Step 3.


### Comparison Operators
#### Equal operators == (does not check type) and === (checks type)

1. Both conditions are the same.
```php
$uploaded = true;

if ($uploaded) {

}

if ($uploaded == true) {
  //  this one is easier to see what we comparing
}

```
2. Nothing wrong with this but it can be confusing.
```php
$uploaded = 1;

if ($uploaded == true) {
    echo 'Uploaded';
}
// Uploaded
```

3. That is why we going to introduce the === comparison operator
```php
$uploaded = 1;

if ($uploaded == true) {
    echo 'Uploaded';
}
//
```
4. Above failed because failed type. This one has correct type.
```php

$uploaded = 1;

if ($uploaded == true) {
    echo 'Uploaded';
}
// Uploaded
```
5. Is better to use === equal if you want to ensure result is the value and type you setting. Then strict type comparison very helpful.
6. Otherwise you may run into issue you don't want to.
7. Here is example how === is better to get the correct result and avoid passing when there may be an error, and getting negative value.

```php

$uploaded = -5;

if ($uploaded == true) {
    echo 'Uploaded';
}
// Uploaded
$uploaded = -5;

if ($uploaded === true) {
    echo 'Uploaded';
}
// 
```
8. As you can see === is more safe.

9. Here is another example.
```php

$tablesAvailable = true;

if ($tablesAvailable) {
    echo 'Book a table';
}
// Book a table


$tablesAvailable = '1false';

if ($tablesAvailable) {
    echo 'Book a table';
}

// Book a table
```
10. Now you see the issue. What is happening here is PHP is type casting tablesAvailable so that it can be compared.

11. Lets see how PHP type casting works
```php
echo '1john'; // 1john
echo (int) '1john'; // 1
```
12. As you can see is eliminating the text leaving only 1.
13. If were to var_dump() we will see the type as int

```php
var_dump((int) '1john'); // int 1
```
14. We can test it for bool values as well
```php
var_dump((bool) 'false'); // boolean true

```
15. This can be very messy since php will automatically type cast this for you.
16. As you can see above first one pass when using == which should not.
17. It does not pass when you use === which is the correct way.
18. So you should use === in most cases and check for types to avoid these issues.
```php
$tablesAvailable = 'false';

if ($tablesAvailable == true) {
    echo 'Book a table';
}
//Book a table

echo '<br>';


if ($tablesAvailable === true) {
    echo 'Book a table';
}
// 

```
#### Not Equal operator
1. Now we will use the not equal operator !=  and not equal with type check !==

```php
// fails since php is converting 'true' string as boolean true.
$tablesAvailable = 'true';

if ($tablesAvailable != true) {
    echo 'No table available'
//

// is passing since the type check doesn't pass.
$tablesAvailable = 'true';

if ($tablesAvailable !== true) {
    echo 'No table available'

// echo 'Book a table
```
#### using Not equal on !variable

1. Another way to do not equal using ! before !variable.

```php
$tablesAvailable = 'false';

if (!$tablesAvailable) {
    echo 'No table available'

// 

$tablesAvailable = false;

if (!$tablesAvailable) {
    echo 'No table available'

// Book a table

$tablesAvailable = true;

if (!$tablesAvailable) {
    echo 'No table available'
// 


$tablesAvailable = '1';

if (!$tablesAvailable) {
    echo 'No table available'

//
```
2. Problem with this method is that it does not check type.
3. So An alternative better way that reads better is and checks type is
```php

$tablesAvailable = false;

if ($tablesAvailable !== true) {
    echo 'No table available'
```

#### using <> symbol as not equal
1. <> symbol
```php

// $tablesAvailable = 'true'; //
// $tablesAvailable = true; //
$tablesAvailable = false; // No table available
// $tablesAvailable = 'false'; //


if ($tablesAvailable <> true) {
    echo 'No table available';
}
```

2. <> is an alternative but is a lot more clear to use !== as well !== has type check and <> does not have type check.

#### Using < and > to compare.
1. here we will use bigger than or less than symbols
```php
$roomsRequested = 4; // Sorry, not enough rooms
$roomsRequested = 3; //
$roomsAvailable = 3;

if ($roomsRequested > $roomsAvailable) {
  echo 'Sorry, not enough rooms.';
}
// Sorry, not enough rooms

```
2. It works the same if we move variables and change symbol.
   
```php
$roomsRequested = 4; // Sorry, not enough rooms
$roomsAvailable = 3;

if ($roomsAvailable < $roomsRequested) {
  echo 'Sorry, not enough rooms.';
}
// Sorry, not enough rooms.
```
3. Check so that you always keep a room free in your hotel.
4. So you want to check if room you requested is greater than or equal to and show error.
5. We will use >= to accomplish this.
```php
$roomsRequested = 3; //  Not enough rooms.
$roomsRequested = 2;
$roomsAvailable = 3;

if ($roomsRequested >= $roomsAvailable) {
  echo 'Not enough rooms.';
}

// Not enough rooms.
// 

```
6. Now we will use <=
```php

$roomsRequested = 2; //
$roomsRequested = 3; // Sorry, not enough rooms.
$roomsAvailable = 3;

if ($roomsAvailable <= $roomsRequested) {
    echo 'Sorry, not enough rooms.';
}

```

#### Combine with logical operator
1. We going to check if too many rooms been requested, we also going to set a limit to maximum rooms we can book.
```php
$roomsRequested = 7;
$roomsAvailable = 20; // Your booking is complete.
// $roomsAvailable = 2; // Please choose less rooms.


if ($roomsRequested >= $roomsAvailable) {
    echo 'Please choose less rooms.';
} else {
    echo 'Your booking is complete.';
}
```
2. Now we will add limit to same function
```php
$maxRoomsAllowed = 5;
// $roomsRequested = 4; // Your booking is complete.
$roomsRequested = 7; // Please choose less rooms.
$roomsAvailable = 20;


if (($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed)) {
    echo 'Please choose less rooms.';
} else {
    echo 'Your booking is complete.';
}
```
3. Works correctly but would be better to separate if staments to drill down real reason why is failing.

### Switch
> Swtich statement can be more flexible and cleaner solution alternative to if statement.
1. Switch statement similar to if statement
2. You first put a value inside (1)
3. Then you write a series of scased inside the brackets.
4. In which we will execute something if there is a match of the cases
5. When there is a match it will execute case and then break code.
```php
switch (1) {
    case 1:
        echo 'The value is one.';
    break;
}
// The value is one.

```
6. Default is kind of an else inside an if statement.
```php
switch (2) {
    case 1:
        echo 'The value is one.';
        break;
    default:
        echo 'The value is unknown.';
        break;
}
// 
```
7. We also add another case statement
```php
switch (2) {
    case 1:
        echo 'The value is one.';
        break;
    case 2:
        echo 'The value is two.';
        break;
    default:
        echo 'The value is unknown.';
        break;
}
// The value is two.
```
#### Using comparison operator in switch cases.
1. What we doing here is passing a true value. Where all these conditions will be attempted and evaluated.
2. Then if weather is sunny we will set color that was declared as null into blue.
3. If weather is cloudy we want to set the color to gray.
4. Then we echo out the color and we should see the color depending on what we choose for the weather.
```php
   $weather = 'sunny';
   $color = null;

   switch (true) {
       case $weather == 'sunny';
           $color = 'blue';
       break;
       case $weather == 'cloudy';
           $color = 'gray';
       break;
   }

   echo $color; // blue
```
### Basi Arithmetic
1. We can assign same value and add + 1
```php
$views = 0;

$views = $views + 1;

echo $views;
// 1
```
2. We can also change it to float even through was integer at first.
```php
$views = 0;

$views = $views + 5.5;

echo $views;
// 5.5
```
3. What happens if we add a string?
4. This is the concept of type casting. Where php convert string into number. Because it sees we trying to add + to it.
```php
$views = 0;

$views = $views + '1';

echo $views;
// 1

```
5. you can also add declare variable twice to increase its value twice.
```php
$views = 0;

$views = $views + 1;

$views = $views + 1;

echo $views; // 2
```

#### using ++
1. if you assign variable and use it, it will not work.

```php
$views = 0;

$views = $views++;

echo $views; // 0
```

2. Here is proper way to use ++
```php
$views = 0;

$views++;

echo $views; // 1
```
3. You can also use  ++ multiple times to add up the value.
```php
$views = 0;

$views++;

$views++;

$views++;

echo $views; // 3

```
#### Now we will use more complicated function using %.
1. We will use formula for % 7 / 30  * 100
2. We will use parentesis based on the order of the calculation.
```php
$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = ($completedLessons / $totalLessons) * 100;

echo "You've completed {$percentageComplete}% of this course!";
// You've completed 23.333333333333% of this course!

```
3. We use parentesis to command which calculation should be executed first.
4. Now we going to fix issue with 23.333333333333%  we only want first 2 digits before the .
5. We could round this down or use a php function number_format
6. We could re assign value.
```php
$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = ($completedLessons / $totalLessons) * 100;

$percentageComplete = number_format($percentageComplete);
echo "You've completed {$percentageComplete}% of this course!";
// You've completed 23% of this course!
```
7. You can also be more specific and assign second value to assign number extra decimal places.
```php
$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = ($completedLessons / $totalLessons) * 100;

$percentageComplete = number_format($percentageComplete, 2); // You've completed 23.33% of this course!
$percentageComplete = number_format($percentageComplete, 1); // You've completed 23.3% of this course!
$percentageComplete = number_format($percentageComplete, 3); // You've completed 23.333% of this course!
// same result
$percentageComplete = number_format($percentageComplete, 0); // You've completed 23% of this course!
echo "You've completed {$percentageComplete}% of this course!";
```
8. Now lets inline the code since there is no need to re-assign the variable.
```php
$totalLessons = 30;
$completedLessons = 7;

$percentageComplete =  number_format(($completedLessons / $totalLessons) * 100);

echo "You've completed {$percentageComplete}% of this course!"; // You've completed 23% of this course!
```

#### Now we will use substraction
1. Here we substract balance
```php
$balance = 500;
$cost = 25;

echo $balance = $balance - $cost;

// 475
```

2. Now we will use  --
```php
$views = 0;

$views--;

echo $views;

// -1
```

#### Now we will use short version +=
1. instead of addind $points = $points + 1 which is quicker and cleaner
```php
$points = 0;
$points += 10;

echo $points; // 10

```
2. You can also substract as well
```php
$points = 0;
$points += 10;
$points -= 2;

echo $points; // 8
```

#### Modular
1. will return the remainder of a number, when is divided by another.
```php
$a = 10;
$b = 8;

echo $a % $b;

```
2. This mostly used when you are interested in the remainder of a number.
3. Also has other uses in this case we will use a for
4. First thing we do is create new variable row
5. Then $row that we are looping is less than equal to rows <=
6. Lastly we add $rows ++
```php
$rows = 10;

for ($row = 1; $row <= $rows; $row++) {
  echo '1<br>';
}
/*
   1
   1
   1
   1
   1
   1
   1
   1
   1
   1
*/
```
2. Now we will check if number even or not and give it an error.
3. We will use for and modular
```php
$rows = 10;

for ($row = 1; $row <= $rows; $row++) {
    if ($row % 2 === 0) {
        echo 'Even';
    } else {
        echo 'Odd';
    }
}
// OddEvenOddEvenOddEvenOddEvenOddEven
```
#### Exponential operator
1. If we want to raise power by 2 we just use ** symbols
2. Which would 10 X 10 = 100
```php
$a = 10;

echo $a ** 2; // 100
echo $a ** 9 // 1000000000
```

### For Loop
1. This will in fact run.
2. What we have not apply here is an initiator, condition, and an increment
3. since there is no condition it will cause infinite loop and cause server to crash.
```php
for (;;) {
    //
}
// Fatal error: Maximum execution time of 30 seconds exceeded in
```
3. As soon as for loop star we want our initiator to run x = 1; We will use initiator to know how many times we want to loop based on condition has been meet.
4. While The condition carry true it will continue looping $x <= 10;
5. The we have the last part which is our increment $x++
6. you can also use $x = $x + 1 alternative to shorter version $x++
7. Now we will see what happens when we echo out $x;

```php
for ($x = 1; $x <= 10; $x++) {
    echo $x , '<br>';
}
/*
    1
    2
    3
    4
    5
    6
    7
    8
    9
    10
*/

```
#### Pagination example
1. Lets say we have 210 articles, then define how many items I want to see 25 per page. Then we need to find out how many pages there are based on these numbers.
2. Is better practice to create new variable $pageCount rather than putting it directly on the loop.
```php

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = $totalItems / $itemsPerPage;

echo $pageCount; // 8.4

```
3. Since result is 8.4 it means we have to round them up and that there are 9 pages.
4. To do this we use php function called ciel() which is short for cieling.
```php

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

echo $pageCount; // 9

```
5. The opposite is floor
```php

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = floor($totalItems / $itemsPerPage);

echo $pageCount; // 8

```
6. Now we we want to do is use for loop to create links user can click
7. typically you will find an i inside a for loop this stance for i = increment
```php

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

for ($i = 1; $i <= $pageCount; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a> ';

}

// 1 2 3 4 5 6 7 8 9

```
8. This is how pagination works and more items will automatically increase it.
```php

$totalItems = 811; // // 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

for ($i = 1; $i <= $pageCount; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a>';
}
```

9. We can also check if there are no more than 1 page to not display page number
```php
$totalItems = 25;
$itemsPerPage = 25;
$pageCount = ceil($totalItems / $itemsPerPage);
// only display when pageCount greater than 1
if ($pageCount > 1) {
    for ($i = 1; $i <= $pageCount; $i++) {
        echo '<a href="?page=' . $i . '">' . $i . '</a> ';
    }
}
```
#### We can also use a for loop to go through an array.
1. I want to loop through all items in the array and echo out the names.
```php
$names = ['john', 'joe', 'jane'];

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . '<br>';
}
/*
john
joe
jane
*/

```
2. Now we know that it will automatically work if we add new name.
```php
$names = ['john', 'joe', 'jane', 'karen'];

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . '<br>';
}
/*
   john
   joe
   jane
   karen
*/

```

### The While and Do While loop
1. Inside the parentesis is the expression that allow the loop to run. Till it evaluate to false.
```php
while () {
  
}

```
2. What would happen if you write false?
```php
while (false) {
  echo 'Will this run?';
}
//
```
3. Now what would happen if you set condition to true.
```php
while (false) {
  echo 'Will this run?';
}
// Will this run?Will this run?Will this run?Will this run?Will this run?Will this run?Will this run?Will this run?Will this run?Will this run?Will this run?Will this run?
```
4. It will go into infinite loop.
#### Now we will count to 10 using this while loop
```php
$currentNumber = 1;
$endAt = 10;
$incrementBy = 1;

while ($currentNumber <= $endAt) {
  $currentNumber += $incrementBy;
  echo $currentNumber . '<br>';
}
/*
   2
   3
   4
   5
   6
   7
   8
   9
   10
   11
*/

```
5. This is happening based on order of incrementing
```php
$currentNumber = 1;
$endAt = 10;
$incrementBy = 1;

while ($currentNumber <= $endAt) {
    echo $currentNumber . '<br>';
    $currentNumber += $incrementBy;
}
/*
   1
   2
   3
   4
   5
   6
   7
   8
   9
   10
*/
```
6. While is more complicated than for loop, reason while is it used, is that it gives us more control on how we initialize and check.
7. Because we got block like this it allows us to create if statements within or switch statement and any other condition to control the loop.
8. for loop is all within the for () in which we have limited control.
9. while is a replacement for for loop but with more control within the block of code.

#### Now we create example where we check how many times we have roll dice to reach specific number.

1. we will use rand to generate random number.
```php
$numberIWant = 3;

while (($diceRoll = rand(1, 6)) !== $numberIWant) {
    echo "You rolled a {$diceRoll} we need a {$numberIWant}<br>";
}

echo "You rolled a {$numberIWant}!";

/*
   You rolled a 1 we need a 3
   You rolled a 6 we need a 3
   You rolled a 4 we need a 3
   You rolled a 4 we need a 3
   You rolled a 5 we need a 3
   You rolled a 4 we need a 3
   You rolled a 3!
*/
```
2. This is an example where you going to find while loop useful.
3. You will not use it many times, but there are times when you will know when to use it and applies to what you want to do.
4. You have to be careful when you use while loops since they have chance to create infinite loops
5. Since if statement never evaluate to false it will loop continously
6. Check condition inside a loop will sometime evaluate.

#### Do While Loop
1. Is a variation of a while loop
2. You use it when you want the block to run at least once before stopping.
3. This loop always ends in semicolon ;
```php
do {
  echo 'this will be run at least once';
} while();
// this will be run at least once
```
4. Is it rarely that you will use while or do while.
5. Yet is good to remember about then for the times comes when you can have use for them.


### The Foreach Loop
1. For each is very simple and you will use it most often than other loops
```php
$names = ['John', 'Joe', 'Jane'];


foreach ($names as $name) {
    echo $name . '<br>';
}
```
2. Works the same except now we can access the index of each key
```php
$names = ['John', 'Joe', 'Jane'];


foreach ($names as $index => $name) {
    echo $index, ': ', $name, '<br>';
}

/*
    0: John
    1: Joe
    2: Jane
*/
```

#### Foreach Loop using multidimensional array
1. looping multidimensional array
```php
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
}

// The best way to learn PHP?
// How do I use a foreach loop?
```
2. Now we will need another foreach to loop through each of the posts
```php
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
/*
   The best way to learn PHP?
   Practice a lot!

   Work on a project

   How do I use a foreach loop?
   Just watch this part.
*/
```

### Breaking and continuing
1. Sometimes you need to break out of a loop or continue or skip a loop
#### Break
1. Guess what would happen if we add a break?
2. It stops the loop
3. Since there is no condition for the break, it breaks on first looop.
```php
$names = ['John', 'Joe', 'Jane'];

foreach ($names as $name) {
    echo $name, '<br>';
    break;
}

// John

```
4. You can add if statement to control the loop.
5. We want to loop through the array and as soon as we find user we looking for we break out of the loop
```php
$users = [
    ['username' => 'John'],
    ['username' => 'Joe'],
    ['username' => 'Jane'],
    ['username' => 'Ashley'],
    ['username' => 'Karen'],
    ['username' => 'Anastasia'],
];

$toFind = 'Anastasia';
// $toFind = 'James'; // null
$result = null;

foreach ($users as $user) {
    if ($user['username'] === $toFind) {
        $result = $user;
    break;
    }
}

var_dump($result);
// array (size=1) 'username' => string 'Jane' (length=4)
```
6. When it can't find username it gives the default null value.
7. Each of the key of each user is a string
8. If you remove break it would still work but if you find John on first loop there is no need to keep looping over the other names.
9. Especially when the array is too long.

#### continuing
1. Will skip the next iteration at the point we call continue
2. Lets say we loop but we to list users but skip a particular user from the list.
3. As you see Ashley was skipped with continue
```php

$users = [
    ['username' => 'John'],
    ['username' => 'Joe'],
    ['username' => 'Jane'],
    ['username' => 'Ashley'],
    ['username' => 'Karen'],
    ['username' => 'Anastasia'],
];

$toSkip = 'Ashley';

foreach ($users as $user) {
    if ($user['username'] === $toSkip) {
        continue;
    }

    echo $user['username'] . '<br>';
}
/*
   John
   Joe
   Jane
   Karen
   Anastasia
/*

```
#### break out the outer loop from within the inner loop.
1. We want to find a user that likes a particular thing and break out the entire loop
2. we want to break the entire loop and not continue looping
3. $found = $user because we returning entire user
4. It skips first user john, why?
5. Because the Break will only break the $like foreach and not the $users foreach
```php

$users = [
    [
        'username' => 'jane',
        'likes' => ['cats', 'food'],
    ],
    [
        'username' => 'john',
        'likes' => ['code', 'cats', 'food'],
    ],
    [
        'username' => 'joe',
        'likes' => ['code', 'cats', 'music'],
    ],
];

$toFind = 'code';
$found = null;

foreach ($users as $user) {
    foreach ($user['likes'] as $like) {
        if ($like === $toFind) {
            $found = $user;
            break;
        }
    }
}

var_dump($found);

/*
  'username' => string 'joe' (length=3)
  'likes' => 
    array (size=3)
      0 => string 'code' (length=4)
      1 => string 'cats' (length=4)
      2 => string 'music' (length=5)
*/
```
5. What we can do to resolve is that we can actually define multiple levels we want to break of.
```php
$toFind = 'code';
$found = null;

foreach ($users as $user) {
    foreach ($user['likes'] as $like) {
        if ($like === $toFind) {
            $found = $user;
            // break 1; //   'username' => string 'joe' (length=3) // same result
            break 2; //   'username' => string 'john' (length=4)
        }
    }
}

var_dump($found);

/*
array (size=2)
  'username' => string 'john' (length=4)
  'likes' => 
    array (size=3)
      0 => string 'code' (length=4)
      1 => string 'cats' (length=4)
      2 => string 'food' (length=4)
*/

```

### Dumping
1. We been using var_dump() that not only give us the value but the type as well.
2. We can use it on arrays and other different data types
3. Is important to find out what exactly going on with your code before you start doing things like looping
4. While this is usually useful for large complex arrays or objects
```php
$names = ['alex' => 27, 'billy' => 23];

var_dump($names);
/*
   array (size=2)
     'alex' => int 27
     'billy' => int 23
*/
```
5. We see that this is an array with 2 items
6. We see the contents of the array
7. Including the data types of the value int
8. Now what happens if we have a different structure.
```php
$names = [
    ['name' => 'John', 'age' => 28],
    ['name' => 'Joe', 'age' => 33]
];

var_dump($names);

/*

array (size=2)
  0 => 
    array (size=2)
      'name' => string 'John' (length=4)
      'age' => int 28
  1 => 
    array (size=2)
      'name' => string 'Joe' (length=3)
      'age' => int 33
*/

```
9. Now We get 2 array items and each of these items are numerically indexes starting at 0 and we have an array inside each and we can see the data type of each and their string length
10. In this example we know what exactly what we working on. So we really don't need to do a var_dump on it.
11. But if this was something returned from database or part of another package or from an API get request,

#### xdebug
1. With xdebug the return from var_dump will look a lot better organized.

#### using <pre>
1. <pre> pretax preserves the format of what you are trying to var_dump()
```php
$users = [
    ['name' => 'John', 'age' => 28],
    ['name' => 'Joe', 'age' => 33]
];

echo '<pre>',
  var_dump($users),
'</pre>';
/*
array (size=2)
  0 => 
    array (size=2)
      'name' => string 'John' (length=4)
      'age' => int 28
  1 => 
    array (size=2)
      'name' => string 'Joe' (length=3)
      'age' => int 33
*/
```

#### print_r
1. If you want to find out very quicky what you working with.
2. As you see we get slightly less compless output
```php
$users = [
    ['name' => 'John', 'age' => 28],
    ['name' => 'Joe', 'age' => 33]
];

print_r($users); 
// Array ( [0] => Array ( [name] => John [age] => 28 ) [1] => Array ( [name] => Joe [age] => 33 ) )
```
3. You can also use print_r <pre>
4. As you can see is easier to see what is going on. Particulary for more complex things.
5. If you don't need to see the value type like integer or string
```php
echo '<pre>', print_r($users), '</pre>';

/*
Array
(
    [0] => Array
        (
            [name] => John
            [age] => 28
        )

    [1] => Array
        (
            [name] => Joe
            [age] => 33
        )

)
1
*/
```
6. If you struggle with anything or trying to work out the value is or how an array is structured
7. Just use var_dump and you will be able to imediately to see the state of a variable.


### Functions basics
1. Functions allow you to break out your code into reusable blocks of code.
2. We will be looking at functions and how to use them and this will help you out when you start looking into object oriented programming.
3. To use functions we use keyword function and then we write a name same way to we name variables.
4. There no important rules how to name these but important thing is keep concistency.
5. Lets define a fullName function that will return to us when we use it a full name
6. Then after keyword we write 2 parentesis
7. To call the function just write the function name with the parentesis. fullName(); // Joe Bond
```php
function fullName() {
    echo 'Joe Bond';
}

fullName(); // Joe Bond
```
8. This work correctly, yet proper way to do it is return a value instead.
9. Now returns nothing since have a return value now.
```php
function fullName() {
    return 'Joe Bond';
}

fullName(); //

```
10. So in this case we can just echo it out.
```php
echo fullName(); // Joe Bond
```

11. You can also assign function to a variable.
```php
$fullName = fullName();
echo $fullName;
```
12. The correct name for calling a function is invoking a function.
13. This function mostly useless since you are returned hard coded values.
14. Ideally you would want to insert values into the function that are used by the function.
15. We want to construct full name base on first name and last name.
16. Now we will use arguments/ parameters they are called same thing.
17. They basically the variables you pass to the function.
18. These variables that we put inside the parentesis we can pass them when we invoke the function or we can hard code the values
19. This function will accept a firstName and lastName
20. If you try to call it without arguments it will cause missing argument error.
```php

$firstName = 'Joe';
$lastName = 'Bond';


function fullName ($firstName, $lastName) {
    return $firstName . ' ' . $lastName;
}
$fullName = fullName('Joe', 'Bond');
echo $fullName; // Joe Bond

echo fullName(); // Uncaught ArgumentCountError: Too few arguments to function fullName(), 0 passed in
```
21. The value we pass doesn't matter since we using a lousy typed language. 
22. We have flexibility to pass any data type.
23. You can do it in a variety of ways depends on what you want to do.
```php
function fullName ($firstName, $lastName) {
    return "{$firstName} {$lastName}";
}
$fullName = fullName('Joe', 'Bond');
echo $fullName; // Joe Bond
```
24. When you building these types of functions you can pass any amount of arguments into them.
25. Even through ou may want to limit amount of arguments
26. if you need to pass like 10 different arguments then you may need to create different functions instead.
27. We can call different functions and place the return value as an argument for another function.
28. Here we will use an example where we return the value of a function into another function
```php
function firstName() {
    return 'Joe';
}

function fullName ($firstName, $lastName) {
    return "{$firstName} {$lastName}";
}
$fullName = fullName(firstName(), 'Bond');
echo $fullName; // Joe Bond
```
28. We can also pass variables to functions as well.
```php
$firstName = 'Joe';
$lastName = 'Bond';

$fullName = fullName($firstName, $lastName);
echo $fullName; // Joe Bond
```

#### Pass optional arguments to a function
1. We want to build the function as flexible as possible.
2. Here we will set a default value to separator = ' '
3. It will work correctly without error even if we don't pass the 3rd argument $sepator
```php
function fullName ($firstName, $lastName, $separator = ' ') {
    return "{$firstName}{$separator}{$lastName}";
}
$fullName = fullName('Joe', 'Bond');
echo $fullName; // Joe Bond
```
4. Now I can pass argument if I want to change $separator.
5. it will replace $separator ' ' with '_'
```php
$fullName = fullName('Joe', 'Bond', '_');
echo $fullName; // Joe-Bond
```
6. Lets see another variations of you might use.

#### Assign a function to a variable
1. Here we assign a function to a variable
2. Always declare first the arguments that are required and then set the optionals one after
```php
$fullName = function ($firstName, $lastName, $separator = ' ') {
    return "{$firstName}{$separator}{$lastName}";
};
```
3. You can't do as before or you will get error.
4. Which means variable can't be found.
```php
fullName('Joe', 'Bond', '_');
echo $fullName; // Parse error: syntax error, unexpected 'fullName' (T_STRING) 
```
4. To make it work when you define a function as a variable you need to call it as a variable.
```php
echo $fullName('Joe', 'Bond');
```
5. This is useful if you may want to overwrite the same function later.
6. Most important to know is ordering of your code.
7. Because you define the variable first you need to call it after.
8. If you call function first before defining it you will get error.
```php
echo $fullName('Joe', 'Bond');

$fullName = function ($firstName, $lastName, $separator = ' ') {
    return "{$firstName}{$separator}{$lastName}";
};

// : Undefined variable: fullName 
//  Uncaught Error: Function name must be a string 
```
9. We get error since we trying to access variable before is been defined.
10. Now if you use past example and declare function without been inside a variable it would still work without the ordering causing it to fail.
```php

echo fullName('Joe', 'Bond'); // Joe Bond

function fullName ($firstName, $lastName, $separator = ' ') {
    return "{$firstName}{$separator}{$lastName}";
}
```

### Function flexibility
1. if lastName not provided set it to null.
2. Reason is great to use null for not required variables is that, null is an easy value to check.
3. We can check if something is null within an if statement.
4. Then we can do something according to that.
5. For example what happens if we don't include $lastName
```php
function fullName($firstName, $lastName = null, $separator = '_') {
    return "{$firstName} {$lastName}";
}

echo fullName('John'); // John_
}
```
6. In this case we can add an if statement to resolve this and not add an _ when no $lastName is provided.
7. You can have multiple return values within a function if you want.
8. Reson why the other lines of code are not executed is because when you use return it exists out of the function and return the value.
```php
function fullName($firstName, $lastName = null, $separator = '_') {
    return 'Return here';
    echo 'Hello.';

    return "{$firstName} {$lastName}"; 
}

echo fullName('John'); // Return here
```
9. We don't need last name and separator because last name is not provided, so we return just $lastName when $firstName not provided.
```php
function fullName($firstName, $lastName = null, $separator = '_') {
   if ($lastName === null) {
       return $firstName;
   }

    return "{$firstName}{$separator}{$lastName}"; 
}

echo fullName('John'); // John
echo fullName('John', 'Bond'); // John_Bond
```
10. You can do almost anything inside function like looping or multiple if statements
11. Use return alone.
12. If have all fields empty, there is no need to return anything.
13. We will also use trim which is a php function that trim out white spaces.
14. Since we use return; it will actually return null as the value.
```php
function fullName($firstName, $lastName = null, $separator = '_') {
    if (trim($firstName) === '') {
      return;
    }

   if ($lastName === null) {
      return $firstName;
   }

    return "{$firstName}{$separator}{$lastName}"; 
}

echo fullName('    '); // 
```
15. We can also use a var_dump to see the value is NULL
```php
var_dump(fullName('    ')); // NULL
```

### func-get-arg
1. This works but is not really that flexible.
2. Since we only allowing 3 numbers to be passed in.
3. If we wanted to add another argument this would break our code.
   
```php

function add($num1, $num2, $num3) {
    return $num1 + $num2 + $num3;
}

echo add(5,10,10);
```
4. For example if we wanted to add another number we would have to go through code and add another number.
5. We would get error that we missing a number.
```php
function add($num1, $num2, $num3, $num4) {
    return $num1 + $num2 + $num3;
}

echo add(5,10,10);
// Uncaught ArgumentCountError: Too few arguments to function add(), 3 passed in
```
6. Possible solution is pass an array instead of numbers
```php
$numbers = [5,10,10];

function add($numbers) {
    return $num1 + $num2 + $num3;
}
```
7. The goal is pass unlimited amount of numbers into this function.
8. Loop through them and add them up.
9. You can add type before argument array $numbers.
10. This tell us we only accept array in.
```php
$numbers = [5,10,10];

function add(array $numbers,$result = 0) {
    foreach ($numbers as $number) {
    $result += $number;
    }
    return $result;
    
}
echo add(1);

// Uncaught TypeError: Argument 1 passed to add() must be of the type array, int given, 
```
11. Here we pass array instead and works correctly.
12. You can also pass the array directly and works same way `echo add( [5,10,10]); // 25`
```php

$numbers = [5,10,10];

function add(array $numbers) {
    $result = 0;
    foreach ($numbers as $number) {
    $result += $number;
    }
    return $result;
    
}
echo add($numbers); // 25
echo add( [5,10,10]); // 25
```
13. There is a more easier way if you just want to take a list of numbers and add them up.

#### func-get-arg
1. func-get-arg is the predefined get function when used inside of a function.
2. Will give us an array of all of the arguments that are pass in.
3. We will define this add() function with no args at all.
4. then var_dump(func_get_args()) and get 0 results.
```php
function add()
{
    var_dump(func_get_args()); 
}

echo add();

/*
 array (size=0)
   empty
*/

```
5. Now even through we pass no arguments func_get_args will pick them up.
```php
echo add( 5,10,10);
/*
array (size=3)
  0 => int 5
  1 => int 10
  2 => int 10
*/
```
6. Unsing func_get_args instead of declaring an argument in the function
7. What we can do is do a foreach since func_get_args returns an array.
8. You can use either is_numeric or is_int
9. If the item not numeric then we continue and not add it on.
10. Let see here what happens when they pass a value they should be there
```php

function add() {
    $total = 0;
    foreach (func_get_args() as $number) {

        $total += $number;
    }
    return $total;
}

echo add(5, 10, 10, 'john');

// 25
```
11. Problem is PHP type cast the values and if you were to pass 1john a value would be added giving incorrect value 26
```php

function add() {
    $total = 0;
    foreach (func_get_args() as $number) {

        $total += $number;
    }
    return $total;
}

echo add(5, 10, 10, '1john');
// 26
```
12. So if it a string we want to ignore it and get correct value 25.
```php
function add() {
    $total = 0;
    foreach (func_get_args() as $number) {

    if (!is_numeric($number)) {
        continue;
    }
        $total += $number;
    }
    return $total;
}
echo add(5, 10, 10, '1john'); // 25
```
13. There is a lot of code so we can shorter it down.

#### Array_sum
1. Here we will shorter the code down using array_sum which will add up every value withing an array.
```php
echo array_sum([5, 10, 10]); // 25

```
2. By combining Array_sum and func_get_args we can do it in 1 line.
```php
function add() {
    return array_sum(func_get_args());
}

echo add(5, 10, 10); // 25
echo add(5, 10, 10, '1john'); // 26
```
3. This code a lot shorter problem is that is it not type safe.
4. Shorter is not always better, simpler to read is better.
5. If someone else would work on your code they will know is an array
6. As well is type safe.
```php
function add(array $numbers) {
    $result = 0;
    foreach ($numbers as $number) {
    if (!is_numeric($number)) {
        continue;
    }
    $result += $number;
    }
    return $result;   
}
$numbers = [5, 10, 10 , '1john'];

echo add($numbers);
```

### lets talk about scope
1. Lets talk about functions since they have their own scope.
2. Lets imagine we have configuration store within an array.
3. Lets say we have separator here so is accesible everywhere in our code.
4. Reason we add something to config is that we can use it over and over again.
5. As well always want the same a '  ' is a lot more convenient to store it in one place and reuse it.
6. Aditionally if we wanted to use _ instead of ' ' and wanted to change it everywhere it would be easier to do.
```php
$config = [
    'separator' => ' '
];

function fullName($firstName, $lastName) {
    return "{$firstName} {$config['separator']} {$lastName}";
}

echo fullName('John', 'Bond');

// : Undefined variable: config 

```
7. Why are we seeing this error? When we do have the variable $config defined.
8. The reason is because $config can't be found within the scope of fullName.
9. $config is out of scope.
10. Everything we have inside fullName brackers can't be available outside or viceversa 
11. Here is another example
```php
function fullName($firstName, $lastName) {
  $greeting = 'hello';
    return "{$firstName} {$config['separator']} {$lastName}";
}
echo $greeting;

echo fullName('John', 'Bond'); 
//  Undefined variable: greeting 
```
12. Here we have same out of scope issue. You can't access variables declared inside a function.
13. As well we can't access variables declared outside the function.
14. One of the reason is that if you declaring local variables inside a function you don't want them to interfere with anything else outside.
```php
$config = [
    'separator' => ' '
];

function fullName($firstName, $lastName) {
    $greeting = 'hello';
      return "{$firstName} {$lastName}";
  }
  echo $greeting;
  
  echo fullName('John', 'Bond');

```
15. There are a couple of ways to get around this.
#### global
1. Here we will use global
2. global will bring all values declared in config inside the function
```php
$config = [
    'separator' => '_'
];

function fullName($firstName, $lastName) {
      global $config;
      return "{$firstName}{$config['separator']}{$lastName}";
  }
  
  echo fullName('John', 'Bond'); // John Bond
```
3. Now it works correcly
4. Another way is passing config as an argument
```php
$config = [
    'separator' => '_'
];

function fullName($firstName, $lastName, $config) {
      return "{$firstName}{$config['separator']}{$lastName}";
  }
  
  echo fullName('John', 'Bond', $config); // John Bond
```

#### use keyword
1. Here we will use the use keyword which is more cleaner and no need to declare it as global inside.
```php
function fullName($firstName, $lastName) use ($config) {
    return "{$firstName} {$config['separator']} {$lastName}";
}

echo fullName('John', 'Bond');

// Parse error: syntax error, unexpected 'use' (T_USE), expecting '{'
```
2. This will give error since when we 'use' the function is different than when we assign it to a variable.
```php

$fullName = function ($firstName, $lastName) use ($config) {
    return "{$firstName} {$config['separator']} {$lastName}";
};

echo $fullName('John', 'Bond'); // John_Bond
```
3. This will work correctly and bring the variable config inside the scope of the function using  'use'
4. There are various reasons why we don't bring variables inside the scope of a function.
5. Because if we create variables inside the function they could conflict with outside variables.
6. Functions have their own scope and there different ways we can bring variables into a function.
7. Either a) using global keyword or use 'use' keyword if we define our function inside a variable.

### Breaking up files
1. If we were to write everything in 1 file.
2. we create new file hello.php side of index.php
3. Now we will write code in hello.php that index.php can reuse.
```php
hello.php
<?php

echo 'Hello';

```
4. Now you will not see anything index.php to make it work we either use require or include
```php
index.php
<?php

include 'hello.php';

```
5. Now // hello gets displayed on index.php
6. You can also use require
```php
require 'hello.php';


```
7. Difference is that if there was an error in hello.php or could not find the file the code would break.
8. As you see it show error message and skip displaying the echo
```php

require 'goodbye.php';


echo 'Hello rest of our code.';
//  ) Fatal error: require(): Failed opening required 'goodbye.php'
```
9. With include it will show error message but still output the echo
```php

include 'goodbye.php';

echo 'Hello rest of our code.';
// Warning: include(goodbye.php): failed to open stream: No such file or directory in

// Hello rest of our code.
```
10. Recommendation: **Always use required**
11. Because you don't want rest of your code to run if you require a file.

#### require_once && include_once
1. They both similar to include and require
```php
include_once 'hello.php';
require_once 'hello.php';
```
2. With include once it will only output once no matter how many times we output it.
```php

include_once 'hello.php';
include_once 'hello.php';
include_once 'hello.php';
include_once 'hello.php';

// hello
```
3. require_once will only run once and will stop code if there is a problem.

#### why break code?
1. Because when you write basic applications you want to separate functions into their own file
2. As well separate the code into different parts.
3. Defining configuration and you want to separate from everything else
4. You may want to require something in only on a particular condition
5. Perhaps within an if statement

#### Create separated function
1. Now we will create new folder named functions
2. create file named user.php inside
```php

function fullName ($firstName, $lastName) {
    return "{$firstName} {$lastName}";
}
```
3. Now we can reuse this function in any file by using require
4. Lets say we have an index.php and user.php that list out a list of users.
5. 2 different files that perhaps want to use same fullName function
6. inside index.php
```php
// index.php
require 'functions/user.php';

echo fullName('John', 'Bond');
// John Bond
```
7. Now I want users.php to use same function by using require and get same result.
```php
// user.php

require 'functions/user.php';


echo fullName('John', 'Bond');

// John Bond
```
8. In Object oriented programming instead of using require you use auto loading.

### Post and get superglobals
1. We will build form that allows us to submit data through another file
2. Super global is special name giving to global php variables.
3. That holds different type of information.
4. when you see like /pages=3 in url those are picked up by php and other backend languages
5. Imagine you running a blog and want to link to specific article
6. We will pass in the url a query string with an unique slug which is basically a string given to a particular record
7. `http://phpbasics.test/25-post-and-get-superglobals/index.php?slug=learn-php`
8. They are typically separated by hypens -
9. When he have a slug we want to pick it up on the server side and look it up in our database
10. Then show record with this particular slug
#### $_GET superglobal
1. superglobal have same format 1) $ sign 2) _ 3) Capital letters GET
```php
var_dump($_GET);

/*
array (size=1)
  'slug' => string 'learn-php' (length=9)
*/
```
2. Now you get the string slug from the query in the url
3. We know this is an array and know we can access it's elements
4. Either by numeric or associate key like the slug
5. http://phpbasics.test/25-post-and-get-superglobals/index.php?slug=learn-php&page=1
6. You can add second item with &
7. now we got 2 items slug and page
```php
var_dump($_GET);
  'slug' => string 'learn-php' (length=9)
  'page' => string '1' (length=1)
```
7. Now lets output the slug in the page  by getting the key
```php
// http://phpbasics.test/25-post-and-get-superglobals/index.php?slug=learn-php
echo $_GET['slug'];

// slug=learn-php
```

8. How can we change the url without typing
9. A way is to create links that you can click with the query on them
10. Remember before we generated a list of page numbers
11. We can actually use that again and generate a link for each page.
```php
$page = $_GET['page'];
$searchTerm = $_GET['search'];
$pages = 10;

echo '<h3>Searching for: ' . $searchTerm . '</h3>';
echo '<p>You are on page ' . $page . '</p>';

// Undefined index: page in 
```
12. We get error since you don't have anything in the query. 
13. That is because we are trying to access something from the $_GET superglobal array.
14. That does not exist at the moment <http://phpbasics.test/25-post-and-get-superglobals/index.php>
15. Now lets add them <http://phpbasics.test/25-post-and-get-superglobals/index.php?search=learn php&page=1>
```
Searching for: learn php
You are on page 1
```
16. Now the idea is generate a list of of page numbers
```php
$page = $_GET['page'];
$searchTerm = $_GET['search'];
$pages = 10;

echo '<h3>Searching for: ' . $searchTerm . '</h3>';
echo '<p>You are on page ' . $page . '</p>';

// Undefined index: page in 

for ($i = 1; $i <= $pages; $i++) {
  echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . '</a> ';
}

/*

Searching for: learn php
You are on page 8

1 2 3 4 5 6 7 8 9 10

*/
```
17. Problem now is that if we remove queries we get error.
18. <http://phpbasics.test/25-post-and-get-superglobals/index.php>
```php
// Undefined index: page in
// Undefined index: search in
```
#### isset
1. How to check if values above are set or not.
2. We will use isset inside an if statement
3. Inside the isset() we pass a list of anything we need to check.
4. If it set then when we want to declare the superglobal to a variable.
5. Now what will happen is that when we do not have search in query string, the block inside the if will not run.
6. Hence not declaring the variable and getting //  Undefined index: search error message.
```php
if (isset($_GET['search'])) {
  $searchTerm = $_GET['search'];
  echo '<h3>Searching for: ' . $searchTerm . '</h3>';
}
```
7. Now if you go to <http://phpbasics.test/25-post-and-get-superglobals/index.php> you will see no errors as before
8. Now write the search query <http://phpbasics.test/25-post-and-get-superglobals/index.php?search=learn%20php>
```php
Searching for: learn php
```
9. You need to check things since many people will maliciously try to change the url query.
10. Get action is activated when landing on a page url.
11. When we using POST we passing some data. Example submiting for to create new user.
12. Now we will build a form and post it on another page.

#### Form submitting with $_POST
1. create index.php and remove <?php we will use html to create form.
2. Form needs 2 items
3. First is the action= where we want to submit this form through to.
4. We will pass it to new file and call it signin.php
5. Second we will pass method= in this case we will define it as post
6. Then we create 2 inputs with their labels to write the input data
7. Finally we create button to execute the form with type submit
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="signin.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Sign in</button>
    </form>
</body>
</html>
```
8. Because we used post to that file signin.php we can pick up username and password.
9. Now create new file called signin.php
```php
<?php

var_dump($_GET); // array (size=0)
```
10. Notice you have empty array
11. if you were to add to the query <http://phpbasics.test/25-post-and-get-superglobals/signin.php?username=john>
```php
array (size=1)
  'username' => string 'john' (length=4)
```
12. What is happening is that this been send through POST method we need to use $_POST instead, since is more secure unlike $_GET
```php
<?php

var_dump($_POST);
```
13. Now we will see the values passed through the form using post method

```php
array (size=2)
  'username' => string 'joe' (length=3)
  'password' => string 'coool' (length=5)
```

14.  Now we will output username.
```php
echo $_POST['username']; // joe
```
15. Now lets output password as well
```php
echo $_POST['username'], '<br>'; // joe

echo $_POST['password']; // pass123
```
16. Then we would look username in database and check if password matches.
17. There more things you can do and check is it a hash type password.
18. $_GET is more for search terms, page numbers.
19. $_POST you use it for forms to pick up data that was submited in form.
20. Like registing a new user.
21. As well sign users in.


### Ternary Operator
1. Remember when we used the $_GET superglobals we had the problem where we needed to check in case we run into problems.
2. <http://phpbasics.test/26-ternary-operator?page=1>
```php
<?php

echo $_GET['page']; // 1

```
2. If you remove the query <http://phpbasics.test/26-ternary-operator> // Notice: Undefined index: page in.
3. In production server where you turn errors off users will not see errors but this will break the page.
4. So we want to check if $_GET['page'] is set then only do something if it.
5. We going to set the page default as page 1, if it not suplied on the query.
6. <http://phpbasics.test/26-ternary-operator>
```php
<?php

$page = 1;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

echo $page; // 1

```
7. If we do set the query it would still work correctly.
8. <http://phpbasics.test/26-ternary-operator?page=4>  // 4
9. Now we will show easier way to do this by using ternary operator
```php
$page = isset($_GET['page']) ? $_GET['page'] : 1;

echo $page;

//  <http://phpbasics.test/26-ternary-operator?page=4>  // 4
//  <http://phpbasics.test/26-ternary-operator>  // 1
```
10. condition ? (if condition is true)  : (else);
11. Set page to ($_GET['page'] if isset($_GET['page']) is true else set page as 1.
12. This can become more complicated by creating a new ternary inside of the conditions.
13. Even through is better to avoid that as much as possible.
14. Ternary is very useful when you want to very quickly do something that would take longer with if statement.

#### Null Coalescing Operator
1. There is even an easier way as long as you running php7
2. you can use phpinfo() to check your php version inside a file.
3. Here we will use the shortest version
```php
$page =  $_GET['page'] ?? 1;

echo $page;
//  <http://phpbasics.test/26-ternary-operator?page=8>  // 8
//  <http://phpbasics.test/26-ternary-operator>  // 1
```
4. What this says is that if it set use first value otherwise use 1.
5. If the term is very simple use ternary operator to clean up amount of lines of code.
6. If it more complex check then is not good idea to use ternary operator or you will come with a long time to read and maintain

#### Short hard way to do ternary operator
1. What if we wanted to show word zero if it was in fact a zero balance?
```php
$balance = 10;

if ($balance === 0) {
    $balance = 'zero';
}

echo 'Your available balance is ' . $balance; // Your available balance is zero
```
2. This work yet introduce too many lines of code.
3. Here is a shorter version.
4. (value we use if true / (false) if it false/zero value don't use it) ?: (then result if it false) 
```php
$balance = 0; // zero
$balance = 10; // 10

$availableBalance = $balance ?: 'zero';

echo 'Your available balance is ' . $availableBalance; // Your available balance is zero
```
5. Make sure to use ternary only to shorten code and nothing more complex.


### Commeting
1. Commenting code in any language is helpful when you need to describe in plain language what piece of code does.
2. Is important that there is not need to comment everything.
3. just comment things that may help others and yourself understand what your code is doing.
4. When you learning is great practice to comment so when you refer back a code you know exactly what you have done.
5. There 2 types of comments in php
6. 1) single line comments //  $name = 'john'; You can also comment after the line of code not after in same lines
```php
// Define a person's name;
 $name = 'john';
 $name = 'john'; // Define a person's name;
```
8. When php compile the script it will ignore the comments.
9. This is just example and you should not comment very obvious things like declaring name.

10. You will also come to more useful comments like dot blocks.
11. 2) block comments
```php
/*
    if ($balance === 0) {
        $balance = 'zero';
    }
*/
```
12.  Another way that you find usually in docblocks
```php
/*
 * This function takes a string
 * and strip the whitespace
 *
*/

function removedWhitespace() {

}
```
13.  Comments are great to remind you what you have done when the complex is complex.
14.  Also great way to quickly learn about other people code.

### Finding PHP Functions
1. At some point you going to have to search for different PHP functions.
2. It would be impossible to cover them all in detail since there is so many of them.
3. What we going to do is look at php manual and look at few functions and we going to see how we use them and how this is formatted.
4. Then use them to see how they work.
5. Lets go to the manual <https://www.php.net/>
6. For example if I didn't know how to determine a length of a string.
7. All I would need is search for  "php string length".
8. From the result try to use the most up today source.
9. Docs usually the most up to date source so that is what we will use.
10. <https://www.php.net/manual/en/function.strlen.php>
11. you can also search on php manual(docs) for string length
12. As you see you get same result <https://www.php.net/manual/en/function.strlen.php>
13. now we will see the explanation that says what is going on.
```php
Description ¶
strlen ( string $string ) : int
Returns the length of the given string.
```
14. Most of this should make sense since we already cover different data types.
15. As well already used some php functions as well.
16. First you will see is the function name.
17. This is how we call the function.
18. Next thing is the description.
19. This can be very simple or complicated.
20. Then it gives you a brief description "Returns the length of the given string."
21. The parameters is what we pass to the function.
```php
Parameters ¶
string
The string being measured for length.
```
22. In this case we have 1 parameter which is a String.
23. This will return an int value  "strlen ( string $string ) : int"
24. We also have more information on the return value as well.
```php
Return Values ¶
The length of the string on success, and 0 if the string is empty.
```
25. So Parameters are string and return value an integer and 0 if the return is empty.
```php
echo strlen('john'); // 4
```
26. We can prove this does return integer by using var_dump
```php
var_dump(strlen('john')); // int 4
```

#### Convert all letters from a name to upper/lower case
1. We can go to manual and search for "upper case"
2. The we find <https://www.php.net/manual/en/function.strtoupper.php>
3. Takes a string and return a string with Uppercase
```php
echo strtoupper('John'); // JOHN
```
4. strtoupper sounds like there may be an alternative to lower case so we do a search on the manual for strtolower.
5. <https://www.php.net/manual/en/function.strtolower.php>
6. strtolower ( string $string ) : string
```php
echo strtolower('John'); // john
```
#### trim
1. Now search manual for trim and we find <https://www.php.net/manual/en/function.trim>
2. trim — Strip whitespace (or other characters) from the beginning and end of a string
```php
echo trim('               John      '); // John
```
3. A way trim is very useful is when counting length of a string, since it will count spaces as well.
4. You can combine 2 php function as we will do here.
5. We combine strlen with trim
```php
$name = '               John      ';

// echo strlen($name); // 25
echo strlen(trim($name)); // 4
```
4. Now that we know how to use trim lets look at the optional character_mask
```php
Parameters ¶
str
The string that will be trimmed.

character_mask
Optionally, the stripped characters can also be specified using the character_mask parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.
```
5. It means we can strip other character other than spaces
```php
Description ¶
trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] ) : string
This function returns a string with whitespace stripped from the beginning and end of str. Without the second parameter, trim() will strip these characters:

" " (ASCII 32 (0x20)), an ordinary space.
"\t" (ASCII 9 (0x09)), a tab.
"\n" (ASCII 10 (0x0A)), a new line (line feed).
"\r" (ASCII 13 (0x0D)), a carriage return.
"\0" (ASCII 0 (0x00)), the NUL-byte.
"\x0B" (ASCII 11 (0x0B)), a vertical tab.
```
6. here we use mask to remove '.'
```php
// character_mask
$name = '.........................John...........';

echo strlen($name); // 40
echo strlen(trim($name)); // 40
echo strlen(trim($name, '.')); // 4
```
7. ltrim — Strip whitespace (or other characters) from the beginning of a string
8. <https://www.php.net/manual/en/function.ltrim>
```php
$name = '                  John';

echo ltrim($name); // John
```
9. We also have rtrim — Strip whitespace (or other characters) from the end of a string
```php
$name = 'John           ';

echo rtrim($name);
```

#### substr
1. substr — Return part of a string <php.net/manual/en/function.substr>
2. notice there are [] brackets this is how php identify optional arguments
```php
substr ( string $string , int $start [, int $length ] ) : string
Returns the portion of string specified by the start and length parameters.
```
3. for example with length optional If length is omitted, the substring starting from start until the end of the string will be returned.
4. Now we will crease example using `substr ( string $string , int $start [, int $length ] ) : string 
5. First we have the string we need to find echo substr($name);
6. Then we have a start that is an int $start `echo substr($name);` remember that it starts from 0.
7. Here we would get the full string.
```php
$name = 'joe';

echo substr($name, 0); // joe
```
8. Now we will use the optional length to catch the first character.
```php
echo substr($name, 0, 1); // j
echo substr($name, 0, 2); // jo
// if greater then it shows all strings
echo substr($name, 0, 10); // joe
```

8. For example if we want to grab half of the string.
9. so we can use strlen and divide it by 2 and use ceil to round it up
```php
$name = 'anastasia';

echo substr($name, 0, ceil(strlen($name) / 2)); // anast
```
#### empty
1. lets look another example
2. Here is what happens when you provide page with empty value, it does nothing
```php

$page = $_GET['page'] ?? 1;

echo $page;

// http://phpbasics.test/28-finding-php-functions?page=
```
3. So what if we want to search if value is empty.
4. So lets do a search on "empty" <https://www.php.net/manual/en/function.empty>
5. empty — Determine whether a variable is empty
6. As you see it returns a boolean
7. mixed means that we can pass any type and there is not a specific type that is expected
```php
empty ( mixed $var ) : bool

Determine whether a variable is considered to be empty. A variable is considered empty if it does not exist or if its value equals FALSE. empty() does not generate a warning if the variable does not exist.
```
8. Now we get 1 when page=
```php
$page = $_GET['page'] ?? 1;

if (empty($page)) {
    $page = 1;
}

echo $page;

// http://phpbasics.test/28-finding-php-functions?page=
// 1
```
9. empty very useful when you registing user or submiting any form in the database
10. You want to check if the value provided is empty
11. You can also combine it with trim to make it even more robbust
12. By removing spaces then checking if empty
```php
$page = $_GET['page'] ?? 1;

if (empty(trim($page))) {
    $page = 1;
}

echo $page;

// http://phpbasics.test/28-finding-php-functions?page=
// 1
```

#### number_format
1. number_format — Format a number with grouped thousands.
2. It can control the decimal format `number_format ( float $number [, int $decimals = 0 ] ) : string`
3. This number can come from some mathematical calculation.
```php
echo $number = 5.65445656; // 5.65445656
```
4. Now we use number_format to round the number inside a single number
```php
echo number_format($number); // 6
```
5. alternatively we can provide number of decimals we want returned.
```php
echo number_format($number, 2); // 5.65
```
6. More complex we can find the decimal point we want to use.
```php
number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," ) : string
```
7. We can also find the thousand separator as well
8. Lets say we have a large number a billion 1000000000
```php
$number =  1000000000;
echo number_format($number, 2); // 1,000,000,000.00
echo number_format($number, 0); // 1,000,000,000
```
9. This looks strange since we have not set up the `$thousands_sep = ","`
10. Reason is that these are the default if you don't define your decimals
```php
string $dec_point = "." , string $thousands_sep = ","
```
11. We can actually overwrite the defaults by passing more arguments.
```php
echo number_format($number, 0, '.' , '_'); // 1_000_000_000
```
12. php manual can help you find new functions and explain you how they work and how to use them

#### Redirect to another page using header
1. header — Send a raw HTTP header <https://www.php.net/manual/en/function.header>
2. void on a function means that is it not going to return a value.
```php
header ( string $header [, bool $replace = TRUE [, int $http_response_code ]] ) : void

```
3. Here an example of function that doesn't return a value
```php
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: http://www.example.com/');
exit;

```
4. This will set a header with Location: that will redirect us to another page.
5. Create new page page.php
5. On index.php write
```php
header('Location: /28-finding-php-functions/page.php');
```
6. When you reach page it will redirect to page.php
```php
echo "You are redirected here"; // You are redirected here
```
7. This is useful when submitting a form and registering an user.
8. You can redirect them to homepage or error page etc.
9. Always good idea to read the manual before you start using a php function.

### Submitting a form
1. Create a form in index.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="29-submitting-a-form/name.php" method="post">
        <label for="name">Your name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Greet me</button>
    </form>
</body>
</html>
```
2. The create fime name.php
```php
echo "Greetings {$_POST['name']}!"; // Greetings John!
```
3. Now we going to redirect back after form been submitted.
4. We going to use the full path in this case.
```php
echo "Greetings {$_POST['name']}!";

header('Location: http://phpbasics.test/29-submitting-a-form');

```
5. Now we going to identify if the submited form is not empty
6. Other you get
```php
echo "Greetings {$_POST['name']}!"; // Greetings !
```
7. Now we will redirect the user if they don't provide a name.
```php
// By default we set it to null
$name = $_POST['name'] ?? null; // nothings happens
$name = $_POST['name'] ?? 'abc'; // nothings happens as well

echo "Greetings {$_POST['name']}!";
```

8. Reason why nothing happens is that `$_POST['name'] ?? null;` is checking if value is set.
9. So we will set it to null in case it has not been set.
10. Then we redirect user if they have not provided the name.
```php
$name = $_POST['name'] ?? null;

if (empty($name)) {
    header('Location: http://phpbasics.test/29-submitting-a-form');
}

echo "Greetings {$_POST['name']}!";
```
11. Now if you send form empty it will redirect back instantly.
12. Now what happens if we type a lot of spaces?
13.  // Greetings ! it will not work properly so we need to use trimed
14.  To resolve this best action to do is trim name first and them check if it empty.
```php
$name = $_POST['name'] ?? null;

if (empty(trim($name))) {
    header('Location: http://phpbasics.test/29-submitting-a-form');
}

echo "Greetings {$_POST['name']}!";
```
15. Here we implemented a form and added extra logic to make sure we have the values that we need.