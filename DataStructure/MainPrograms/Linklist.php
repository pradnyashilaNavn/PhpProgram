<?php
class Node
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}
class LinkedList
{
    public $firstNode;
    public function add($data)
    {
        $newNode=new Node($data);
        $temp=$this->firstNode;
        if($temp == null || $temp->data >= $data ){
            $newNode->next=$this->firstNode;
            $this->firstNode=&$newNode;
        }
        else{
            while($temp != null){
                if( $temp->data <= $data && $temp->next ==null || $temp->data <= $data && $temp->next->data > $data){
                    $temp2=$temp;
                    $temp2=$temp->next;
                    $temp->next=$newNode;
                    $newNode->next=$temp2;
                }
                $temp=$temp->next;
            }
        }
    }

    public function isEmpty()
    {
        return $this->firstNode == null;
    } 
    public function delete($data)
    {
        $temp=$this->firstNode;
        if($temp->data==$data){
            $temp=$temp->next;
        }
        else
        while($temp != null){
            if($temp->next->data==$data){
                $temp->next=$temp->next->next;
            }
            $temp=$temp->next;
        }
    }
    function display()
    {
        $temp=$this->firstNode;
        if($temp==null)
        echo "NULL";
        else{
            while($temp != null){
                echo $temp->data," ";
                $temp=$temp->next;
            }
        }
    }
    function search($data)
    {
        $bool=true;
        $temp=$this->firstNode;
        while($temp != null){
            if($temp->data == $data){
                LinkedList::delete($data);
                echo "deleted $data\n";
                $bool=false;
                break;
            }
            else
                $temp=$temp->next;
        }
        if($bool){
            $open=fopen("C:/Users/pc/PHP/DataStructure/files/hashNumber.txt","a") or die("can't open the file");
            fwrite($open," ".$data);
            echo "$data added\n";
        }
    }
}
?>