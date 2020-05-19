<?php
class Node
{   
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
}

class Stack{
    public $firstNode;
    public $lastNode;

   public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }
    public function push($data)
    {
         echo $data,"\t";
        $newNode = new Node($data);
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

    public function pop($data)
    {
       
        $temp=$this->firstNode;
        if($this->firstNode == null )
        {
            return;
        }
        else if($temp->next == null){
            $this->firstNode=null;
        }
        else{    
            while($temp->next != null){
                $temp2=$temp;
                $temp=$temp->next;
            }           
        }   
        }
    public function peek()
     {
         if (!$this->isEmpty()) {
             return $this->firstNode->data;
         } else {
             echo "stack is empty\n";
        }
 }

   public function isEmpty()
    {
        if ($this->firstNode == null)
            return true;
        else return false;
    }
   
 function show()
    {
        $temp = $this->firstNode;
        while ($temp != null) {
            echo $temp->data, " ";
            $temp = $temp->next;
        }
        echo "\n\n";
    }
}