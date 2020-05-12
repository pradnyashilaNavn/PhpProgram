<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php monthlyPayment.php
* @Description : Write a Util Static Function to calculate monthlyPayment that reads in three
    command­line arguments P, Y, and R and calculates the monthly payments you
    would have to make over Y years to pay off a P principal loan amount at R per cent
    interest compounded monthly.
* @Purpose : calculating monthly intrest payment on  principle amount.
* @Function : Utility/utility
* @File : monthlyPayment.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
echo "Enter the Principal :";
$principal = Utility::numericInput();
echo "Enter the Rate :";
$rate = Utility::numericInput();
echo "Enter the year";
$year = Utility::numericInput();
Utility::monthlyPayment($principal, $rate, $year);
?>
