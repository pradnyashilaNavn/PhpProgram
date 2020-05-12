<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php BubbleSort.php
* @Description : Reads in strings from standard input and prints them in sorted order.
    Uses Bubble sort.
* @Purpose : sorting the words using Bubble sort.
* @Function : Utility/utility
* @File : BubbleSort.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Algorithm\Utility\utility.php";
echo "Enter the size of the words: ";
$size=readline();
echo "enter the integers: ";
$array=array();
for($i=0;$i<$size;$i++)
$array[$i]=readline();
Utility::bubbleSort($array);
?>