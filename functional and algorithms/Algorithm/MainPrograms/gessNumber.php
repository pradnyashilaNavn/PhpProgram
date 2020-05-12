<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php gessNumber.php
* @Description : akes a command­line argument N, asks you to think of a number
    between 0 and N­1, where N = 2^n, and always guesses the answer with n
    questions.
* @Purpose : Gessing the correct number. .
* @Function : Utility/utility
* @File : gessNumber.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
echo "Enter a number: ";
$number=readline();
echo "Enter a number to search: ";
$search=readline();
Utility::guessNumber($number,$search);
?>