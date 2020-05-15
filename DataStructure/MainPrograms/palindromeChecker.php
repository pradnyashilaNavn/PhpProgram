<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php palindromeChecker.php
* @Description :A palindrome is a string that reads the same forward and backward, for
example, radar, toot, and madam. We would like to construct an algorithm to
input a string of characters and check whether it is a palindrome.
* @Purpose : given string is palindrome or not using queue.
* @Function : Utility/utility
* @File : palindromeChecker.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\DataStructure\BusinessLogic\businesslogic.php";
$object=new BusinessLogic();
echo "enter the string to check for palindrome: ";
$string=readline();
for($i=0;$i<strlen($string);$i++){
    $object->addRear($string[$i]);
}
$object->displayForward();
echo "\n";
$string1 = "";
echo "reverse of a taken string \n";
for ($i = 0; $i < strlen($string); $i++) {
    $string1 = $string1 . $object->removeRear();
}
echo $string1 . "\n";
if ($string == $string1) {
    echo "String is palindrome \n";
    echo "true \n";
} else {
    echo "String is not palindrome \n";
    echo "false \n";
}

