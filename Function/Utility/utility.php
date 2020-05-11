<?php
/*
*Purpose: Utility is a helper class which hold funtion.
*@Author : Pradnyashila Jadhav 
*<pradnyajadhav995@gmail.com>
*PHP Version 7.2.14
*@Since : 06-05-2020 
*/

class Utility{
        /**
        * function getInt is method which take user input and 
        * check the input is numeric or not
        * @return $n int type value
        */
    public static function getInt(){
        try{
            fscanf(STDIN, "%s\n", $n);
            //The is_numeric() function checks whether a variable is a number or a numeric string.
            if(!is_numeric($n)){
                throw new Exception("Enter numeric value only");
            }else{
                return $n;
            }
        }catch (Exception $e){
            echo "Exception :". $e->getMessage(). "\n" . "on line" . $e->getLine(). "\n";
            }
    }
    /*
    *@Description : Generating distinct random numbers
    *$Parameter : Read the input number from user
    *@Return : return the random numbers.
    */
    public function couponNumber($number)
    {    
        $arr = array();
        $count = 0;
        $index = 0;
        while(sizeof($arr) != $number)
        {
            $count++;
            $num = random_int(10,($number+100));
            if(!array_search($num,$arr))
                $arr[$index++] = ($num);
        }
        echo "count ".$count."\n";
        foreach ($arr as $num) {//print the result
            echo $num."\n";
        }
    }
    /*
    *@Description : Finding distance from the origin.
    *$Parameter : Read the input x and y from user.
    *@Return : return distance values using following formulas
    */
    static function distance($x,$y)
    {
        return sqrt(($x*$x) +($y*$y));
    }
    /*
    *@Description : Finding Percentage of Head vs Tails.
    *$Parameter : Reads the integer from user
    *@Return :  Percentage of Head vs Tails.
    */
    static function flipCoin($number)
    {    
         $head=0;
         $tail=0;
         for($i=0;$i<$number;$i++)
         {
             if (random_int(0,1)==1) 
                 $tail++;
             else 
                 $head++;
         }
         echo ($head/$number)*100;
         echo "% Heads"."\n";
         echo ($tail/$number)*100;
         echo "% Tails"."\n";
    }
     /*
    *@Description : Find a number of Wins and Percentage of Win and Loss. 
    *$Parameter : Reads the inputs integer number,goal,stake from user.
    *@Return : Percentage of win and average number of bets.
    */
    static function gambler($stake,$goal,$n)
    {    
        $win = 0;
        $bet = 0;
        for($i = 0;$i < $n; $i++)
        {
            $cash = $stake;
            while($cash != $goal && $cash != 0)
            {
                $bet++;
                if ((random_int(0,1))==1) 
                    $cash++;
                else 
                    $cash--;        
             }
             if($cash == $goal)
                $win++;
        }
        echo "no of win ".$win."\n";
        echo "bet ".$bet."\n";
        echo "Percentage of win: ".(($win/$n)*100)."%"."\n";
        echo "Average number of bet: ".((($n-$win)/$n)*100)."%"."\n";
    }
}
