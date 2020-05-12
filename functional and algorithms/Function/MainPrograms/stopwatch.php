<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php stopwatch.php
* @description :Write a Stopwatch Program for measuring the time that elapses between
    the start and end clicks.
* @Purpose : Measure the elapsed time.
* @Function : Utility/utility
* @File : stopwatch.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:/Users/pc/PHP/functional and algorithms/Function/Utility/utility.php"; 
function stopWatch()
    {
        $startTme = 0; $stopTime = 0;
        echo "press 1 to start watch"."\n"."press 2 to stop watch"."\n";
        $start =Utility::getInt();
        if($start == 1)
            $startTme = time();
        $stop =Utility::getInt();
        if($stop == 2)
            $stopTime = time();
        echo "elapsed time is: ". ($stopTime - $startTme)." sec";
    }
    stopWatch();
?>