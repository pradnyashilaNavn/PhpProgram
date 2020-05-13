<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php Unorderlist.php
* @Description :Read the Text from a file, split it into words and arrange it as Linked List.
Take a user input to search a Word in the List. If the Word is not found then add it
to the list, and if it found then remove the word from the List. In the end save the
list into a file
* @Purpose : The List of Words to a File.
* @Function : Utility/utility
* @File : Unorderlist.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\DataStructure\Utility\Utility.php";
$obj=new Utility();
$words=Utility::readWords();
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