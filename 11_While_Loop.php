<!-- While Loops in php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> What are loops?
We can define loops as controlled structures used to repeat a given section of code a certain number of times or until a particular condition is met. 
There are various types of loops, and in this tutorial, we will be discussing the while loops in PHP.

-> What are While Loops, and do they work?
“While loops are used to execute a block of code until a certain condition becomes true.” 
While loops are basically used to repeat a certain block until some specified condition or criterion assigned by the programmer is matched. 
Let’s take a look over this example: a programmer wants to add a number into a specific variable until it is met some conditions. 
Suppose we have a variable say $a = 1, and we have a number say 2 to be added in the variable. 
Then the while loop will work in such a way that while the variable $a is not equal to 21, add number 2 into the variable $a. As a result, the PHP will keep adding the number 2 into $a until it meets the given condition, equivalent to $a to 21.

-> Why do we use While loops?
While loops are basically used for an efficient approach to a specific time-consuming task while coding. Using while loops can get you the task done in no time without too much effort. 
For example, if you are asked to print numbers from 1 to 5, you can easily use the echo command to do so like this,

echo 1;echo"<br>";
echo 2;echo "<br>";
echo 3;echo "<br>";
echo 4;echo "<br>";
echo 5;echo "<br>";

But what if you are asked to print numbers from 1 to 5000? That is a hard-hitting target and will consume a lot of time. Not just this, it is possible that you can make some syntax mistakes while writing for such a lengthy code. Here, in this case, we will use while loops to save time, minimize the efforts, and cast out all the possibilities of making an error. If we have to write the counting from 0 till the number is less than 5, then we can use while loops in the following way,

$i = 0;

while($i<5){

    echo "The value of i is ";

    echo $i+1;

    echo "<br>";

    $i+=1;

}

?>

What is happening here, our variable is 0, and 1 is added to it every time the loop runs. 
The loop runs add 1 number in the variable: $i, and comebacks to the while condition, sees if the condition is met or not.
If the condition, $i<5, does not meet, it repeats the loop and returns to the while condition again. 
The loop stops when the condition is met.

<?php
echo "while loops in php";
echo "<br>";
// echo 1;echo"<br>";
// echo 2;echo "<br>";
// echo 3;echo "<br>";
// echo 4;echo "<br>";
// echo 5;echo "<br>";

/* 
while (condition){
    some lines of code here;
}
*/

$i = 0;
while ($i < 5) {
    echo "The value of i is ";
    echo $i + 1;
    echo "<br>";
    $i += 1;
}
?>