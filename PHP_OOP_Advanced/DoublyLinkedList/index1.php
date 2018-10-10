<?php

    Class Node
    {
        public $prev, $value, $next;

        public function __construct($value)
        {
            $this->prev = null;
            $this->value = $value;
            $this->next = null;
        }
    }

    Class DoublyLinkedList
    {
        public $head, $tail;
        
        public function __construct()
        {
            $this->head = null;
            $this->tail = null;
        }

        public function add($value)
        {  
          $current =  $this->head;
          $current->test(123);  
            echo $this->test();

                                
            $this->head = $current; 
        }

        public function test($value = null)
        {  
           return 123423;       
            
        }



        public function find($pos)
        {
            $current = $this->head;
            while($current != null)
            {
                if($current->value == $pos)
                {
                    return true;
                }
                $current = $current->next;
            }
            $current = $this->tail;
            while($current != null)
            {
                if($current->value == $pos)
                {
                    return true;
                }
                $current = $current->next;
            }
            return false;
            return $this;
        }


        public function findAllNodesWithValueOf($value)
        {
           $current = $this->head;
           while($current)
           {
               if($current->value == $value)
               {
                   $this->head->value = $current->value;
               }  
               $current=$current->next;
           }
           $current = $this->tail;
           if($current->value == $value)
           {
            var_dump($current->value);
           }
        
        }

        public function removeAllNodesWithValueOf($value)
        {         
           
        }
      
        public function removeNode($pos)
        {
            if($this->head->value == $pos)
            {
                $this->head = $this->head->next;
            }
            else
            {
                $current = $this->head;
                while($current->next->value != $pos && $current->next)
                {                 
                    $current = $current->next;               
                }
                $temp = $current->next->next;
                $current->next = $temp;
                
                if($this->tail->value == $pos)
                {
                    $current = $this->head;              
                    while($current)
                    {
                        $this->tail->value= $current->value;
                        $current = $current->next;
                    }
                }
            }               
            return $this; 
        }
    }

    // $testNode = new Node(1); 
    // var_dump($testNode);

    $testDoubly = new DoublyLinkedList();
    $testDoubly->add(1);
    $testDoubly->add(2);
    $testDoubly->add(3);
    $testDoubly->add(4);
 
   
    // $testDoubly->removeNode(5);
    // $testDoubly->removeNode(5);
   
   
    // var_dump($testDoubly->find(5));
    // $testDoubly->findAllNodesWithValueOf(5);
    // $testDoubly->removeAllNodesWithValueOf(5);
    var_dump($testDoubly);
?>