<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php merge.php
* @Description : Write a program with Static Functions to do Merge Sort of list of Strings.
* @Purpose : sorting the words using merge sort.
* @Function : Utility/utility
* @File : merge.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Algorithm/Utility/utility.php";
echo "enter the array size: ";
$size=Utility::numericInput();
$arr = array(); 
echo "enter the elements in array: ";
for($i=0;$i<$size;$i++)
$arr[$i]=readline();
echo "\n";
$arr=mergesort($arr);
 echo implode(' ',$arr);
 echo "\n";
function mergesort($numlist)
{
    if(count($numlist) == 1 ) return $numlist;
    $mid = count($numlist) / 2;
    $left = array_slice($numlist, 0, $mid);
    $right = array_slice($numlist, $mid);
    $left = mergesort($left);
    $right = mergesort($right);
    return merge($left, $right);
}
function merge($left, $right)
{
    $result=array();
    $leftIndex=0;
    $rightIndex=0;
    while($leftIndex<count($left) && $rightIndex<count($right)){
        if($left[$leftIndex]>$right[$rightIndex]){
            $result[]=$right[$rightIndex];
            $rightIndex++;
        }
        else{
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
    }
    while($leftIndex<count($left)){
        $result[]=$left[$leftIndex];
        $leftIndex++;
    }
    while($rightIndex<count($right)){
        $result[]=$right[$rightIndex];
        $rightIndex++;
    }
    return $result;
}