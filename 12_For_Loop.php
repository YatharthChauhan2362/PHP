<!-- For Loops in php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> For loops
For loops, repeats a block a specified number of times. The syntax of For loop is,

for(initialization;condition; incrementation)


-> How does a for loop work?
A for loop consists of three parameters: initialization, condition, and incrementation. 
In initialization, a variable is created and is given an initial value. 
For example, we have a variable $index = 1; in the second counter, a condition is specified, which is to be checked if it meets the result and decides whether the loop should run or stops. 
Suppose in this case our condition is $index < 6. Every time the loop will run, it will check for the resulted variable after incrementation, meeting the specified criteria. 
In the incrementation counter, we actually instruct the for loop on what to do if the condition is not matched. Suppose, in this case, our incrementation criterion is $index++. 
This means that till the condition is not met, the value of $index will be added into the $index itself. 
Once the index meets the specified criterion mentioned in the condition counter, the loop will end.

// for ($index = 1; $index < 6; $index++) {

    // echo "The number is $index <br>";
// }

***RESULT:
1
2
3
4
5 -->



<?php

echo "This is for loop in action <br>";

for ($index = 1; $index < 6; $index++) {
    // for(initialization;condition; updation)
    echo "The number is $index <br>";
}

// Avoid running into infinite loops
// for ($i=0; $i < 87; ) { 
//     echo $i;
// }

echo "For loop has ended";
?>