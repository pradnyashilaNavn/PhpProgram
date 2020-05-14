<?php
class BusinessLogic
{
    /*
    *@Description : Checking leap year or not
    *$Parameter : Reads the input year from user 
    *@Return : getting years is  leap year or not.
    */
    static function leapYear($yr)
    {
        if (strlen((string) $yr) == 4) {
            if ((($yr % 4 == 0) && ($yr % 100 != 0)) || ($yr % 400 == 0))
                echo "leap year" . "\n";
            else
                echo "not leap year" . "\n";
        } else {
            echo "invalid input" . "\n";
        }
    }
    /*
    *@description : Finding sum of three numbers are zeros
    *$parameter : Reads the input integers  from user
    *@return : sum of three equals to zero.
    */
    public function sumofThree($arr, $number)
    {
        $count = 0;
        for ($i = 0; $i < $number - 2; $i++) {
            for ($j = $i + 1; $j <  $number - 1; $j++) {
                for ($k = $j + 1; $k < $number; $k++) {
                    if ($arr[$i] + $arr[$j] + $arr[$k] == 0) {
                        echo $arr[$i] . " + " . $arr[$j] . " + " . $arr[$k] . " = 0" . "\n";
                        $count++;
                    }
                }
            }
        }
        echo "total sum " . $count;
    }

   }
