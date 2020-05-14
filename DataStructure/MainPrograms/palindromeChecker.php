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
echo "enter the string: ";
$string=readline();
for($i=0;$i<strlen($string);$i++){
    $object->addRear($string[$i]);
}
