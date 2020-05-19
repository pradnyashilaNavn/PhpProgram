<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php primeQueue.php
* @Description :Add the Prime Numbers that are Anagram in the Range of 0 1000
in a Stack using the Linked List.
* @Purpose : Print the Anagrams form the Queue.
* @Function : Utility/utility
* @File : primeQueue.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/DataStructure/BusinessLogic/businesslogic.php";
$object=new BusinessLogic();
$array=$object->prime();
$anagram=$object->anagram($array);
if(is_array($anagram))
for($i=0;$i<count($anagram);$i++){
    $object->enqueue($anagram[$i]);
}
$object->show();