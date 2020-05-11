<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php distance.php
* @Description :Two integer command­line arguments x
   and y and prints the Euclidean distance from the point (x, y) to the origin (0, 0).
* @Purpose : Find distance.
* @Function : Utility/utility
* @File : distance.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @Version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:\Users\pc\Function\Functional\Utility\Utility.php"; 
echo "Enter x value"."\n";
$x = Utility::getInt();
echo "Enter y value"."\n";
$y = Utility::getInt();
echo "distance ".Utility::distance($x ,$y)."\n";
