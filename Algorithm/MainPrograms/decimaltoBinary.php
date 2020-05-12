<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php decimalToBinary.php
* @Description : Write a static function toBinary that outputs the binary (base 2) representation of
    the decimal number typed as the input. It is based on decomposing the number into
    a sum of powers of 2
* @Purpose : converting decimal to binary.
* @Function : Utility/utility
* @File : decimalToBinary.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:\Users\pc\Function\Algorithm\Utility\utility.php";
echo "Enter the decimal value: ";
$decimal=readline();
$binary=Utility::decmalToBinary($decimal);
?>