<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php sqrt.php
* @Description : Write a static function sqrt to compute the square root of a nonnegative number c
    given in the input using Newton's method.
* @Purpose : newton's method.
* @Function : Utility/utility
* @File : sqrt.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Algorithm\Utility\utility.php";
$words=Utility::readWords();
echo $words," \n";
$array=explode(" ",$words); //The explode() function breaks a string into an array.
$arr=BusinessLogic::bubbleSort($array);
echo "enter the word to search: ";
$word=readline();
if(Utility::binarySearch($arr,$word))
echo "$word found\n";
else 
echo "$word not found\n";
?>