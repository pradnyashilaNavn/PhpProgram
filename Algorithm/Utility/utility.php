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
}