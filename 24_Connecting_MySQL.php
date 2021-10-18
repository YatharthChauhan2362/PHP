<!-- Connecting to MySQL Database from Php Script -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> MySQL
 MySQL is a database system. In our last tutorial, we have learned about databases and how it works. 
 Now let's see what SQL stands for. SQL stands for the structured query language. 
 It is used to run various tasks on databases. It is also cross-platform compatible. 

-> Connecting to the Database
Now to connect our script to the MySQL databases we have 2 options.

1. MySQLi extension.
2. PDO.

-> MySQLi:  MySQLi is an open-source relational database management system that is used on the web. 
This database system is reliable for both small and large applications.

-> PDO: PHP Data Object is a PHP extension that defines a lightweight and consistent interface for accessing a database in PHP. 
It is a set of PHP extensions that provide a core PDO class and database-specific driver. 


-> Using MySQLi:
We need to create 3 variables for $servername, $username and $password. Now we will connect to the server using mysqli_connect. 
We will also add an extra feature to the code like if the connection was not established then it will end the program with an error message. 

 -->


<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful";
}

?>