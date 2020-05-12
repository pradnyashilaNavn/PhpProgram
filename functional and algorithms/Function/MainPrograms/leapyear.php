<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php leapYear.php
* @description :Print the year is a Leap Year or not.
* @Purpose : Check the leapyear.
* @Function : Utility/utility
* @File : leapYear.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Function/Utility/utility.php"; 
include "C:/Users/pc/PHP/functional and algorithms/Function/BusinessLogic/businesslogic.php";
echo "Enter year"."\n";
$year= Utility::getInt();
BusinessLogic::leapYear($year);
?>