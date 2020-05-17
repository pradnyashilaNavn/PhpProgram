<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php primeAnagram.php
* @Description :Take a range of 0-1000 Numbers and find the Prime numbers in that range. Store
the prime numbers in a 2D Array, the first dimension represents the range 100, 200, and so on.
* @Purpose : Check the number which are prime and anagram.
* @Function : Utility/utility
* @File : primeAnagram.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
 include "C:/Users/pc/PHP/DataStructure/BusinessLogic/businesslogic.php";
 $object= new BusinessLogic();
 $array=$object->primeNumber();
 //2d array to hold anagram and non anagram prime number 
 $array2d= array(array(),array());
 for($i=0;$i< count($array);$i++)
 {
    $boolean=false;
    for($j=0;$j< sizeof($array); $j++){
        if($i!= $j){
            $boolean=BusinessLogic::anagram($array[$i],$array[$j]);
            if ($boolean){
                array_push($array2d[0],$array[$i]);
                break;
            }
        }
    }
    if (!$boolean) {
        array_push($array2d[1],$array[$i]);
    } 
        //print both array
         for ($i=0; $i < sizeof($array2d); $i++) { 
            for ($j=0; $j < sizeof($array2d[$i]); $j++) { 
                echo $array2d[$i][$j]." ";
           }
            echo "\n"."prime"."\n";
     }
 }