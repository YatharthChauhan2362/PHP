<!-- Switch Case Statements in php  -->
<!-- This Program was Created By Yatharth Chauhan -->

<!--
-> How do switch-case statements work?
Switch case statements work so that a variable, $age = (any integer value) say $age = 56 (Here the switch is $age, as this is the value which is meant to be switched by a respective case). 
Now we will create different cases, giving them a criterion according to our requirements. 
For example, we create 4 cases.

1. The first case is that if your age is 12, print “you are 12 years old”.
2. The second case says that if your age is 12, print “you are 45 years old”.
3. The third case is that if your age is 56, print “you are 56 years old”.
4. If the variable value does not lie to any of the criteria mentioned above, then we have a default case that says “your age is weird.”

If the 2nd case is matched, then the result will be, “you are 12 years old, you are 45 years old, your age is weird”.

-> How to use switch-case statements?
We can use the switch case statements by assigning a variable and then assigning some cases with respect to your requirements. 
Following is the correct way of using the switch case statements.
 -->


<?php

$age = 56;

switch ($age) {
    case 12:
        echo "You are 12 years old <br>";
        break;

    case 45:
        echo "You are 45 years old <br>";
        break;

    case 56:
        echo "You are 56 years old boy <br>";
        break;

    default:
        echo "Your age is weird <br>";
        break;
}
?>