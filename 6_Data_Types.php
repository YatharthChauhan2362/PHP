<!-- Data Types in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- What Kind of data types are supported in PHP?

Php has built-in support for the following data types,

-> String
-> Integer
-> Float
-> Boolean
-> Object
-> Array
-> Null

-> The first in the order is the string type data.
String data is basically a sequence of characters which can be numeric characters or alphabets.

-> For example, let us say we have two variables, one is $name, and the other is $friend. 
Let’s, assign some values to these variables, i.e., $name = “Yatharth”; and $friend = “Riya”; We will use the echo command below in our PHP script:

echo “$name has a friend named $friend”;


-> On executing this code, we will get the result as "Yatharth has a friend named Riya." 
Here $name and $friend were data types of type string. 
We enclose a sequence of characters in single (') or double quotes (") to represent a string in PHP.

-> Second, in the list of data types are integers. 
An integer is a data type, which holds the numeric data such as 577, -998, etc. 
There is also an integer range that exists in PHP. 
The range of the integers totally depends upon the platform you are using. 
For example, the integer range in PHP for a 32-bit computer is – (231 – 1) or -2,147,483,647 to (231 – 1) or 2,147,483,647. 
That's all about integer data type for now.

-> Next in the list of data types is float. 
In the integer data type, we were unable to store decimals. 
To store decimals, we have another data type called float, which is capable of storing decimal values like 3.55. 
Other examples of the float data type are 566.89, - 989.0009, etc.

-> Next in the list, Boolean is a data type representing only two possible states that can be either true or false. 
For example, $x = true; and $y = false represents boolean variables with true and false as their values respectively. 
The purpose of introducing the “Boolean” data type in PHP is primarily for conditional testing.

-> “Object” is basically an instance of a class that is a template for creating such user-defined objects. 
We will be thoroughly discussing classes and objects in the upcoming tutorials later in the course.

-> “Array” has the property of storing multiple values inside a single variable, allowing us to perform various tasks using them. For example,

$friends = array ("Yatharth", "Riya", "Sujal", "Dev");


-> $friends here represents an array, and we can perform various tasks on it. 
If we want to inspect the content of an array variable, we will have to use the var_dump($friends) function to inspect the array variables; otherwise, it will show an error in the output.

-> Moreover, each value stored in an array is given a specific number called index, which starts from 0. 
In this array, "Yatharth", "Riya", "Sujal", "Dev" have index values of 0,1,2, and 3, respectively.

-> Null is the data type that can only have one value, and that is “null.” 
A null value is used to explicitly indicate "nothing." -->

<?php
$name = "Yatharth";
$income = 200;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// String - sequence of characters
$name = "Yatharth";
$friend = 'Riya';
echo "$name ka friend is $friend";


// Integer - Non decimal number
$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Float - Decimal point number
$income = 344.5;
$debts = -45.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// Object - Instances of classes
// Employee is a class ---> harry can be one object

// Array - Used to store multiple values in a single variable
$friends = array("Yatharth", "Riya", "Sujal", "Dev");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4

// NULL
$name = NULL;
echo var_dump($name);