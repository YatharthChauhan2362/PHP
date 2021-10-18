<!-- If Else Conditionals in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> If else conditionals in PHP

-> How if-else statements work?
The if/else statements broaden the if statement by indicating an activity if the if (true/false statement) is false.
With the if/else articulation, the program will execute either the genuine code block or the false code block, so something is constantly executed with an if/else explanation.

-> Case A

For example, we have two variables $a = 65; and $b = 9;

$a = 665;
$b = 9;
If($a > 78){
   Echo "a is greater than 78";
}
Else{
   Echo "a is not greater than 78";
}

**result: a is greater than 78

If in the above case, the value of $a would have had been less than 78, then the result could have had been “a is not greater than 78.”

In the above case, we have a condition that if $a is greater than 78, then print “a is greater than 78”; otherwise, print “a is not greater than 78”.


-> Case B

$age = 24;
If ($age>18){
   Echo "you can drink water with chai and alcohol";
}
Elseif($age>13){
   Echo "you can drink chai only with water. No alcohol for you";
}
Else{
   Echo "you can drink water only";
}

In the above case, if age is greater than 18, then print "you can drink water with chai and alcohol," here the second condition is if age is less than 13, then print "you can drink chai only with water. 
No alcohol for you", otherwise,
print "you can drink water only."

-> Case c

If ($age>18){
   echo "you can drink water with chai and alcohol<br>";
}
If($age>13){
   echo "you can drink chai only with water. No alcohol for you<br>";
}
Else{
   echo "you can drink water only<br>"

Here in the above case, both “if conditions” are independent of each other. If the first condition meets the criteria, then its corresponding result will be printed. 
If the first and the second, both “if conditions” meet the criteria, then both of their corresponding results will be printed.



<?php
// $a = 665;
// $b = 9;

// if($a > 78){
//     echo "a is greater than 78";
// }
// else{
//     echo "a is not greater than 78";
// }

$age = 24;

// If else ladder
// if ($age>18){
//     echo "You can drink water with chai and alcohol";
// }
// elseif($age>13){
//     echo "You can drink chai only with water. No alcohol for you";
// }
// else{
//     echo "You can drink water only";
// }


if ($age > 18) {
   echo "You can drink water with chai and alcohol<br>";
}

if ($age > 13) {
   echo "You can drink chai only with water. No alcohol for you<br>";
} else {
   echo "You can drink water only<br>";
}


// Quick quiz - 
// 1. Create an if else ladder using more than one elseif 
// 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
// and less than or equal to 65

echo "Done";
?>