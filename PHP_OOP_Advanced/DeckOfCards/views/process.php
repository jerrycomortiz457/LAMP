<?php   
   session_start();   
  
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
            $faces = array("1","2","3","4","5","6","7","8","9","10","j","q","k");
            $suits = array("c", "h", "s", "d");
            
            foreach($suits as $suit)
            {
                foreach($faces as $face)
                {            
                   $this->deck[] = new Card($face,$suit);                
                }
            }          
            return $this;
        }
        
        public function reset_cards()
        {
            // echo "[RESET] Deck was reset...<br>";
            $this->cards = $this->reset_point;
            reset($this->deck);
            return $this;
        }
        public function shuffle_cards()
        {
            // echo "[SHUFFLE] Deck was shuffled...<br>";   
            $this->reset_point = $this->deck;        
            shuffle($this->deck);    
            // var_dump($this);
            return $this;    
        }          
        
        public function deal_card()
        {
            // echo "[DEAL]<br>";              
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
        public function display_cards()
        {
            // var_dump($this);
            for($deck_index = 0;$deck_index < count($this->deck); $deck_index++)
            {
                echo "<div class='cards'><img src='../assets/images/{$this->deck[$deck_index]->suit}{$this->deck[$deck_index]->face}.png' alt='{$this->deck[$deck_index]->suit}{$this->deck[$deck_index]->face}' data-alt-src='{$this->deck[$deck_index]->suit}{$this->deck[$deck_index]->face}'></div>";
            }                                        
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

        public function display_hand()
        {
            // echo "$this->name hand:"; 
                     
            for($hand_index = 0; $hand_index < count($this->hand);$hand_index++)
            {
                echo "<div class='cards' id='{$hand_index}'><img src='../assets/images/{$this->hand[$hand_index]->suit}{$this->hand[$hand_index]->face}.png' alt='{$this->hand[$hand_index]->suit}{$this->hand[$hand_index]->face}'><input type='hidden' value='{$hand_index}' name='action'><input type='submit' value='Discard' name='discard'></div>";
                
            }                 
            return $this;
        }

        public function draw_card()
        {        
            if(empty($this->current_deck->current_deal_cards))
            {
                echo "<br>Deal before player can draw a card from the current deal cards!<br>";
            }
            else
            {
                // echo "<br>[DRAW]$this->name draws a card from the current deal cards.<br>";
                $this->hand[] = $this->current_deck->current_deal_cards[0];
                array_shift($this->current_deck->current_deal_cards);
            }
            return $this;
        }

        public function discard_card($card_index)
        {   
            if($card_index == 0)
            {
                array_shift($this->hand);
            }
            else
            {
                unset($this->hand[$card_index]);
            }
            
            if(empty($this->hand))
            {
                echo "<br>Hand is empty!<br>";
            }
            return $this;      
            // var_dump($this->hand);
                      
        }
    }
    Class Dealer extends Player
    {
       
      
    }
    
    class Lucky_Nine extends Deck
    {
        public function createDeck()
        {           
            $deck = new Deck();
            $faces = array("1","2","3","4","5","6","7","8","9","10");
            $suits = array("c", "h", "s", "d");
            
            foreach($suits as $suit)
            {
                foreach($faces as $face)
                {            
                   $this->deck[] = new Card($face,$suit);                
                }
            }          
            return $this;
        }     

        public function display_cards()
        {
            // var_dump($this);         
           
            echo "<div class='deck'><img src='../assets/images/b1pt.png'><br><img src='../assets/images/b1fh.png'><br><img src='../assets/images/b1pb.png'></div>";
            

            for($deck_index = 0;$deck_index < count($this->current_deal_cards); $deck_index++)
            {                
                echo "<div class='cards'><img src='../assets/images/b1fv.png' alt='{$this->deck[$deck_index]->suit}{$this->deck[$deck_index]->face}' data-alt-src='{$this->deck[$deck_index]->suit}{$this->deck[$deck_index]->face}'><input type='submit' value='Draw'><input type='hidden' name='card_action' value='{$this->deck[$deck_index]->suit}{$this->deck[$deck_index]->face}'></div>";
            }
                                                 
        }     
    }

    

    function addCardValues($user)
    {
        for($card_index = 0; $card_index < count($_SESSION["{$user}"]->hand);$card_index++)
        {
           $sum += $_SESSION["{$user}"]->hand[$card_index]->face;
        }

        if($sum > 20)
        {
            $sum = $sum - 20;
            return $sum;
        }
        else if($sum > 10)
        {
            $sum = $sum - 10;
            return $sum;
        }
        else
        {
            return $sum;
        }
        
    }
    
    if(isset($_POST['action']) && $_POST['action'] == 'Reset')
    { 
        session_destroy();        
        header('Location: index.php');
    }

    if(isset($_POST['action']) && $_POST['action'] == 'New Game')
    {      
        // $_SESSION['click'] = 'new game clicked!';
        $new_deck = new Lucky_Nine('Lucky Nine Deck');
        $_SESSION['lucky_nine_deck'] = $new_deck;
        $_SESSION['lucky_nine_deck']->createDeck()->shuffle_cards();        
        header('Location: index.php');
    }

    if(isset($_POST['action']) && $_POST['action'] == 'Deal')
    {      
        $_SESSION['click'] = 'deal!';
        $_SESSION['lucky_nine_deck']->deal_card()->deal_card()->deal_card()->deal_card();
        $player = new Player('Shirasagi Tomu', $_SESSION['lucky_nine_deck']);
        $_SESSION['player'] = $player;
        $_SESSION['player']->draw_card()->draw_card();
        $dealer = new Dealer('Kalaban', $_SESSION['lucky_nine_deck']);
        $_SESSION['dealer'] = $dealer;
        $_SESSION['dealer']->draw_card()->draw_card();
        $_SESSION['player_total'] = addCardValues('player');
        $_SESSION['dealer_total'] = addCardValues('dealer');
        $_SESSION['switch'] = true;
        $_SESSION['card_on_hand_count'] = count($_SESSION['player']->hand);      
        header('Location: index.php');
    }   


    if(isset($_POST['play']) && $_POST['play'] == 'Draw')
    {
        // $_SESSION['draw'] = true;
        $_SESSION['lucky_nine_deck']->deal_card();
        $_SESSION['player']->draw_card();
        $_SESSION['player_total'] = addCardValues('player');        
        header('Location: index.php');
    }

    if(isset($_POST['play']) && $_POST['play'] == 'Bet')
    {
        if($_SESSION['player_total'] > $_SESSION['dealer_total'] && $_SESSION['player_total'] < 10)
        {
           $_SESSION['message'] = "You Win!";
           $_SESSION['switch'] = false;           
        }
        else
        {
            $_SESSION['message'] = "You Lose!";
            $_SESSION['switch'] = false;
        }
        header('Location: index.php');        
    }


?>
