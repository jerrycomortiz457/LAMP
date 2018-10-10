<?php
    Class Node
    {
        public function __construct($val)
        {
         $this->value = $val;
         $this->next = null;
        }
    }

    Class SinglyLinkedList
    {
        public function __construct()
        {
         $this->head = null;
         $this->tail = null;
        }
       }

    $list = new SinglyLinkedList();
    $list->head = new Node('Alice');
    $list->head->next = new Node('Chad');
    $list->head->next->next = new Node('Debra');
    var_dump($list);
?>