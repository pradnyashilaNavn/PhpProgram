<?php 
include "C:\Users\pc\PHP\Algorithm\BusinessLogic\businesslogic.php";
class Utility{
    //USER INPUT METHODS
    public static function numericInput()
    {
        try{
            fscanf(STDIN, "%s\n", $number);
            //The FILTER_VALIDATE_INT filter is used to validate value as integer.
            if(filter_var($number,FILTER_VALIDATE_INT)) {
                return $number;
            }else{

                throw new Exception("Enter integer number only");
            }

        }catch (Exception $e){
            echo "Exception : " . $e->getMessage(). "\n". "on line" . $e->getLine() . "\n";
        }
    }

    public static function stringInput(){
        try{
            fscanf(STDIN, "%s\n", $string);
            //The is_numeric() function checks whether a variable is a number or a numeric string.
            if(is_numeric($string)){
                throw new Exception("Enter string only");
            }else{
                return $string;
            }
        }catch (Exception $e){
            echo "Exception :". $e->getMessage(). "\n" . "on line" . $e->getLine(). "\n";
            }
    }
    /*
    *@Description : Check two strings are anagram or not
    *$Darameter : reads the inputs String from user
    *$Return : returns {boolean}  
    */
    public static function Anagram($input1,$input2)
    {
        if(strlen($input1)==strlen($input2))
            BusinessLogic::anagram($input1,$input2);
        else 
            echo "Giving strings are not anagram";
    }
    /*
    *@description : prime numbers between the range
    *$parameter : reads the input range from user
    *$return : array which consists of prime numbers
    */
    public static function primeRange($range)
    {
        $array=array();
        $count=0;
        for($i=2;$i<=$range;$i++){
            $c=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0)

                    $c++;
            }
            if($c==2){
              $array[$count]=$i;
              $count++;
            }
        }
        // echo "\n\nfrom 0 to 1000 there are : $count\n";
        return $array;
    }
    
    /*
    *@description : primeAnagram numbers
    *$parameter : reads the input array from the prime range 
    *$return : returns the prime anagram numbers  
    */
    public static function primeAnagram($array)
    {
        $c=0;
        $primePal=array();
        for($i=0;$i<count($array);$i++){
            $temp=$array[$i];
            $finValue=0;
            while(floor($temp !=0)){
                $t=floor($temp%10);
                $temp=floor($temp/10);
                $finValue=$finValue*10+$t;
            }
            for($j=0;$j<count($array);$j++){
                if( $finValue==$array[$j] && $finValue>11 ){
                    $primePal[$c]=$array[$j];
                    echo $array[$j]," ",$array[$i],"\n";
                    $c++;
                }
            }
        }
        return $primePal;
    }

    /*
    *@description : prime palindrome numbers
    *$parameter : reads the input prime number array 
    *$return : returns the prime palindrome numbers  
    */
    public static function primePalindrome($array)
    {
        $rev = 0;
        for ($i = 0; $i <count($array); $i++){
            $n = $array[$i];
            while (floor($n)){
                $b = $n%10;
                $rev = $rev*10 + $b;
                $n /= 10;
            }
            if ($rev == $array[$i])
                echo $array[$i] . " ";
            $rev=0;
        }
    }
     /*
    *@description : just for displaying array    
    *$parameter :passing an array  
    */
    public static function dispayArray($array)
    {
        for($i=0;$i<count($array);$i++)
        echo $array[$i]," ";
        echo "\n";
    }
    /*
    *@description : Sorting the set of words using BubbleSort 
    *$parameter : Reads the input words of an array from the user  
    *@Return : Return sorted words.
    */
    public static function bubbleSort($array)
    {
        for($i=0;$i<count($array)-1;$i++){
           for($j=$i+1;$j<count($array);$j++){
                if ($array[$i] > $array[$j]){ 
                 $t = $array[$i]; 
                 $array[$i] = $array[$j]; 
                 $array[$j] = $t; 
                } 
            }
        }
        for($i=0;$i<count($array);$i++){
            echo $array[$i]," ";
        }
    }
}