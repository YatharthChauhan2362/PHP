<!-- Functions in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- Generally, there are two types of functions in a language.

1. Built-In functions
2. User-defined functions

-> What are user-defined functions?
User-defined functions are declared and defined by the user itself.
Functions are created to perform some specific task multiple times in our code. 
Functions reduce the complexity of code and make out task easy.

-> Real-life example to understand functions
Suppose you are a teacher and want to calculate the sum of marks obtained by each student in 5 subjects. 
If you are going to program it without function, you have to write separate statements for each student, a very bogus programming approach.

A good developer always writes functions to automate their tasks, and we are here to make you such good Php developers. 
So, you have to make a function that accepts some parameters and returns the sum of marks of each student.

-> Syntax of a function in Php

Functions receiving no argument

function functionName() {
  code to be executed;
}

Function receiving argument

function functionName(argument(s)) {
  code to be executed;
}

Notes:

1. A function name must start with a letter or an underscore.
2. Function names are not case-sensitive.

If the above conditions are not met, it will be an error.


-> What are function arguments?
Function arguments are variables of some supported data type that are processed within the body of the function.

-> Note: A function does not always return value; such functions are void type functions.


Example 1

// function sumNumbers(int $a, int $b)
// {
    // return $a + $b;
// }
// echo addNumbers(5, 20);


The above function receives two arguments as integers and returns their sum.

 

Example 2

?>
function add_some_extra($string)
{
    $string .= 'Add something.';
}

$str = 'I have added this';
add_some_extra($str);

echo $str;   
// outputs ‘Add something. I have added this'

?>
 

This function is a pretty interesting application of functions. 
It received an argument of type string, and inside the body of the function, it concatenates (joins) the passed string with the string inside the function.

In web development, most of the time, a website has to provide multiple functionalities. 
For example, if the website is about an online store, it should provide addToCart(), checkout(), etc. 
So, these multiple tasks can be handled very efficiently by declaring them in the form of functions. 
Once a function is created, it can be used as many times as you want.

-> Tip: Php provides more than 1000 built-in functions.

Finally, keep in mind that once a function is coded, it will not execute unless it is called anywhere. So, function definition alone cannot do anything. You have to make a call to the function to execute.   

<?php
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}

$riya = [34, 98, 45, 12, 98, 93];
// $sumMarks = processMarks($rohriya);
$sumMarks = avgMarks($riya);

$yatharth = [99, 98, 93, 94, 17, 100];
// $sumMarksyatharth = processMarks($yatharth$sumMarksyatharth = avgMarks($yatharth);
echo "Total marks scored by riya out of 600 is $sumMarks <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksyatharth";

?>

  -->