<!-- String Functions in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!--
String functions in PHP


-> Why learning about the string function is so important? 
Most of the time, we are dealing with string-type data, and hence, to manipulate it, we should have an excellent grip on string functions.

As we know we have seven data types in PHP: string, integer, float, boolean, object, array, and null.

Length of the string (strlen).
Word count (str_word_count)
Reversing a string (strrev),
Searching a component in a string (strpos), and
Replace a string (str_replace)


-> Length of the string (strlen)

This function is used to measure the length of the string. 
For example, we have a variable $name = “yatharth”; in order to measure the length of this string variable, we can use the function aforementioned (strlen) by using the following method,

Echo “the length of my string is”. Strlen ($name);

**result: the length of my string is 8

Always keep in mind that you will have to join two or more strings with a decimal point, commonly known as dot operator (.) Otherwise, you will end up getting an error on the result page.


-> Word count (str_word_count)

This function is used to count the number of words consisted by a variable. 
Suppose, we have a variable $x = yatharth is a good boy”; and we want to count the number of words consisted by variable $x we will use the str_word_count function described as follows,

Echo str_word_count($x);

**result: 5


-> Reversing a string (strrev)

This function is used to reverse a string in a variable. 
Suppose we have the same variable as mentioned above $x = yatharth is a good boy”; we can reverse this by using this method,

Echo strrev($x);

**result: yob doog a si htrahtay



-> Searching a component in a string (strpos)
This function is used to search a component in a string.

Let $x = “yatharth is a good boy”; be our variable, then

Echo strpos ($x, “is”);

**result: 9

It shows the result as 9 because the word is starts from the 9th letter.



-> Replace a string (str_replace)
This function is used to replace a specific word in a variable with another word of your requirement.


Syntax: str_replace (mixed $search, mixed $replace, mixed $subject [, int, $count ])

Example,

Let $x = “yatharth is a good boy”; be our variable, then
Echo str_replace (yatharth”, dev”, $name);
**result: dev is a good boy

Repeat a string (str_repeat)

This function is used to repeat a particular string.

Let $x = yatharth is a good boy”; be our variable, then
Echo str_repeat ( $x, 3)
**result: yatharth is a good boy harry is a good boy yatharth is a good boy

These are a few basic functions used to handle string operations in php.
 -->

<?php

$name = "Yatharth is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Yatharth");
echo "<br>";
echo str_replace("Yatharth", "Dev", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("    this is a good boy     ");
echo "<br>";
echo ltrim("    this is a good boy     ");
echo "</pre>";

?>