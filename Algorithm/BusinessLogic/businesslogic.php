<?php
class BusinessLogic{
    /*
    *@description : checking two strings are anagram or not   
    *$parameter : parameters are strings.
    *@Return : Return string are anagram if giving conditions are true else it is not anagram.
    */
    public static function anagram($input1,$input2)
    {
        $String1array=strtolower($input1);
        $String2array=strtolower($input2);
        $String1array=str_split($input1);          //converting string into array
        $String2array=str_split($input2);
        $String1=BusinessLogic::bubbleSort($String1array);
        $String2=BusinessLogic::bubbleSort($String2array);
        if($String1==$String2)
        echo "Given strings are anagram\n";
        else
        echo "Given strings are not a anagram\n";

    }
    
    /*
    *@description : sort the list of words or numbers using bubble sort   
    *$parameter : parameter is list of unsorted words 
    *@return : Return sorted words.
    */
    public static function bubbleSort($String1)
    {
        for($i=0;$i<count($String1)-1;$i++){
            for($j=$i+1;$j<count($String1);$j++){
               if($String1[$i] > $String1[$j]){
                   $temp=$String1[$i];
                   $String1[$i]=$String1[$j];
                   $String1[$j]=$temp;
               } 
            }
        }
        return $String1;
    }
}