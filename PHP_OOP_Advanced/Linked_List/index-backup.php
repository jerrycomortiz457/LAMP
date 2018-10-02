<?php
    Class Card
    {
        public function __construct($face, $suit)
        {
            $this->face = $face;
            $this->suit = $suit;
         }
    }

    Class Deck
    {          
        public $current_deal_cards;
       
        public function __construct()       
        {                    
            $this->deck = null;                        
        }

        public function createDeck()
        {           
            $deck = new Deck();
            $faces = array("Ace","2","3","4","5","6","7","8","9","10","Jack","Queen","King");
            $suits = array("Clubs", "Heart", "Spades", "Diamond");
            
            foreach($suits as $suit)
            {
                foreach($faces as $face)
                {            
                   $this->deck[] = new Card($face,$suit);
                   echo "<div><img src=''>";
                }
            }          
            return $this;
        }
        
        public function reset_cards()
        {
            echo "[RESET] Deck was reset...<br>";
            $this->cards = $this->reset_point;
            reset($this->deck);
            return $this;
        }
        public function shuffle_cards()
        {
            echo "[SHUFFLE] Deck was shuffled...<br>";   
            $this->reset_point = $this->deck;        
            shuffle($this->deck);    
            // var_dump($this);
            return $this;    
        }          
        
        public function deal_card()
        {
            echo "[DEAL]<br>";              
            if(empty($this->deck))
            {
                echo "There is no card left in the current card!";
            }
            else
            {
                $this->current_deal_cards[] = $this->deck[0];
                array_shift($this->deck);
                // var_dump($this);      
            }
            return $this;
        }
    }

    Class Player
    {
        public $current_deck;
        public function __construct($name, $deck)
        {
            $this->name = $name;
            $this->current_deck = $deck;
            $this->hand = null;
        }

        public function draw_card()
        {        
            if(empty($this->current_deck->current_deal_cards))
            {
                echo "<br>Deal before player can draw a card from the current deal cards!<br>";
            }
            else
            {
                echo "[DRAW]$this->name draws a card from the current deal cards.<br>";
                $this->hand[] = $this->current_deck->current_deal_cards[0];
                array_shift($this->current_deck->current_deal_cards);
            }
            return $this;
        }
    }


    class Black_Jack
    {
        
    }
?>

<?php

    $deck1 = new Deck('Sample Deck');  
    $deck1->createDeck();
    // $test_create_new_deck->shuffle_cards()->shuffle_cards()->reset_cards()->deal_card()->deal_card(); 
    $deck1->shuffle_cards()->deal_card()->deal_card();
    // $deck1->deal_card();
    $player1 = new Player('Shirasagi Tomu',$deck1); 
    $player1->draw_card();
    var_dump($player1);

    $player2 = new Player('Wriggler ',$deck1); 
    $player2->draw_card();
    var_dump($player2);


?>