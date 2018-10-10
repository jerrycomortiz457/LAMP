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
            return $this;
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
            return $this;        
        }

        public function find($val)
        {

            $current = $this->head;
            while($current != null)
            {
                if($current->value == $val)
                {
                    return true;
                }
                $current = $current->next;
            }
            return false;
            return $this;
        }

        public function printValues()
        {
            $current = $this->head;
            while($current)
            {
                echo $current->value.'<br>';
                $current = $current->next;
            }
            return $this;
        }

        public function insert($valueAfter,$newValue)
        {
            $current = $this->head;
            while($current != null)
            {
                if($current->value == $valueAfter)
                {
                    $temp = $current->next;
                    $current->next = new Node($newValue);
                    $current->next->next = $temp;                                     
                    return true;
                }                                                             
                $current = $current->next;    
            }                                                          
            $current = $this->head;
            while($current->next != null && $current->next)
            {                   
                $current = $current->next;           
            }   
            $current->next = new Node($newValue);   
            return false;
        } 
        
        public function isEmpty()
        {
            $current = $this->head;
            if($current == null)
            {
                return true;
            }
            return false;
        }
       
        public function removeDups()
        {
            $lastNode = $this->head;
            $currNode = $lastNode->next;
            $tempCahe = [];

            while($currNode)
            {
                $val = $currNode->value;
                if(isset($tempCahe[$val]))
                {
                    $currNode = $currNode->next;
                    $lastNode->next = $currNode;
                }
                else
                {
                    $lastNode = $currNode;
                    $currNode = $currNode->next;
                    $tempCahe[$val] = true;
                }
            }
            return $this;
        }

    }

    $test_SLL = new SinglyLinkedList();
    $test_SLL->add(1)->add(5)->add(9)->add(3);

    echo "TEST insert()";
    var_dump($test_SLL->insert(5,6));
    var_dump($test_SLL->insert(6,6));
    var_dump($test_SLL->insert(8,9));
    var_dump($test_SLL->insert(13,7));
    var_dump($test_SLL->insert(9,10));
    var_dump($test_SLL);
    $test_SLL->printValues();
       
    echo "TEST isEmpty()";
    $empty_SLL = new SinglyLinkedList();
    // $empty_SLL->add(1);
    var_dump($empty_SLL->isEmpty());

    echo "TEST removeDups()";
    var_dump($test_SLL->removeDups());
  
    ?>