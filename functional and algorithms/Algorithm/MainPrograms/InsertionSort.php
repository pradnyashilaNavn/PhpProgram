<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php InsertionSort.php
* @Description : Reads in strings from standard input and prints them in sorted order.
  Uses insertion sort.
* @Purpose : Print the Sorted List.
* @Function : Utility/utility
* @File : InsertionSort.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
echo "enter the size of the words: ";
$size=readline();
echo "Enter the words: ";
$array=array();
for($i=0;$i<$size;$i++)
$array[$i]=readline();
Utility::insertionSort($array);
?>