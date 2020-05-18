<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php prime2Darray.php
* @Description :Take a range of 0-1000 Numbers and find the Prime numbers in that range. Store
the prime numbers in a 2D Array, the first dimension represents the range 0100,100200, and so on.
* @Purpose : Store the prime numbers in a twoD Array.
* @Function : Utility/utility
* @File : prime2Darray.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/DataStructure/BusinessLogic/businesslogic.php";
$object= new BusinessLogic();
$array=$object->primeNumber();
$input = array();
$index = 0;
$range = 100;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 100; $j++) {
        /*
         *if index reach size of array then break or when the value of index
         *elemnet is greater then $n value break
         */
        if ($index == count($array) || $array[$index] > $range)
            break;
        $input[$i][$j] = $array[$index++];
    }
     /**
     * after every loop increase by 100
     */
    $range += 100;
}
    for ($i = 0; $i < count($input); $i++) {
        for ($j = 0; $j < count($input[$i]); $j++) {
            echo $input[$i][$j] . " ";
        }
        echo "\n";
    
    }