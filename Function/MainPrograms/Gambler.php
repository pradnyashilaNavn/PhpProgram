
<?php
/********************************************************************
* @Execution : Functional/MainPrograms $ php gambler.php
* @Description :Simulates a gambler who start with $stake and place fair $1 bets until
  he/she goes broke (i.e. has no money) or reach $goal. Keeps track of the number of
  times he/she wins and the number of bets he/she makes. Run the experiment N
  times, averages the results, and prints them out.
* @Purpose : Print Number of Wins and Percentage of Win and Loss.
* @Function : Utility/utility
* @File : gambler.php
* @Author : Pradnyashila Jadhav 
* <pradnyajadhav995@gmail.com>
* @version : 7.2.14
* @Since : 06-05-2020
*********************************************************************/
include "C:\Users\pc\PHP\Function\Utility\utility.php"; 
echo "Enter stake value: "."\n";
$stake= Utility::getInt();
echo "\n"."Enter goal value: "."\n";
$goal= Utility::getInt();
while ($goal < $stake) {
echo "Enter goal value bigger then stack\n";
$goal= Utility::getInt();
}
echo "\n"."enter number of times"."\n";
$number = Utility::getInt();
Utility::gambler($stake,$goal,$number);
?>