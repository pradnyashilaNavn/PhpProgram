<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php Orderlist.php
* @Description :Read .a List of Numbers from a file and arrange it ascending Order in a
Linked List. Take user input for a number, if found then pop the number out of the
list else insert the number in appropriate position.
* @Purpose : The List of Numbers to a File.
* @Function : Utility/utility
* @File : Orderlist.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\DataStructure\BusinessLogic\businesslogic.php";
$obj=new BusinessLogic();
$words=BusinessLogic::readNumbers();
$array=explode(" ",$words);
for($i=0;$i<count($array);$i++){
   $obj->insert($array[$i]);
}
$obj->display();
echo "enter to search: ";
$search=readline();
$obj->search($search);
$obj->display();
?>
