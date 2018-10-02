<?php

    Class Node
    {
        public function __construct($value)
        {
            $this->value = $value;
            $this->next = null;
        }
    }

    Class SinglyLinkedList
    {
        public function __construct()
        {
            $this->head = null;
        }
        public function add($val)
        {
            if($this->head == null)
            {
                $this->head = new Node($val);
            }
        
        else
        {
            $current = $this->head;
            while($current->next)
            {
                $current = $current->next;
            }
           
            $current->next = new Node($val);
        }
    }

    public function remove($val)
    {
        if($this->head->value == $val)
        {
            $this->head = $this->head->next;
        }
        else
        {
            $current = $this->head;
            while($current->next->value != $val && $current->next)
            {
                $current = $current->next;
            }

            $temp = $current->next->next;
            $current->next = $temp;

        }
    }
}

    $newList = new SinglyLinkedList();
    $newList->head = new Node(1);
    $newList->head->next = new Node(2);
    $newList->head->next->next = new Node(3);
    $newList->head->next->next->next = new Node(4);
    $newList->head->next->next->next->next = new Node(5);
    var_dump($newList);

    $newList2 = new SinglyLinkedList();
    $newList2->add(1);
    $newList2->add(2);
    $newList2->add(3);
    $newList2->add(4);
    $newList2->add(5);

    var_dump($newList2);

    $newList->remove(1);
    $newList->remove(2);
    $newList->remove(3);
    var_dump($newList);

?>