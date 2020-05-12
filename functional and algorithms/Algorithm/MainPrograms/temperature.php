<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php temperature.php
* @Description : To the Util Class add temperaturConversion static function, given the temperature
    in fahrenheit as input outputs the temperature in Celsius or viceversa.
* @Purpose : Converting celsius to fahrenheit and vise versa.
* @Function : Utility/utility
* @File : temperature.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
echo "Enter celsius temperature: ";
$celsius=readline();
echo "Enter fahrenheit: ";
$fahrenheit=readline();
Utility::temperatureConv($celsius,$fahrenheit);
?>