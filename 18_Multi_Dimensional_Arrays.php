<!-- Multi-Dimensional Arrays in Php -->
<!-- This Program was Created By Yatharth Chauhan -->

<!-- 
-> What is two-dimensional arrays (2D array) in Php
A two-dimensional array is an array of arrays. For your better understanding, we would like to define the three-dimensional array as an array of arrays of arrays.

So, dimensionality refers to the number of arrays within arrays.

-> Syntax of the 2D array in Php

The general syntax of 2d array in Php is;

array (
    array (elements...),
    array (elements...),
   ...
)

Example of the 2D array in Php

Let’s make our hands dirty with the practical example of a 2D array in Php. 
For this purpose, consider the following data table. 
We want to store this table’s data into a 2-dimensional array.

Name    Stock     Sold

Suzuki   21           12
Honda    12           9
BMW      22           1
Corolla  17           12

The above table contains two parameters for a complete description of each row of stock and sold data. 
A 1D array cannot store this information because we need more than one key to point to this data. 
Solving this problem by using the 2D array approach.


$vehicles = array (
  array("Suzuki",21,12),
  array("Honda",12,9),
  array("BMW",22,1),
  array("Corolla",17,12)
);

The main array will hold four arrays forming the two dimensions inside the memory. 
These four arrays consist of two indices to store Stock and Sold values. 
For getting a clear idea of how a 2D array forms its dimensions, refer to the figure above in this article.


-> How to access values in 2D array Php

echo $vehicles[0][0].": In stock: ".$ vehicles [0][1].", sold: ".$ vehicles [0][2].".<br>";
echo $ vehicles [1][0].": In stock: ".$ vehicles [1][1].", sold: ".$ vehicles [1][2].".<br>";
echo $ vehicles [2][0].": In stock: ".$ vehicles.", sold: ".$ vehicles [2][2].".<br>";
echo $ vehicles [3][0].": In stock: ".$ vehicles.", sold: ".$ vehicles [3][2].".<br>";

The next question that is arising in your mind will surely be how to traverse a two-dimensional array (2D array). In this next section, we will answer it.

-> How to traverse 2D arrays in Php
Like we have used a loop to traverse the 1D array, we use the same approach to traverse the 2D array as well, but with little different logic.


for ($r = 0; $r < 4; $r++) {
  echo "<p><b>Row number $r</b></p>";
  echo "<ul>";
  for ($c = 0; $c < 3; $c++) {
    echo "<li>".$vehicle[$r][$c]."</li>";
  }
  echo "</ul>";
}

We have used nested for loop i:e for loop inside for loop. 
The inner for loop is responsible for printing columns, and it executes 3 times for every single run of the outer loop, which is responsible for printing the rows of the vehicle array.

Note: You can use the count function instead of specifying the number of rows and columns.
Note: Var_dump() function in Php displays the structure of an array.

<?php

echo "Welcome to multi dimensional arrays in php <br>";

// Creating a 2 dimensional array
$multiDim = array(
  array(2, 5, 7, 8),
  array(1, 2, 3, 1),
  array(4, 5, 0, 1)
);


// echo var_dump($multiDim);
// echo $multiDim[1][2];

// Printing the contents of a 2 dimensional array

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

for ($i = 0; $i < count($multiDim); $i++) {
  for ($j = 0; $j < count($multiDim[$i]); $j++) {
    echo $multiDim[$i][$j];
    echo " ";
  }
  echo "<br>";
}

?>


-->