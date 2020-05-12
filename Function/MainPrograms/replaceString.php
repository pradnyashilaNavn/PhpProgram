#! /c/xampp/php/php
<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php replaceString.php
* @description :Take User Name as Input. Ensure UserName has min 3 char.
* @Purpose : UserName replacing with String.
* @Function : Utility/utility
* @File : replaceString.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14cd
* @Since : 06-05-2020
*********************************************************************/
include "C:\Users\pc\Function\Functional\Utility\Utility.php";
echo "Enter Name :";
$input = readline("Enter Name : ");
Utility::replaceF($input);
?>