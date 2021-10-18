<!-- Associative Arrays in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!--
-> What are associative arrays in Php?
Associative arrays are the array that uses named keys. We assign these named keys. 
The general syntax of associative arrays in PHP is given below.


There are two methods to create Php arrays.

$arr = array("key1"=>"value", "key2"=>"value", "key3"=>"value");

or

$arr['key1'] = "value";
$arr['key2'] = "value";
$arr['key3'] = "value";

Both of the above methods will give the same results.


-> Difference between Associative Arrays and Indexed Arrays
The simple arrays (without key) are also called indexed arrays because the elements of this array are present on integer indexes. 
These arrays cannot store keys against their elements. On the other hand, the associative arrays are capable of storing keys against each element. 
Therefore, the associative arrays can be more useful while assigning some properties to variables.

Let’s dig in with some practical examples of Associative Arrays in Php

Examples

$age = array("Ben" => "35", "Stokes" => "37", "Jimi" => "43");
echo "Ben is " . $age['Ben'] . " years old.";

In the above example, each key is bind with its corresponding value. 
So, upon echo, each key is responsible for printing outs its value.


Another example

$student = array
("Maths"=>91,
"Physics"=>93,  
"Chemistry"=>93,
"English"=>94,  
"Computer"=>57);

echo "Marks in English" . $student['English'] . " years old.";
 

-> Note: The key of an associate array can also be an integer instead of a string. 
         Consider the following piece of code to understand the concept.

 
$arr=array(“key”=>”81”,9=>”95”) 

In the above example, the 9 is an integer but will act as a key for 95, its value.


-> How to traverse associative arrays in Php
Traversing associate arrays follows the loops approach. In this section, we will use foreach loop to traverse associative arrays.


/*First create an associative array */

$student= array("Maths"=>56, "Physics"=>70,  
                  "Chemistry"=>94, "English"=>83,  
                  "Computer"=>58);

/* Loop through array using foreach */

echo "Looping using foreach: \n"; 
foreach ($student as $subject => $marks){ 
    echo "Student got ".$marks." in ".$subject."\n"; 
}


The foreach loop has provided us the facility to access both the key and value stored against it in the associative array in the above example.


-> What will be the effect of using the same key multiple time
If we declare multiple elements in an associative array with the same key, the last one will be used, and the other will be overwritten.

Notes:

1. Arrays and objects cannot be used as keys.
2. Empty string “” or null can be used as keys.
3. Upon using Bools as keys, the true casts as 1 and false casts as 0.
4. As we have mentioned above, integers can be used as keys, so if you use float at key, it will be cast to integer without fractional portion. For instance, 9.3 will cast to 9 as key in an associative array. -->

<?php

echo "Welcome to associative arrays in php ";
// These are called indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2]; 

// Associative arrays
$favCol = array(
    'Riya' => 'red', 'Sujal' => 'green',
    'Yatharth' => 'brown', 8 => 'this'
);

// echo $favCol['Yatharth'];
// echo "<br>";
// echo $favCol['Sujal'];
// echo "<br>";
// echo $favCol[8]; 
foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}

?>