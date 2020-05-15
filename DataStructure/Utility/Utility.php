<?php
include "C:\Users\pc\PHP\DataStructure\MainPrograms/node.php";
class Utility
{
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
    function printDay($d,$m,$y)
    {
        
        $y0 = $y - (int)((14 - $m) / 12);
        $x = $y0 + (int)($y0/4) - (int)($y0/100) + (int)($y0/400);
        $m0 = $m + 12 * (int)((14 - $m) / 12) - 2;
        $d0 = ($d + $x + (int)((31*$m0) / 12)) % 7;
        return $d0;
    }
    static function leapYear($yr)
    {
         if (strlen((string)$yr)==4) 
         {
             
             if ((($yr % 4 == 0) && ($yr % 100 != 0)) || ($yr % 400 == 0)) 
             {
             echo "leap year"."\n";
             } 
             else 
             {
                 echo "not leap year"."\n";
             }   
         }  
         else
         {
             echo "invalid input"."\n";
         }                                
    }




    public $firstNode;
    public $lastNode;
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }
    public static function readWords()
    {
        $file = "C:/Users/pc/PHP/DataStructure/files.txt";
        $open = fopen($file, "r") or die("can't open the file");
        $word = fread($open, filesize($file));
        fclose($open);
        return $word;
    }

    public function insert($data)
    {
        $newNode = new ListNode($data);
        $newNode->next = $this->firstNode;
        $this->firstNode = &$newNode;
    }
    public function delete($data)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while ($current->data != $data) {
            if ($current->next == null) {
                return null;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }
        if ($current == $this->firstNode) {
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }

            $previous->next = $current->next;
        }
    }
    public function search($data)
    {
        $bool = true;
        $ta = $this->firstNode;
        while ($ta != null) {

            if ($ta->data == $data) {
                Utility::delete($data);
                echo "deleted $data\n";
                $bool = false;
                break;
            } else {
                $ta = $ta->next;
            }

        }
        if ($bool) {
            Utility::insert($data);
            $open = fopen("C:/Users/pc/PHP/DataStructure/files.txt", "a") or die("can't open the file");
            fwrite($open, $data . "  ");
            echo "$data added\n";
        }
    }
    public function display()
    {
        $ta = $this->firstNode;
        while ($ta != null) {
            echo $ta->data, " ";
            $ta = $ta->next;
        }
        echo "\n\n";
    }
    }


