<?php
include "C:\Users\pc\PHP\DataStructure\MainPrograms/node.php";
class BusinessLogic
{
    public $firstNode;
    public $lastNode;
    function __construct()
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
}
