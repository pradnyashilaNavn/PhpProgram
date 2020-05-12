<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php primerange.php
* @Description :Take range of 0 - 1000 Numbers and find the Prime numbers in that range.
* @Purpose : Find prime numbers.
* @Function : Utility/utility
* @File : primerange.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
echo "Enter range: ";
$range=readline();
echo "prime numbers 0-$range are:\n";
$array=Utility::primeRange($range);
for($i=0;$i<count($array);$i++)
echo $array[$i]," ";
?>