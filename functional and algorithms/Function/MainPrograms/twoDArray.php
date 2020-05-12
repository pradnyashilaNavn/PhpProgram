<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php twodArray.php
* @description :A library for reading in 2D arrays of integers, doubles, or booleans from
    standard input and printing them out to standard output.
* @Purpose : Print two dimentional array.
* @Function : Utility/utility
* @File : twodArray.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
/*
*@description : A library for reading in 2D arrays of integers, doubles, or booleans from
standard input.
*$parameter : reads the input row and col  from user
@return : 2D Arrays values
*/
include "C:/Users/pc/PHP/functional and algorithms/Function/Utility/utility.php"; 
    function  twoDArray()
     {
         echo "enter row size"."\n";
         $row =Utility::getInt();
         echo "\n"."enter colums size"."\n";
         $col =Utility::getInt();
         $arr = array();
         echo "enter values"."\n";
         //for loop to store the value in the array one by one 
         for($i = 0;$i < $row; $i++)
         {
             //array to save value in row by row in main array
             $iArr = array();
             //for loop to take $n value from user 
             for($j = 0; $j < $col ;$j++ )
             {
                 $iArr[$j] = trim(fgets(STDIN));
             } 
             array_push($arr,$iArr);
         }
         for($i = 0;$i < $row; $i++)
         {
             for($j = 0; $j < $col ;$j++ )
             {
                 echo $arr[$i][$j]." ";
             }
             echo "\n";
         }
     }
     twoDArray();
?>