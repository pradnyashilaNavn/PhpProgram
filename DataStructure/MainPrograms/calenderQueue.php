<?php 
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php calenderQueue.php
* @Description : Create the Week Object having a list of WeekDay objects each storing the day (i.e
S,M,T,W,Th,..) and the Date (1,2,3..) . The WeekDay objects are stored in a Queue
implemented using Linked List.
* @Purpose : Print the Calender.
* @Function : Utility/utility
* @File : calenderQueue.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/DataStructure/BusinessLogic/businesslogic.php";
//include "C:/Users/pc/PHP/DataStructure/Utility/Utility.php"; 
$object=new BusinessLogic();
echo "Enter the month: ";
$month=readline();
$date=1;
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
for ($i = 1; $i <= $days[$month - 1]; $i++) {
   $object->enqueue($i);
}
echo  $months[$month - 1] . "\t" . $year,"\n";
for ($j = 0; $j < sizeof($week); $j++) {
    echo $week[$j] . "\t";
}
$count=0;
echo "\n";
for ($k = 0; $k < $firstday; $k++)
 {
     $count++;
   echo "        ";

 }

 for ($i = 1; $i <= $days[$month - 1]; $i++) {
  // echo $object->peek()."\t";
    $count++;
    echo $object->dequeuecal()."\t";
    if($count%7==0)
    echo "\n";
 }
