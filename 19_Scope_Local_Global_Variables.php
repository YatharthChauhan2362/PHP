<!-- Scope, Local & Global Variables in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> Introduction
Hopefully, you are familiar with the PHP variables. They are declared using $ sign.

-> Rules and naming convention of variables in Php
1. A variable is declared by a dollar sign ($) in PHP.
2. The name of the variable must start with alphabet or underscore (_)
3. A variable name cannot start with a number.
4. The name of a variable cannot contain special characters. Only alphanumeric are allowed,
5. In Php, variables are case-sensitive. For instance, $x and $X are two different variables.


-> What is the scope of variables?
In a programming language, the scope of a variable means the areas in the code where the variable is accessible. 
Our PHP code consists of classes, functions, structure, etc. So, it is important to understand the scope of global and local variables. This concept can play a very important role in professional PHP developers' lives because it requires clear concept building.

In the next section, we will define local and global variables, and then we will move towards the practical examples for the best outcome out of this PHP lesson.


-> What are local and global variables in Php?

-> Local Variables in Php
Local variables are the variables declared inside a function. 
The scope of these variables is limited to that function only; therefore, they are called local variables. 
In other words, local variables cannot be accessed outside the function.

Example of local variables in Php

$var1 = 80;
function local_variables()
{
    // This $var1 is local to this function the variable $var1 outside this function is a completely different variable
    $var1 = 40;
    echo "local = $var1 \n";
}
local_variable();
// $num outside local_variable() is a different Variable than that of inside function
echo "Variable num outside local_variable() is $var1 \n";



-> Global Variables in Php
Global variables are declared outside the functions and are available to direct access globally.

-> How to access global variables inside a function in Php
Keep in mind that the local variables cannot be accessed outside the function, but PHP provides a function “global” to access the global variables inside the function.


$num = 20;
function global_variable()
{
    // we have to use global keyword to get access to the $num variable
    global $num;
    echo "num variable inside function : $num \n";
}
global_var();
echo "num variable outside function : $num \n";


-> Note: As we can access the global variable inside the function. 
   If we update the value of this variable accessed via the “global” keyword, this change will also be reflected outside the function.

-> Note: There is another type of variable in Php called static variables. 
   Variables are deleted from memory after the execution completes. But static variables are not deleted and kept inside the memory even after the execution completes.

-> Tip: All the global variables in Php are stored in an array named $GLOBALS[index]. 
   Where the index is the name of the variable.

<?php
echo "Welcome to scope and local/global vars in php<br>";
$a = 98; // Global Variable
$b = 9;

function printValue()
{
    // $a = 97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a;
printValue();
echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS); 
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>


 -->