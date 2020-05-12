<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php primeFactors.php
* @Description :Number to find the prime factors.
* @Purpose : Print the prime factors of number N.
* @Function : Utility/utility
* @File : primeFactors.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Function\Utility\utility.php"; 
echo "Enter a number: ";
$number= Utility::getInt();
Utility::primeFactors($number)
?>