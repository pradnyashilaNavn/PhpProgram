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

}
