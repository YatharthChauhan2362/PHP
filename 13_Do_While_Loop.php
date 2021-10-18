<!-- do-While Loops in php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- Introduction 

Do While Loop is almost like while loop but has one major difference. 
The while loop contains the condition statement right from the first line of loop syntax, i.e., while(condition). 
So, when the control reaches this line containing the while loop condition, and it is false, the loop will not execute. 
This is not the case with Do While Loop, which always allows the code written inside the loop body to run once even if the loop condition is false.

The condition statement of the Do While Loop is written at the end of the body of the loop so, the compiler will execute the body in sequence and then check the condition. 
In this way, the Do While Loop is always executed at least once.

-> While Loop
Syntax of While loop in Php is;


while(condition)
{
                Some piece of code to be executed here;
}  

-> Do While Loop
Syntax of Do While Loop in Php is;


do
{
   Some piece of code to be executed here;
}While(condition);

-> Explanation
Let’s understand Do While Loop with the simplest code example given above.


$i=80;

do{

  echo “Printing $i”;

  $i++;

}while($i<5);

Although in the above code, the condition is false because i=80, which is greater than 5, but the code inside the loop will run one time, then the loop will terminate. 
If this were a simple While loop, it would not execute even once.

-> Note: Don’t forget to put a semicolon after the while statement at the end of the Do While Loop. 
It's a very common mistake that you can make while implementing Do While Loop in Php. 
A mistake at this kind of place can cause a lot of distraction from the actual spot of error.

The choice among three kinds of loops in Php for Loop, While Loop, and Do While Loop depends on the nature of the problem or your requirement.

-> Note: Each loop has its power, such as while loop can be the easy approach when you need to update many variables inside the loop body. 
For loop is handy for simple increments or decrements, whereas the Do While Loop is the choice when the loop body needs to be executed at least once. 
A very general example of Do While Loop can be clearing the Logfile of the server. Based on certain conditions, the log file must be cleared once the conditions are followed to clear it again. 
After watching this lesson, run the Apache server, create a new Php file for practicing Do While Loop and test the following code with different conditions.-->


<?php
echo "Welcome to do while loops <br>";

/*
do {
    some lines of code to be executed here;
    ...
} while(condition);
*/

$i = 0;
do {
  echo "$i <br>";
  $i++;
} while ($i < 5);

?>