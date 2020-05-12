<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php quadratic.php
* @Description :Find the roots of the equation a*x*x + b*x + c.Since the equation is x*x, hence there are 2  roots.
* @Purpose : Find Quadratic equation.
* @Function : Utility/utility
* @File : quadratic.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Function/Utility/utility.php"; 
echo "enter a value: ";
$a=Utility::getInt();
echo "\nenter b value: ";
$b=Utility::getInt();
echo "\nenter c vale: ";
$c=Utility::getInt();
Utility::quadratic($a,$b,$c);
?>