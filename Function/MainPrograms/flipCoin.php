<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php flipCoin.php
* @description :The number of times to Flip Coin. Ensure it is positive integer.
* @Purpose : Finding Percentage of Head vs Tails.
* @Function : Utility/utility
* @File : flipCoin.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
    include "C:\Users\pc\PHP\Function\Utility\Utility.php";
    echo "Enter number  : ";
    $number= Utility::getInt(); 
    Utility::flipCoin($number);
?>