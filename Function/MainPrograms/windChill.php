<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php windChill.php
* @Description :Write a program WindChil that takes two double command­line arguments t
    and v and prints the wind chill.
* @Purpose : Calculate windXChill.
* @Function : Utility/utility
* @File : windChill.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Function\Utility\utility.php"; 
echo "Enter value of t : ";
$t=Utility::getInt();
echo "\nEnter value of v: ";
$v=readline();
Utility::windChill($t,$v);
?>