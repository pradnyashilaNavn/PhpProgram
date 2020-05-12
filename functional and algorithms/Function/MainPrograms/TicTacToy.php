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
include "C:/Users/pc/PHP/functional and algorithms/Function/BusinessLogic/businesslogic.php";
$game = array(array(0, 0, 0), array(0, 0, 0), array(0, 0, 0));
echo "welcome to 2 player TicTacToe game". "\n";
echo "entre value of x and y between 1 and 3" . "\n";
for ($i = 0; $i <= 8; $i++) {
    if ($i % 2 == 0) { 
        while (true) {
            $game = BusinessLogic::userInput($game);
            if ($game != false)
                break;
        }
    }
    else {
        while (true) {
            $game = BusinessLogic::computerInput($game);
            if ($game != false)
                break;
        }
    }
    for ($j = 0; $j < 3; $j++) {
        for ($j2 = 0; $j2 < 3; $j2++) {
            echo $game[$j][$j2] . " ";
        }
        echo "\n";
    }
    echo "\n";
    if (BusinessLogic::checkUserWinner($game)) {
        echo "User win " . "\n";
        break;
    } else if (BusinessLogic::checkcomputerWinner($game)) {
        echo "Computer win" . "\n";
        break;
    } else if ($i == 9)
        echo " Game Draw" . "\n";
}
