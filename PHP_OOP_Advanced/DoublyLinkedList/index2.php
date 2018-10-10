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

        public function add($value)
        {
            if ($this->head == null)
            {
                $this->head  = new Node($value);              
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

        public function find($pos)
        {           
            $current = $this->head;
            for($pos_count = 0; $pos_count < $pos - 1;$pos_count++)
            {
                $current = $current->next;
            }
            return $current;            
        }

        public function isEmpty()
        {
            $count = 0;
            $current = $this->head;
            while($current)
            {
                $count++;
                $current = $current->next;
            }
            
            if($count == 0)
            {
                $this->head = null;
                $this->tail = null;
                return true;
            }
            else
            {
                return false;            
            }
        }

        public function findByValue($value)
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
         
                      
        }

        public function findAllNodesWithValueOf($value)
        {
            $current = $this->head;           
            $find_count = 0;
            while($current)
            {                
                if($this->findByValue($value) == true)
                {
                    $find_count++;
                }
                else
                {
                    return false;
                }                              
                                     
                $current = $current->next;                 
            }              
            if($find_count > 0)
            {
                echo "We have {$find_count} item/s that has a value of '{$value}' was found on the list!<br>";
                return true;
            }
            else
            {
                echo "There's no item with the value of '{$value}' was on the list!";
                return false;
            }                 
        }

        public function removeNodeByValue($value)
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
                        $temp = $current->next->next;
                        $temp2 = $current->next->prev;
                        $current->next = $temp;                
                        if($current->next != null)  
                        {
                            $current->next->prev = $current;    
                        }
                        else
                        {
                            $current->next = null;
                        }               
                    }              
                    echo "<br>The occurence of the value {$value} was deleted!<br>";   
                    
                    if($this->isEmpty() == true)
                    {
                        $this->head = null;
                        $this->tail = null;
                        echo "DLL is empty!";
                    }                 
                    return $this;                          
                       
           
        }        
        
        public function removeAllNodesWithValueOf($value)
        {
            $delete_count = 0;
            $current = $this->head;            
           
            while($this->find($value) == true && $current)
            {
                if($this->isEmpty() == true) 
                {
                    return false;
                }
                else
                {
                    $delete_count++;
                    $this->removeNodeByValue($value);
                    $current = $current->next;
                }
            }            
                
            var_dump($delete_count);
            if($delete_count > 0)
            {
                echo "<br>We found and deleted {$delete_count} item/s on the list!<br>";
            }
            else
            {
                echo "<br>No item found and deleted..";
            }   
        }
    }

    // $testNode =  new Node(1);
    // var_dump($testNode);

    $testDLL = new DoublyLinkedList();
    $testDLL->add(3)->add(3)->add(3)->add(3);
    // $testDLL->add(2)->add(2)->add(2)->add(4);
    // var_dump($testDLL->find(4));
    // $testDLL->findAllNodesWithValueOf(2);
    // $testDLL->removeAllNodesWithValueOf(2);
    // $testDLL->removeNodeByValue(5);
    // $testDLL->removeAllNodesWithValueOf(3);
    $testDLL->removeNodeByValue(3);
    $testDLL->removeNodeByValue(3);
    $testDLL->removeNodeByValue(3);
    // $testDLL->removeNodeByValue(3);
    // var_dump($testDLL->isEmpty());
    var_dump($testDLL);

?>