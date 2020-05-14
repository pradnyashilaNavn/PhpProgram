<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php bankingCashcounter.php
* @Description :Create a Program which creates Banking Cash Counter where people
come in to deposit Cash and withdraw Cash. Have an input panel to add people
to Queue to either deposit or withdraw money and dequeue the people. Maintain
the Cash Balance.
* @Purpose : To Show Arithmetic Expression is balanced or not.
* @Function : Utility/utility
* @File : bankingCashcounter.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\DataStructure\BusinessLogic\businesslogic.php";
$object=new BusinessLogic();
$bool= true;
echo "echo number of users";
$user=readline();
for($i=0;$i<$user;$i++){
    echo "Enter name: ";
    $name=readline();
    $object->enqueue($name);
}
$object->show();
for($i=0;$i<$user;$i++){
     echo "User:  ",$object->currentUser(),"\nenter amount: ";
    $amount=readline();
    echo "enter 1 to deposit\nenter 2 to withdraw:\n";
    $option=readline();
    $object->dequeue();
    $object->show();
    $object->bankBalance($option,$amount);
}
$balance=$object->bankBalance;
echo "bank balance is: ",$balance,"\n";


