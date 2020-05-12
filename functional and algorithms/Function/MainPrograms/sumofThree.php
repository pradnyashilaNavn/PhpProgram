<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php sumofThree.php
* @description :A program with cubic running time. Read in N integers and counts the
    number of triples that sum to exactly 0.
* @Purpose : Finding sum of three are zero
* @Function : Utility/utility
* @File : sumofThree.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Function/Utility/utility.php"; 
include "C:/Users/pc/PHP/functional and algorithms/Function/BusinessLogic/businesslogic.php";
echo "Enter array size : "."\n";
$number =Utility::getInt();
$arr = array();           
echo "\n"."Enter values"."\n";
    for($i=0; $i<$number; $i++)
{
    $arr[$i] = readline();
}
BusinessLogic::sumofThree($arr, $number);
?>