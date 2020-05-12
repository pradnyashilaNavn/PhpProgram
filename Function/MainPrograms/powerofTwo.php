<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php powerofTwo.php
* @description :Prints a table of the powers of 2 that are less than or equal to 2^N.
* @Purpose : Find the power of Two.
* @Function : Utility/utility
* @File : powerofTwo.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Function\Utility\utility.php"; 
echo "Enter value"."\n";
$number =Utility::getInt();
  while($number<0 || $number > 31)
    {
        echo "Enter value between 0 to 31"."\n";
      }
    Utility::powerOfTwo($number);	
?>