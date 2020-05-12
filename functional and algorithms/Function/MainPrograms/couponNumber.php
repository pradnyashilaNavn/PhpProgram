<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php couponNumber.php
* @Description :Given N distinct Coupon Numbers, how many random numbers do you
* need to generate distinct coupon number? This program simulates this random
* process.
* @Purpose : Total random number needed to have all distinct numbers.
* @Function : Utility/utility
* @File : couponNumber.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Function/Utility/utility.php"; 
echo "Enter coupoun numbers you want: ";
$number=readline();
Utility::couponNumber($number);

