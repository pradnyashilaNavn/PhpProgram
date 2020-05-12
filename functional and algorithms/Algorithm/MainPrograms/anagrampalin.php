<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php anagrampalin.php
* @Description :prime palindrome numbers
* @Purpose : prime Palindromes.
* @Function : Utility/utility
* @File : anagrampalin.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Algorithm\Utility\utility.php";
echo "Enter range:\n";
$range=readline();
$array=Utility::primeRange($range);
echo "Prime Numbers are:\n";
Utility::dispayArray($array);

echo "\n\nPrime Palindromes are: ";
$anagram=Utility::primePalindrome($array);

echo "\nPrime Anagrams are:\n";
$prim=Utility::primeAnagram($array);
?>