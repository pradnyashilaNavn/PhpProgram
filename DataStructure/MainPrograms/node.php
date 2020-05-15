<?php
class ListNode
{   
    public $data;
    public $next;
    public $prev;
   public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    
}
?>
