<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php vendingMachine.php
* @Description : There is 1, 2, 5, 10, 50, 100, 500 and 1000 Rs Notes which can be
    returned by Vending Machine. Write a Program to calculate the minimum number
    of Notes as well as the Notes to be returned by the Vending Machine as a
    Change.
* @Purpose : counting minimum number of notes.
* @Function : Utility/utility
* @File : vendingMachine.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
$array=array(1,2,5,10,50,100,500,1000);
echo "Enter the amount: ";
$amount=Utility::numericInput();
utility::vendingMachine($array,$amount);
?>