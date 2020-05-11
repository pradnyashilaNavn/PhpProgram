<?php
class BusinessLogic{
    /*
    *@Description : Checking leap year or not
    *$Parameter : Reads the input year from user 
    *@Return : getting years is  leap year or not.
    */
    static function leapYear($yr)
    {
         if (strlen((string)$yr)==4) 
         {     
             if ((($yr % 4 == 0) && ($yr % 100 != 0)) || ($yr % 400 == 0)) 
             echo "leap year"."\n";
             else 
                 echo "not leap year"."\n"; 
         }  
         else
         {
             echo "invalid input"."\n";
         }                                
    }
}