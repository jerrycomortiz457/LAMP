<?php
    
    Class  Node
    {
        public $value;
        public $next;

        public function __construct($val)
        {
            $this->value = $val;
            $this->next = null;
        }
    }

    Class Queue
    {
        private $front;
        private $rear;
        public $maxSize;
        
        public function __construct($val)
        {
            $this->front = null;
            $this->rear = null;
            $this->maxSize = $val;
        }

        public function enqueue($val)
        {
            if($this->front == null)
            {
                $this->front = new Node($val);
            }
            else
            {
               $current = $this->front;
               while($current->next)
               {
                   $current = $current->next;
                }
                $current->next = $this->rear;
                $this->rear = new Node($val);  
            }            
            return $this;
        }

        public function dequeue()
        {
            $current = $this->front;
            if($this->front->value == $current->value)
            {
                $this->front = $this->front->next;
            }
            return $this;
        }

        public function front()
        {
            $frontNode = $this->front->value;
            var_dump($frontNode);
            return $frontNode;
        }
        public function rear()
        {
            if($this->rear == null)
            {
                $rearNode = $this->front->value;
            }
            else
            {
                $rearNode = $this->rear->value;
            }
            var_dump($rearNode);
            return $rearNode;
        }

        public function isEmpty()
        {
            $currentFront = $this->front;
            $currentRear = $this->rear;

            if($currentFront == null && $currentRear == null)
            {
                return true;
            }
            return false;
        }

        public function isFull()
        {           
            $count = 1;
            $current = $this->front;

           while($current)
           {
               $count++;
               $current = $current->next;
           }
        
          if($count == $this->maxSize)
          {
              echo "Queue is full";
          }        
          return $this;

        }
    }

    // $testNode = new Node(10);
    // var_dump($testNode);

    // $testQueue = new Queue(7);
    // $testQueue->enqueue(1);
    // $testQueue->enqueue(2);
    // $testQueue->enqueue(3);
    // $testQueue->enqueue(4);
    // $testQueue->enqueue(5);
    // $testQueue->enqueue(6);
    // $testQueue->enqueue(7);
    // $testQueue->isFull();
    // // $testQueue->dequeue();
    // var_dump($testQueue->front());
    // var_dump($testQueue->rear());
    // var_dump($testQueue);

    // $emptyList = new Queue(10);
    // var_dump($emptyList->isEmpty());

    $q = new Queue(5); // instantiates the Queue class with a maxSize attribute of 5
    var_dump($q->isEmpty()); // returns true
    var_dump($q->enqueue(100)); // Queue: 100
    $q->rear(); // returns 100
    $q->front(); // returns 100
    var_dump($q->enqueue(20)); // Queue: 100, 20
    var_dump($q->enqueue(2)); // Queue: 100, 20, 2
    var_dump($q->dequeue()); // Queue: 20, 2
    var_dump($q->enqueue(500)); // Queue: 20, 2, 500
    var_dump($q->enqueue(12)); // Queue: 20, 2, 500, 12
    var_dump($q->enqueue(30)); // Queue: 20, 2, 500, 12, 30
    var_dump($q->isFull()); // returns true
    var_dump($q);


?>