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
include "C:/Users/pc/PHP/functional and algorithms/Function/Utility/utility.php"; 
    class TicTacToe{
        /**
         * tic tak toe board where by default all value are zero and by default
         * computer always put 2 and use will put 1 
         */
        public static $game = array(array(0,0,0),array(0,0,0),array(0,0,0));
        public static $computer = 2;
        /**
         * function checkUserWinner is to check the that any wining condition of user is true of not
         * @param = $arr array in which we want to check condition
         * @return = boolean true or false 
         */
        public function checkUserWinner($arr)
        {
            //boolean value by default fale
            if ($arr[0][0] == 1 && $arr[0][1] == 1 && $arr[0][2] == 1 || $arr[1][0] == 1 && $arr[1][1] == 1 && $arr[1][2] == 1
            || $arr[2][0] == 1 && $arr[2][1] == 1 && $arr[2][2] == 1 || $arr[0][0] == 1 && $arr[1][0] == 1 && $arr[2][0] == 1
            ||$arr[0][1] == 1 && $arr[1][1] == 1 && $arr[2][1] == 1 || $arr[0][2] == 1 && $arr[1][2] == 1 && $arr[2][2] == 1
            || $arr[0][0] == 1 && $arr[1][1] == 1 && $arr[2][2] == 1  ||$arr[0][2] == 1 && $arr[1][1] == 1 && $arr[2][0] == 1 ) 
                return true;
            
        }
        public function checkcomputerWinner($arr)
        {            
            $b = false;
            if ($arr[0][0] == 2 && $arr[0][1] == 2 && $arr[0][2] == 2 ||$arr[1][0] == 2 && $arr[1][1] == 2 && $arr[1][2] == 2
            || $arr[2][0] == 2 && $arr[2][1] == 2 && $arr[2][2] == 2 || $arr[0][0] == 2 && $arr[1][0] == 2 && $arr[2][0] == 2 
            || $arr[0][1] == 2 && $arr[1][1] == 2 && $arr[2][1] == 2 || $arr[0][2] == 2 && $arr[1][2] == 2 && $arr[2][2] == 2 
            || $arr[0][0] == 2 && $arr[1][1] == 2 && $arr[2][2] == 2 || $arr[0][2] == 2 && $arr[1][1] == 2 && $arr[2][0] == 2) 
            return true;
        }

        /**
         * function useInput to take value from user
         * @return = boolean value 
         */
        static function userInput()
        {
            //input x and y position 
            echo "turn x"."\n";
            $x = Utility::getInt();
            echo "turn y"."\n";
            $y = Utility::getInt();
            //check user input is valid or not
            if ($x < 1 || $x > 3 || $y < 1 || $y > 3 || TicTacToe::$game[$y - 1][$y - 1] != 0) {
                return false;
            }
            //is user input is valid then it will save in the 2D array
            TicTacToe::$game[$x - 1][$y - 1] = 1;
            return true;
        }
        /**
         * function useInput to take value from computer 
         * @return = boolean value 
         */
        static function computerInput()
        {
            //random number for the posotion of the computer
            $x = random_int(0,2);
            $y = random_int(0,2);
            //check the position is true of false
            if(TicTacToe::$game[$x][$y] != 0)
            {
                return false;
            }
            // is value is true then is will store in 2D array
            TicTacToe::$game[$x][$y] = TicTacToe::$computer;
            return true;
        }
        /**
         * main function to call all the fuction
         */
        static function mainFunction()
        {
            echo "entre value of x and y between 1 and 3"."\n";
            //for loop to fill the positio 
            for($i = 1; $i <= 9; $i++)
            {
                //if conditon for one by one chance or user and computer 
                if($i % 2 == 0)
                {
                    //to take the value until it get valid value 
                    while(!TicTacToe::userInput())
                    {
                        echo "invalid location"."\n";
                    }
                }
                //else for computer turn
                else
                {
                    //while number to check the computer postion is right or not
                    while(!TicTacToe::computerInput())
                    {
                       
                    }      
                }
                //for loop to print the board every time
                for ($j = 0; $j < 3; $j++) {                  
                    for ($j2 = 0;$j2 < 3; $j2++) {
                        echo TicTacToe::$game[$j][$j2]." ";
                    }
                    echo "\n";
                }
                echo "\n";
                if(TicTacToe::checkUserWinner(TicTacToe::$game))
                {
                    echo "User win "."\n";
                    break;
                }
               else if (TicTacToe::checkcomputerWinner(TicTacToe::$game)) {
                    echo "Computer win"."\n";
                    break;
                }
                else if ($i == 9)
                    echo " Game Draw"."\n";
            }
        }
    }
    TicTacToe::mainFunction();
?>
