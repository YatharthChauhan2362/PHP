<!-- foreach Loops in php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> What is Foreach Loop in Php
Foreach loop provides an easy way to access the array indexes. 
In Php, the Foreach loop only works for arrays or objects. 
If you try to use for each loop with the variable with the different data types. 
The general syntax for Foreach loop in Php is given below;

 foreach (array_expression as $value)
    statement

The above syntax is the first form of Foreach loop that continues its iteration till the length of the array and assigns the value of each element to the $value variable. 
This variable then can be accessed inside the body of the foreach loop.


foreach (array_expression as $key => $value)
    statement

This is the second form of foreach loop in Php. 
It assigns the key of the current element to the $key variable.


-> Difference between Foreach loop and other loops
Possibly, the While, Do While, and For loops can work with arrays and objects but you have to do some extra work like using the count function to get the exact length of the array. 
This can lead to inefficient way of dealing with arrays. Foreach loop automatically executes the loop to the length of the array which removes the chances of any “index out of bound” or some other memory errors.

-> Example of foreach loop
Before moving to the actual example explained in the lesson, let’s declare an array having string elements.

$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

To access the array elements using for loop, we have to do following code.

for ($i=0; $i < count($arr); $i++)
{
  echo $arr[$i];
  echo "<br>";
}

And the recommended way to iterate in the loop using foreach loop is given below.

foreach ($arr as  $value) 
{
    echo "$value <br>";
}

That’s it. So, you are now familiar with all Php loops and their differences. 
The choice among different loops depends on the scenario. No loop can be declared as the best loop. 
They are best at their appropriate place of use.

-> Note: As far as the use of foreach loop with objects is concerned, you will learn it in the next lessons of this course.

-> Note: It is better to use unset($value) function immediately after using the foreach loop. 
Keeping the above example of foreach loop in view, the $arr variable is a reference to the current element of the array and when the loop terminates, $arr variable will be still pointing to the last element So, unset($value) function will break this reference after the loop has finished. -->


<?php
echo "Welcome to the world of foreach loops <br>";
$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops
foreach ($arr as  $value) {
    echo "$value <br>";
}

?>