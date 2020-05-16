<?php
/********************************************************************
 * @Execution : Functional/MainPrograms $ php tictactoy.php
 * @description :Write a Program to play a Cross Game or TicTacToe Game. Player 1 is the Computer and the Player 2 
  is the user. Player 1 take Random Cell that is the Column and Row.
 * @Purpose : Print the Col and the Cell after every step.
 * @Function : Utility/utility
 * @File : tictactoy.php
 * @Author : Pradnyashila Jadhav 
 * <pradnyajadhav995@gmail.com>
 * @version : 7.2.14cd
 * @Since : 10-05-2020
 *********************************************************************/
class TicTacToe
{
    public static $game = array(array(0,0,0),array(0,0,0),array(0,0,0));
    public static $system = 3;
    static function checkWinner($array)
    {
        $boolean = false;
        if
       ( $array[0][0] == 1 && $array[0][1] == 1 && $array[0][2] == 1 || $array[0][1] == 1 && $array[1][1] == 1 && $array[2][1] == 1
        || $array[1][0] == 1 && $array[1][1] == 1 && $array[1][2] == 1|| $array[0][2] == 1 && $array[1][2] == 1 && $array[2][2] == 1
        || $array[2][0] == 1 && $array[2][1] == 1 && $array[2][2] == 1 || $array[0][0] == 1 && $array[1][1] == 1 && $array[2][2] == 1
        || $array[0][0] == 1 && $array[1][0] == 1 && $array[2][0] == 1 || $array[0][2] == 1 && $array[1][1] == 1 && $array[2][0] == 1
        ///
        || $array[0][0] == 3 && $array[0][1] == 3 && $array[0][2] == 3 || $array[0][1] == 3 && $array[1][1] == 3 && $array[2][1] == 3
        || $array[1][0] == 3 && $array[1][1] == 3 && $array[1][2] == 3|| $array[0][2] == 3 && $array[1][2] == 3 && $array[2][2] == 3
        || $array[2][0] == 3 && $array[2][1] == 3 && $array[2][2] == 3 || $array[0][0] == 3 && $array[1][1] == 3 && $array[2][2] == 3
        || $array[0][0] == 3 && $array[1][0] == 3 && $array[2][0] == 3 || $array[0][2] == 3 && $array[1][1] == 3 && $array[2][0] == 3)
        $boolean = true;
        return $boolean;
    }
    static function userInput()
    { 
        echo "enter row"."\n";
        $x = readline();
        echo "enter col"."\n";
        $y = readline();
        if ($x >0 && $x < 4 && $y >0 && $y < 4 && TicTacToe::$game[$x - 1][$y - 1] != 0) 
         return false;
        TicTacToe::$game[$x - 1][$y - 1] = 1;
         return true;
    }
    static function systemInput()
    {    
        $x = random_int(0,2);
        $y = random_int(0,2);  
    if(TicTacToe::$game[$x][$y] != 0)
        return false;
    TicTacToe::$game[$x][$y] = 3;
    return true;
    }
    static function mainFunction()
    { 
        //echo "welcome to 2 player TicTacToe game". "\n";
        echo "entre value of row  and col between 1 and 3" . "\n";
        //echo "entre value of x and y between 1 and 3"."\n";
        for($i = 1; $i <= 9; $i++)
        {
            if($i % 2 == 0)
            {
                 while(!TicTacToe::userInput())
                    echo "position already occupied"."\n";
             }
            else
            {
              while(!TicTacToe::systemInput())
                {
                }
            }
            for ($j = 0; $j < 3; $j++) {
                for ($k = 0;$k < 3; $k++) {
                    echo TicTacToe::$game[$j][$k]." ";
                }
                echo "\n";
            }
            echo "\n";
            if(TicTacToe::checkWinner(TicTacToe::$game, 1)) 
            {
                echo "User WIN "."\n";
                break;
            }
            if (TicTacToe::checkWinner(TicTacToe::$game, 3)) {
                echo "Computer Win"."\n";
                break;
            }
            if($i == 9)
                echo "Game Draw"."\n";
        }
    }
}
TicTacToe::mainFunction();
?>