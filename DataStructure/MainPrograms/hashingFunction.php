<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php hashingFunction.php
* @Description :Create a Slot of 10 to store Chain of Numbers that belong to each Slot to
efficiently search a number from a given set of number
* @Purpose : Save the numbers in a file.
* @Function : Utility/utility
* @File : hashingFunction.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/DataStructure/BusinessLogic/businesslogic.php";
include "C:/Users/pc/PHP/DataStructure/MainPrograms/Linklist.php";
$object=new BusinessLogic();
$words=BusinessLogic::hashNumber();
$array=explode(" ",$words);
echo implode(" ",$array),"\n";
$obj[10]=new LinkedList();
for($i=0;$i<count($obj);$i++){
    $obj[$i]=null;
}
for($i=0;$i<count($obj);$i++){
    $obj[$i]=new LinkedList();
}
for($i=0;$i<count($array);$i++){
    $remainder=$array[$i]%11;
    echo floatval ($remainder);
    $obj[$remainder]->add($array[$i]);
}
for($i=0;$i<count($obj);$i++){
    echo "[$i]->";
    $obj[$i]->display();
    echo "\n\n";
}
$object=new LinkedList();
echo "enter to search number: ";
$search=readline();
$value=$search%11;
$obj[$value]->search($search);
