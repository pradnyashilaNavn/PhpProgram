<?php
include "C:\Users\pc\PHP\DataStructure\MainPrograms/node.php";
class Utility
{
    public $firstNode;
    public $lastNode;
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }
    public static function readWords()
    {
        $file = "C:/Users/pc/PHP/DataStructure/files/files.txt";
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
            $open = fopen("C:/Users/pc/PHP/DataStructure/files/files.txt", "a") or die("can't open the file");
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


