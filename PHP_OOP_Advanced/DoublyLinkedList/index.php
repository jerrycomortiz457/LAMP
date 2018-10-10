<?php
    Class Node
    {
        public $value, $prev, $next;
        public function __construct($value)
        {
            $this->value = $value;
        }
    }

    Class DoublyLinkedList
    {
        public $head, $tail;
        public function __construct()
        {
            $this->head = NULL;
            $this->tail = NULL;
        }

        public function isEmpty()
        {
            $node_count = 0;
            $current = $this->head;
            while($current)
            {
               
                $node_count++;
                $current = $current->next;
            }
            echo  "Node count: {$node_count}<br>";
            if($node_count > 0)
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        public function find($value)
        {
            if($this->head->value == $value)
            {
                return true;
            }
            else
            {
                $current = $this->head;
                while($current)
                {
                    if($current->value == $value)
                    {
                        return true;
                    }
                    $current = $current->next;
                }
                return false;
            }
        }
        public function findByPosition($pos)
        {              
         
            $pos_count = 0;
            $current = $this->head;
            while($pos_count < $pos - 1 && $current)
            {                       
                $pos_count++;          
                $current = $current->next;
            }    
            return $current;   
                        
        }


        public function add($value)
        {
            if ($this->head == null)
            {
                $this->head  = new Node($value); 
                $this->tail = $this->head;          
            }
            else
            {
                $current = $this->head;
                while($current->next)
                {
                    $current = $current->next;
                }
              
                $current->next = new Node($value);
                $current->next->prev = $current;   
                $this->tail = $current->next;
            }                  
            return $this;
        }

        public function findAllNodesWithValueOf($value)
        {
            $current = $this->head;
            $find_count = 0;
            $max_count = 0;
            while($current)
            {
                $max_count++;
                if($current->value == $value)
                {
                    $find_count++; 
                }         
                $current = $current->next;
            }
            echo "Total entry found: {$find_count} <br>";
            echo "Total entry count: {$max_count} <br>";
            if($find_count == $max_count)
            {
                return true;
            }   
            else
            {
                return false;
            }              
        } 

        public function remove($value)
        {            
            if($this->isEmpty() == false)
            {
                if($this->find($value) == true)
                {
                    if($this->tail->value == $value)
                    {
                        $this->tail = $this->tail->prev;
                    }
                    if($this->head->value == $value)
                    {
                        $this->head = $this->head->next;
                        if($this->isEmpty() == false)
                        {
                            $this->head->prev = null;
                        }
                        else
                        {
                            $this->head = null;
                            $this->tail = null;
                        }
                    }
                    else
                    {
                        $current = $this->head;
                        while($current->next->value != $value && $current)
                        {
                            $current = $current->next;
                        }
                        $temp1 = $current->next->next;                  
                        $current->next = $temp1;
                        if($current->next != null)
                        {
                        $current->next->prev = $current;
                        }
                        else
                        {
                            $current->next = null;
                        }
                    }
                }
            }
         
        }

        public function removeAllNodesWithValueOf($value)
        {
            $delete_count = 0;
            $current = $this->head;

            
            while($current)
            {
                if($this->find($value) == true)
                {
                    $delete_count++; 
                    $this->remove($value);
                }
                
                $current = $current->next;
            }
            echo  "Delete count: {$delete_count}<br>";
        }

        public function insert($pos, $value)
        {
            $current = $this->head;
            while($current)
            {      
                if($current == $this->findByPosition($pos))
                {
                    $temp = $current->next;
                    $current->next = new Node($value);      
                    $current->next->next = $temp;       
                    $current->next->prev = $current;                              
                    // return true; 
                    if($pos == 0)
                    {
                        $current = $this->head;
                        $swap = 0;
                        while($swap < 1)
                        {
                            $swap++;
                            $temp = $current->next;
                            
                        }
                    }             
                }
                $current = $current->next;            
            } 
            $current = $this->head;
            while($current->next != null && $current->next)
            {                   
                $current = $current->next;           
            }   
            $current->next = new Node($value);   
            return false;

           
            return $this;
        }

    }

    $testDLL = new DoublyLinkedList();
    $testDLL->add(1)->add(2)->add(1)->add(2);
    // $testDLL->add(1);
    // add(3)->add(4)->add(3);
    // var_dump($testDLL->find(3));  
    // var_dump($testDLL->findAllNodesWithValueOf(3));  
    // var_dump($testDLL->isEmpty());
    // $testDLL->remove(5);
    // $testDLL->removeAllNodesWithValueOf(2);
    // $testDLL->removeAllNodesWithValueOf(1);
    $testDLL->insert(0,9);
    // var_dump($testDLL->findByPosition(3));
    var_dump($testDLL);
?>