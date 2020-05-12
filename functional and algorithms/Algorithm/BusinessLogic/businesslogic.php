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
       /*
    *@description : finding the day of the week   
    *$parameter : reads the day from the dayOfWeek($year,$month,$date) function 
    @Return : return days. 
    */
    public static function day($day)
    {
        switch($day)
        {
            case 1: echo "Sunday\n";
                break;
            case 2: echo "Monday\n";
                break;
            case 3: echo "Tuesday\n";
                break;
            case 4: echo "Wendsday\n";
                break;
            case 5: echo "Thursday\n";
                break;
            case 6: echo "Friday\n";
                break;
            case 0: echo "Saterday\n";
                break;
        }
    }
    /*
    *@description : this function purpose is only for integer values   
    */
    public static function intArray()
    {
        echo "enter the int array size: ";
        $intSize=readline();
        $intArray=array();
        for($i=0;$i<$intSize;$i++)
        $intArray[$i]=readline();
        return $intArray;
    }
    /*
    *@description : this function purpose is only for string values   
    */
    public static function stringArray()
    {
        echo "enter the size of string array: ";
        $stringSize=readline();
        $stringArray=array();
        for($i=0;$i<$stringSize;$i++)
        $stringArray[$i]=readline();
    return $stringArray;
    }
}
}