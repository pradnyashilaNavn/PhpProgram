<?php

/********************************************************************
 * @Execution : Algorithm/MainPrograms $ php calenderStack.php
 * @Description : Create the Week Object having a list of WeekDay objects each storing the day (i.e
S,M,T,W,Th,..) and the Date (1,2,3..) . The WeekDay objects are stored in a Queue
implemented using Linked List.
 * @Purpose : Program to store the Queue in two Stacks. 
 * @Function : Utility/utility
 * @File : calenderStack.php
 * @Author : Pradnyashila Jadhav 
 * <pradnyajadhav995@gmail.com>
 * @version : 7.2.14
 * @Since : 11-05-2020
 *********************************************************************/
include "C:/Users/pc/PHP/DataStructure/BusinessLogic/businesslogic.php";
include "C:\Users\pc\PHP\DataStructure\MainPrograms\stack.php";
$object = new Stack();
$obj = new Stack();
echo "Enter the month: ";
$month = readline();
echo "Enter the year: ";
$year = readline();
$firstday=BusinessLogic::printDay(1, $month, $year);
$days = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
$months = array('Jan', 'Feb', 'March', 'April', 'may', 'June', 'July', 'Aug', 'Sep', 'oct', 'Nov', 'Dec');
$week = array('Sun', 'Mon', 'Tue', 'Wed', 'Th', 'Fri', 'Sat');
 echo $firstday . "\n";
if (BusinessLogic::leapYear($year)) {
    $days[1] = 29;
 }
echo  $months[$month - 1] . "\t" . $year, "\n";
for ($j = 0; $j < sizeof($week); $j++) {
   echo $week[$j] . "\t";
}
echo "\n";
$count = 0;
$firstday=BusinessLogic::printDay(1, $month, $year);

for($i=0;$i<$firstday;$i++)
{
   $count++;
   echo "        ";
}
for ($i = 1; $i <= $days[$month - 1]; $i++) {
   $count++;
   $object->push($i)."\t";
   if($count%7==0)
   echo "\n";
}
echo "\n";