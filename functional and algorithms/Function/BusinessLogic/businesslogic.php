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

    public function checkUserWinner($arr)
    {
        if (
            $arr[0][0] == 1 && $arr[0][1] == 1 && $arr[0][2] == 1 || $arr[1][0] == 1 && $arr[1][1] == 1 && $arr[1][2] == 1
            || $arr[2][0] == 1 && $arr[2][1] == 1 && $arr[2][2] == 1 || $arr[0][0] == 1 && $arr[1][0] == 1 && $arr[2][0] == 1
            || $arr[0][1] == 1 && $arr[1][1] == 1 && $arr[2][1] == 1 || $arr[0][2] == 1 && $arr[1][2] == 1 && $arr[2][2] == 1
            || $arr[0][0] == 1 && $arr[1][1] == 1 && $arr[2][2] == 1  || $arr[0][2] == 1 && $arr[1][1] == 1 && $arr[2][0] == 1
        )
            return true;
    }
    public function checkcomputerWinner($arr)
    {
        if (
            $arr[0][0] == 3 && $arr[0][1] == 3 && $arr[0][2] == 3 || $arr[1][0] == 3 && $arr[1][1] == 3 && $arr[1][2] == 3     
            || $arr[2][0] == 3 && $arr[2][1] == 3 && $arr[2][2] == 3 || $arr[0][0] == 3 && $arr[1][0] == 3 && $arr[2][0] == 3
            || $arr[0][1] == 3 && $arr[1][1] == 3 && $arr[2][1] == 3 || $arr[0][2] == 3 && $arr[1][2] == 3 && $arr[2][2] == 3
            || $arr[0][0] == 3 && $arr[1][1] == 3 && $arr[2][2] == 3 || $arr[0][2] == 3 && $arr[1][1] == 3 && $arr[2][0] == 3
        )
            return true;
    }

    public function userInput($game)
    {
        //input x and y position 
        echo "turn x" . "\n";
        $x = Utility::getInt();
        echo "turn y" . "\n";
        $y = Utility::getInt();
        //check user input is valid or not
            if ($x >0 && $x < 4 && $y >0 && $y < 4 && $game[$x - 1][$y - 1] != 0) {

            echo "invalid positions pls enter again \n";
            return false;
        }
        //is user input is valid then it will save in the 2D array
        else {
            $game[$x - 1][$y - 1] = 1;
            return $game;
        }
    }
    public function computerInput($game)
    {
        //random number for the posotion of the computer
        $x = random_int(0, 2);
        $y = random_int(0, 2);
        if ($game[$x][$y] != 0) {
            return false;
        } else {
            $game[$x][$y] = 3;
            return $game;
        }
    }
}
