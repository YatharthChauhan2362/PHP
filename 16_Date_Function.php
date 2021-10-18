<!-- Date Function: Handling Dates in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> Introduction
While a developer is developing a website in Php, he may need to retrieve the current date or time to perform some actions based on it, such as starting or ending the discount sale on some products, etc. 
These are areas where the Php date function comes in handy. 

-> What is the Date function in Php?
The date is a built-in function of Php used to retrieve the current local time and date. 
This function returns the date in the form of a string.

-> Syntax: date (format, timestamp)
The timestamp argument is optional. It specifies an integer Unix timestamp. 
By default, it is the current local time. time().

-> Different formats of date in Php
In this section, you will see different formats of printing dates on your webpage. 
There are several built-in formats available for the date function denoted by different alphabets.

Examples
// Prints something like: Monday
echo date("l");

// Prints something like: Sunday 10th of July 2020 03:12:46 PM
echo date('l jS \of F Y h:i:s A');


-> Escaping characters in Date()
You can put your own characters between the date by following the method using the date() function.


// prints something like: Sunday the 11th
echo date('l \t\h\e jS');

The backslash is used with each letter to make it differ from the special characters or the arguments of the date function.

-->

<?php
echo "Welcome to the world of dates<br>";
// $d = date("dS F Y");
$d = date("dS F Y, g:i A");
echo "Todays date is $d <br>";
// Quick Quiz - Post at least 3 examples of dates in php in the comments below

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved <br>";

?>