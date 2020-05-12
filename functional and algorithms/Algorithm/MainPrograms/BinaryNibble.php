<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php binaryNibble.php
* @Description : Write Binary.java to read an integer as an Input, convert to Binary using toBinary
  function and perform the following functions.
  i. Swap nibbles and find the new number.
  ii. Find the resultant number is the number is a power of 2.
* @Purpose : converting decimal to binary.
* @Function : Utility/utility
* @File : binaryNibble.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:\Users\pc\Function\Algorithm\Utility\utility.php";
echo "Enter decimal number: ";
$decimal=readline();
$binary=Utility::decmalToBinary($decimal);
Utility::binaryNibbles($binary);
?> 