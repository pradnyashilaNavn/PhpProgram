<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php anagram.php
* @Description :Take 2 Strings as Input such abcd and dcba and Check for Anagrams.
* @Purpose : The Two Strings are Anagram or not...
* @Function : Utility/utility
* @File : anagram.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Algorithm\Utility\utility.php";
echo "\nEnter a string1: ";
$input1=Utility::stringInput();
echo "Enter a string2: ";
$input2=Utility::stringInput();
Utility::Anagram($input1,$input2);