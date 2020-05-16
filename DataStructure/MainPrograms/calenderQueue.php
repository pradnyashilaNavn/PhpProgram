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
$object=new BusinessLogic();
echo "Enter the month: ";
$month=BusinessLogic::getInt();
if (($month <= 0) && ($month > 12)) {
    echo "Enter valid month number \n";
    $month = BusinessLogic::getInt();
}
$year = BusinessLogic::getInt();
if ($year < 1000) {
    echo "Enter valid year \n";
    $year = BusinessLogic::getInt();
}
BusinessLogic::printDay($date, $month, $year);
$calender = array();
$days = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
$months = array('Jan', 'Feb', 'March', 'April', 'may', 'June', 'July', 'Aug', 'Sep', 'oct', 'Nov', 'Dec');
$week = array('Sun', 'Mon', 'Tue', 'Wed', 'Th', 'Fri', 'Sat');
if (BusinessLogic::leapYear($year)) {
    $days[1] = 29;
}
for ($i = 1; $i <= $days[$month - 1]; $i++) {
    $object->enqueue($i);
}
echo  $months[$m - 1] . "\t" . $year;
echo "\n";
for ($j = 0; $j < strlen($week); $j++) {
    echo $week[$j] . "\t";
}


