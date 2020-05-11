<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php harmonicNumber.php
* @description :Prints the Nth harmonic number: 1/1 + 1/2 + ... + 1/N.
* @Purpose : Print the Nth Harmonic Value.
* @Function : Utility/utility
* @File : harmonicNumber.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:\Users\pc\Function\Functional\Utility\Utility.php";
echo "enter value to find harmonic number"."\n";
$number= Utility::getInt(); 
Utility::harmonicNumber($number);
?>