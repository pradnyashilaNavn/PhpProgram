<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php dayofweek.php
* @Description : To the Util Class add dayOfWeek static function that takes a date as input and
    prints the day of the week that date falls on. Your program should take three
    command­line arguments: m (month), d (day), and y (year).
* @Purpose : finding the day of the week.
* @Function : Utility/utility
* @File : dayofweek.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
echo "Enter a year: ";
$year=readline();
echo "\nEnter a month: ";
$month=readline();
echo "\nEnter a date: ";
$date=readline();
$day=Utility::dayOfWeek($year,$month,$date);
?>