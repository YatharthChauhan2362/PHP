<!-- Operators in Php  -->
<!-- This Program was Created By Yatharth Chauhan -->

<!--
-> What are operators and operands in PHP?
The operators are the functions that allow us to perform various operations over any values whereas, the operands are the values or objects on which operations are performed.

-> Types of operators
We will be discussing some operators in this tutorial. Following are a few operators,

-> Arithmetic operators: arithmetic operators are used to performing arithmetic operations on values. 
These arithmetic operations can be addition, subtraction, division, and multiplication. 
To have a good understanding of it, let’s look into an example. 
Suppose we have two variables: $a = 5; and $b = 7; now let’s use arithmetic operations on these two variables.

Echo $a + $b; result: 13
Echo $a - $b; result: -2
Echo $a * $b; result: 35
Echo $a / $b; result: 0.7142

here $a and $b are the operands as they are the objects on which operations are performed, whereas, subtraction, division, addition, and multiplication are the arithmetic operator.

-> Assignment operators: the assignment operators are used to assign values to operands. 
The basic assignment operator is (=). 
Suppose we have a variable $a = 5, then we can use the assignment operator in such a way,
$x = $a
Echo “for x, the value is “ . $x .”<br>”; result: for x, the value is 5d

Now for adding a number in a variable, we can follow the procedure given below,
$a += 6;
Echo “for a, the value is “ . $a . “<br>”; result: for a, the value is 11

For subtraction,
$a -= 6;
Echo “for a, the value is “ . $a . “<br>”; result: for a, the value is -1

For multiplication
$a *= 6;
Echo “for a, the value is “ . $a . “<br>”; result: for a, the value is 30

For division
$a /= 6;
Echo “for a, the value is “ . $a . “<br>”; result: for a, the value is 0.833333


-> Comparison operators: we use comparison operations two compare two values.
Suppose we have two variable, $x = 7; and $y= 9;

Echo “for x == y, the result is”;
Echo var_dump ($x == $y);
Echo. “<br>”
Result: for x == y, the result is bool(false)

Similarly, we can further use other comparison operators as well, such as less than (<), greater than (>), and not equal to (<>), etc.

-> Logical operators: there are 4 logical operators, and (true if both values are true), or (true if at least one value is true), xor (true if either of the value is true but not both), and (true if both values are true).
        
Suppose, we have two variables, $m = true; $n = false;

    Echo “for m and n, the result is”;
    Echo var_dump ($m and $n);
    Echo. “<br>”
    Result: for x == y, the result is bool(false) -->



<?php
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$a = 45;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is " . ($a + $b) . "<br>";
echo "For a - b, the result is " . ($a - $b) . "<br>";
echo "For a * b, the result is " . ($a * $b) . "<br>";
echo "For a / b, the result is " . ($a / $b) . "<br>";
echo "For a % b, the result is " . ($a % $b) . "<br>";
echo "For a ** b, the result is " . ($a ** $b) . "<br>";

// 2. Assignment Operators
// $x = $a;
// echo "For x, the value is ". $x . "<br>";

// $a += 6;
// echo "For a, the value is ". $a . "<br>";

// $a -= 6;
// echo "For a, the value is ". $a . "<br>";

// $a *= 6;
// echo "For a, the value is ". $a . "<br>";

// $a /= 5;
// echo "For a, the value is ". $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "For a, the value is ". $a . "<br>";


// 3. Comparison Operators 
$x = 78;
$y = 78;

// echo "For x > y, the result is ";
// echo var_dump($x > $y);

// echo "For x > y, the result is ";
// echo var_dump($x >= $y);

// echo "For x < y, the result is ";
// echo var_dump($x < $y);

// echo "For x < y, the result is ";
// echo var_dump($x <= $y);

echo "For x <> y, the result is ";
echo var_dump($x <> $y);
echo "<br>";


// 4. Logical Operators

$m = true;
$n = true;

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is ";
echo var_dump(!$m);
echo "<br>";



?>