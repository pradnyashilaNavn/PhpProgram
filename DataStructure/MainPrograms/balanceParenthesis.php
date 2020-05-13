<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php balanceParanthesis.php
* @Description :Take an Arithmetic Expression such as
(5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3) where parentheses are used to order the
performance of operations. Ensure parentheses must appear in a balanced
fashion.
* @Purpose : Show Arithmetic Expression is balanced or not.
* @Function : Utility/utility
* @File : balanceParanthesis.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 07-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\DataStructure\BusinessLogic\businesslogic.php";
echo "Enter expresssion: ";
$exp=readline();
$bool=true;
$obj=new BusinessLogic();
for($i=0;$i<strlen($exp);$i++){
    if($exp[$i]=='(')
        $obj->push($exp[$i]);
    else if($exp[$i]==')' ){
        $bool=$obj->pop($exp[$i]);
        if($bool==false)
        break;
    }
}
$obj->peek();
$boolis=$obj->isEmpty();
if($boolis && $bool)
    echo "expresssion balanced\n";
else 
    echo "expresssion not balanced\n";
    ?>