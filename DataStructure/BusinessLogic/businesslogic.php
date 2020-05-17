<?php
include "C:/Users/pc/PHP/DataStructure/MainPrograms/node.php";
class BusinessLogic
{
    public function getInt(){
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
public function printDay($d,$m,$y)
{   
    $y0 = $y - (int)((14 - $m) / 12);
    $x = $y0 + (int)($y0/4) - (int)($y0/100) + (int)($y0/400);
    $m0 = $m + 12 * (int)((14 - $m) / 12) - 2;
    $d0 = ($d + $x + (int)((31*$m0) / 12)) % 7;
    return $d0;
}
public function leapYear($yr)
{
     if (strlen((string)$yr)==4) 
     {  
         if ((($yr % 4 == 0) && ($yr % 100 != 0)) || ($yr % 400 == 0)) 
         echo "leap year"."\n";
         else 
             echo "not leap year"."\n";  
     }  
     else
         echo "invalid input"."\n";                              
}

    public $bankBalance = 10000;
    public $firstNode;
    public $lastNode;
   public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }
    public static function readNumbers()
    {
        $file = "C:\Users\pc\PHP\DataStructure/number.txt";
        $open = fopen($file, "r") or die("can't open the file");
        $word = fread($open, filesize($file));
        fclose($open);
        return $word;
    }
    public function insert($data)
    {
        $newNode = new ListNode($data);
        $temp = $this->firstNode;
        if ($temp == null || $temp->data > $data) {
            $newNode->next = $this->firstNode;
            $this->firstNode = &$newNode;
        } else {
            while ($temp->data < $data) {
                if ($temp->data < $data && $temp->next == null || $temp->data < $data && $temp->next->data > $data) {
                    $temp2 = $temp->next;
                    $temp->next = $newNode;
                    $newNode->next = $temp2;
                }
                $temp = $temp->next;
            }
        }
    }

    public function delete($data)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while ($current->data != $data) {
            if ($current->next == NULL)
                return NULL;
            else {
                $previous = $current;
                $current = $current->next;
            }
        }
        if ($current == $this->firstNode) {
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current)
                $this->lastNode = $previous;
            $previous->next = $current->next;
        }
    }
    public function search($data)
    {
        $bool = true;
        $temp = $this->firstNode;
        while ($temp != null) {

            if ($temp->data == $data) {
                BusinessLogic::delete($data);
                echo "deleted $data\n";
                $bool = false;
                break;
            } else {
                $temp = $temp->next;
            }
            if ($bool) {
                BusinessLogic::insert($data);
                $open = fopen("C:\Users\pc\PHP\DataStructure/number.txt", "a") or die("can't open the file");
                fwrite($open, $data . "  ");
                echo "$data added\n";
            }
        }
    }
    public function display()
    {
        $temp = $this->firstNode;
        while ($temp != null) {
            echo $temp->data, " ";
            $temp = $temp->next;
        }
        echo "\n\n";
    }
    /*
    *@description : creating a new node and linking to next Linked List using stack pushing 
     @return : Arithmetic Expression is balanced or not.
    */
    function push($data)
    {
        $newNode = new ListNode($data);
        if ($this->firstNode == null)
            $this->firstNode = &$newNode;
        else {
            $temp = $this->firstNode;
            while ($temp != null) {
                if ($temp->next == null) {
                    $temp->next = &$newNode;
                    break;
                }
                $temp = $temp->next;
            }
        }
    }

    /*
    *@description : poping the data which is last in the linked list
    *@parameter : parameter is data 
    */
    function pop($data)
    {
        if (BusinessLogic::isEmpty() == false) {
            $temp = $this->firstNode;
            $temp2 = $temp;
            if ($temp->next == null) {
                $this->firstNode = null;
            } else {
                while ($temp->next != null) {
                    $temp2 = $temp;
                    $temp = $temp->next;
                }
                if ($temp->data == '(' && $data == ')') {
                    $temp2->next = null;
                }
            }
            return true;
        } else return false;
    }
    /*
    *@description : displays the peek of the data in stack 
    */
    public function peek()
    {
        if ($this->firstNode == null) {
            return false;
        } else {
            $temp = $this->firstNode;
            //echo  $temp->data;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            echo "peek data", $temp->data, "\n";
            return true;
        }
    }

    /*
    *@description : checks the stack is empty oir not
    *@return : returns the boolean 
    */
    function isEmpty()
    {
        if ($this->firstNode == null)
            return true;
        else return false;
    }

// bankcashcounter

    public function enqueue($name)
    {
        $newNode = new ListNode($name);
        if ($this->firstNode == NULL)
            $this->firstNode =&$newNode;
        else {
            $temp = $this->firstNode;
            while ($temp != NULL) {
                if ($temp->next ==NULL) {
                    $temp->next = &$newNode;
                    break;
                }
                $temp =$temp->next;
            }
        }
    }
    public function currentUser()
    {
        $temp = $this->firstNode;
        echo $temp->data, "\n";
    }
     public function dequeue()
    {    
        $this->firstNode = $this->firstNode->next;
    }
     public function bankBalance($option, $amount)
    {
        if ($option == 1)
            $this->bankBalance += $amount;
        else
            $this->bankBalance -= $amount;
    }
    public function show()
    {
        $temp = $this->firstNode;
        while ($temp != NULL) {
            echo "$temp->data", " ";
            $temp = $temp->next;
        }
        echo "\n\n";
    }

    //palindromeChecker
    function addrear($data)
    {
        $newNode = new ListNode($data); 
        if ($this->isEmpty()) {
            $this->lastNode = $newNode;
        } else {
            $this->firstNode->prev = $newNode;
        }
        $newNode->next = $this->firstNode;
        $this->firstNode = $newNode;
    }
    public function displayForward()
    {
        $temp = $this->firstNode;
        if ($temp == null) {
            echo "underflow \n";
        }
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->next;
        }
    }
    public function displayReverse()
    {
        $temp = $this->lastNode;
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->prev;
        }
    }
    public function removeRear()
    {
        $temp = $this->lastNode;
        if ($this->firstNode == $this->lastNode) {
            $this->firstNode = null;
        } else {
            $this->lastNode->prev->next = null;
        }
        $val = $this->lastNode->data;
        $this->lastNode = $this->lastNode->prev;
        $temp->prev = null;
        return $val;
    } 
    public function dequeuecal()
    {
        if (!$this->isEmpty()) {
            $value = $this->firstNode->data;
            $this->firstNode = $this->firstNode->next;
        } else {
            echo "underflow\n";
        }
        if ($this->firstNode == null) {
            $lastNode = null;
        }
        return $value;
    }
    
}
