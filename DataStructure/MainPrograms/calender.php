<?php
/********************************************************************
* @Execution : Algorithm/MainPrograms $ php calender.php
* @Description : Write a program Calendar.java that takes the month and year as commandline
arguments and prints the Calendar of the month. Store the Calendar in an 2D Array,
the first dimension the week of the month and the second dimension stores the day
of the week.
* @Purpose : Print the calender.
* @Function : Utility/utility
* @File : calender.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 11-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\DataStructure\Utility\Utility.php"; 
echo "Enter month\n";
$month = Utility::getInt();
while($month > 12 || $month < 1){
    echo "Enter value 1 to 12\n";
    $month = Utility::getInt();
}
echo "Enter year\n";
$year = Utility::getInt(); 

 function Cal($month,$year)
    {
        $monthArray = array(31,28,31,30,31,30,31,31,30,31,30,31);
        if (Utility::leapYear($year)) {
            $monthArray[1] = 29;
        }
        $priArray = array(array(" s "," m "," t "," w "," th"," f "," s "));
        $firstDay = Utility::printDay(1,$month,$year);
        $j = $firstDay; 
        $date = 1;
        for ($i=1; $i < 7; $i++) { 
            $iArr = array_fill(0,7,"   ");
            for ($j ; $j < 7; $j++) {
                if ($date <= $monthArray[$month-1]) {
                    if ($date < 10) {
                        $iArr[$j] = " ".$date++." ";
                    } else {
                        $iArr[$j] = " ".$date++;
                    }
                }               
            }
            $j = 0;
            array_push($priArray,$iArr);       
        }
        return $priArray;
    }
?>