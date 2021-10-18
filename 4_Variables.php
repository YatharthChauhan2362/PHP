<!-- Php Variables -->
<!-- This Program was Created By Yatharth Chauhan -->

<!--What are Variables?
-> A variable in the field of programming can be best defined as follows,

-> “A variable is a container that holds information or data which can change with time depending upon the conditions, information, or data passed to the program aptly. 
Characteristically, a program comprises commands or instructions for the computer, which instructs the machine to process information that the program utilizes when running.”

-> Let us understand the concept of variables step-by-step. We assign variables for a specific value that can be changed with time when required. For example, if you want to write a program to add 2 numbers, you can create 2 variables and change them. 
 doing this will make your program work for any number in general. Here variables can be created to hold these numbers.
 In order to use PHP variables, we should first learn how they work and what their use is in complex programs. 
 A variable is fundamentally a compartment that holds data or information that can change with time, based on the circumstances. 
 Various conditions depend upon the user’s need for data or information that the program requires at a given time. 
 Variables help the programmer change the value of a container at any time, giving him the flexibility to generalize the program. 
 Typically, a program contains directions or guidelines for the PC that instructs the PC to perform various operations on data whenever a program is running on the computer. 
 To make this data changeable, we need variables.


-> Why do we use Variables?
 Let’s talk about the use of variables. When we are learning a concept, we should know why are we learning it? What is the goal? And how will it make our lives easy? Suppose you are working on a huge site, and with time you always have to update information on your website (say color, title, logo, etc.). In that case, you cannot just go through the whole website, change everything one by one, etc. That would be very tedious. Variables will protect you from such hardships, and in case of updating your sites in the future, you will have to change the value of the variable, not the whole script of your website.

-> How to create a variable
1. Put a “$” sign before the variable and declare it
2. Assign the value to the variable during declaration or later sometime in the script.

Example

$name = "Harry"; // Variable 1: 
$income = 200;   // Variable 2: 

Now, we can use the echo command in the following way,

echo "This guy's is $name and his income is Rs $income";


Important Notes:
1. Never forget to put a semicolon ( ; ) at the end of a command in PHP as it is a must to terminate it.
2. Moreover, unlike PHP commands such as echo, which can be written in upper case letters while assigning variables, keep this thing in your mind that even a single lower-case letter can change the variable, and you may end up getting an error.
3. If you have any questions or queries regarding this tutorial, please post that question on the Question and Answers section.
4. Make sure Apache is running in your XAMPP while you attempt the aforementioned procedures. -->





<?php
// echo "This is Tutorial 5";
// Variables are containers for storing information
// Starts with a $
$name = "Shubham";
// Variables are case sensitive
$namE = "Capital wala Shubham";
$income = 200.8;

echo "This guy is $name and his income is Rs. $income<br>";

echo "$namE is a good boy<br>";
echo "$name is the real gangsta<br>";

?>