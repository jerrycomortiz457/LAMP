<?php
    Class Card
    {
        public $face;
        public $suit;

        public function __construct($face, $suit)
       {
           $this->face = $face;
           $this->suit = $suit;
       }     
    }
    Class Deck
    {            
        public function __construct()
        {           
            $faces = array("Ace","2","3","4","5","6","7","8","9","10","Jack","Queen","King");
            $suits = array("Clubs", "Hearts", "Spades", "Diamonds");
            $deck = array();           
        }
    }

//    $sample_card = new Card(1,"Diamonds");
//    var_dump($sample_card);

    $sample_deck = new Deck();
    var_dump($sample_deck);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="A full deck of Playing Card Icons">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="keywords" content="Playing Cards, deck of cards, deck, cards, icons, images">
    <title>Playing Cards</title>
</head>
<body bgcolor="#006633" text="#e1ffd7" link="#FFFFFF" vlink="#FFFFFF">
    <center>
        <table border="0" cellspacing="10" cellpadding="10">
            <tbody>
                <tr>
                    <td>
                        <img src="../assets/images/b1pt.png"><br>
                        <img src="../assets/images/b1fh.png"><br>
                        <img src="../assets/images/b1pb.png"><br>
                    </td>
                    <td>
                        <img src="../assets/images/b1pl.png">
                        <img src="../assets/images/b1fv.png">
                        <img src="../assets/images/b1pr.png">
                    </td>
                    <td>
                        <img src="../assets/images/jb.png">
                    </td>
                    <td valign="CENTER">
                        <strong>Playing Cards</strong>
                    </td>
                    <td>
                        <img src="../assets/images/jr.png">
                    </td>
                    <td>
                        <img src="../assets/images/b2pl.png">
                        <img src="../assets/images/b2fv.png">
                        <img src="../assets/images/b2pr.png">
                    </td>
                    <td>
                        <img src="../assets/images/b2pt.png"><br>
                        <img src="../assets/images/b2fh.png"><br>
                        <img src="../assets/images/b2pb.png"><br>
                    </td>
                </tr>
                <tr>

                </tr>
            </tbody>
        </table>
        <table border="1" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td align="CENTER"><img src="../assets/images/c1.png"></td>
                <td align="CENTER"><img src="../assets/images/c2.png"></td>
                <td align="CENTER"><img src="../assets/images/c3.png"></td>
                <td align="CENTER"><img src="../assets/images/c4.png"></td>
                <td align="CENTER"><img src="../assets/images/c5.png"></td>
                <td align="CENTER"><img src="../assets/images/c6.png"></td>
                <td align="CENTER"><img src="../assets/images/c7.png"></td>
                <td align="CENTER"><img src="../assets/images/c8.png"></td>
                <td align="CENTER"><img src="../assets/images/c9.png"></td>
                <td align="CENTER"><img src="../assets/images/c10.png"></td>
                <td align="CENTER"><img src="../assets/images/cj.png"></td>
                <td align="CENTER"><img src="../assets/images/cq.png"></td>
                <td align="CENTER"><img src="../assets/images/ck.png"></td>
            </tr>
            <tr>
                <td align="CENTER"><img src="../assets/images/h1.png"></td>
                <td align="CENTER"><img src="../assets/images/h2.png"></td>
                <td align="CENTER"><img src="../assets/images/h3.png"></td>
                <td align="CENTER"><img src="../assets/images/h4.png"></td>
                <td align="CENTER"><img src="../assets/images/h5.png"></td>
                <td align="CENTER"><img src="../assets/images/h6.png"></td>
                <td align="CENTER"><img src="../assets/images/h7.png"></td>
                <td align="CENTER"><img src="../assets/images/h8.png"></td>
                <td align="CENTER"><img src="../assets/images/h9.png"></td>
                <td align="CENTER"><img src="../assets/images/h10.png"></td>
                <td align="CENTER"><img src="../assets/images/hj.png"></td>
                <td align="CENTER"><img src="../assets/images/hq.png"></td>
                <td align="CENTER"><img src="../assets/images/hk.png"></td>
            </tr>
            <tr>
                <td align="CENTER"><img src="../assets/images/s1.png"></td>
                <td align="CENTER"><img src="../assets/images/s2.png"></td>
                <td align="CENTER"><img src="../assets/images/s3.png"></td>
                <td align="CENTER"><img src="../assets/images/s4.png"></td>
                <td align="CENTER"><img src="../assets/images/s5.png"></td>
                <td align="CENTER"><img src="../assets/images/s6.png"></td>
                <td align="CENTER"><img src="../assets/images/s7.png"></td>
                <td align="CENTER"><img src="../assets/images/s8.png"></td>
                <td align="CENTER"><img src="../assets/images/s9.png"></td>
                <td align="CENTER"><img src="../assets/images/s10.png"></td>
                <td align="CENTER"><img src="../assets/images/sj.png"></td>
                <td align="CENTER"><img src="../assets/images/sq.png"></td>
                <td align="CENTER"><img src="../assets/images/sk.png"></td>
            </tr>
            <tr>
                <td align="CENTER"><img src="../assets/images/d1.png"></td>
                <td align="CENTER"><img src="../assets/images/d2.png"></td>
                <td align="CENTER"><img src="../assets/images/d3.png"></td>
                <td align="CENTER"><img src="../assets/images/d4.png"></td>
                <td align="CENTER"><img src="../assets/images/d5.png"></td>
                <td align="CENTER"><img src="../assets/images/d6.png"></td>
                <td align="CENTER"><img src="../assets/images/d7.png"></td>
                <td align="CENTER"><img src="../assets/images/d8.png"></td>
                <td align="CENTER"><img src="../assets/images/d9.png"></td>
                <td align="CENTER"><img src="../assets/images/d10.png"></td>
                <td align="CENTER"><img src="../assets/images/dj.png"></td>
                <td align="CENTER"><img src="../assets/images/dq.png"></td>
                <td align="CENTER"><img src="../assets/images/dk.png"></td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellspacing="10">
        <tbody><tr>
        <td align="CENTER"><font size="2"><br>
        These images were created using <a href="http://www.mindworkshop.com/alchemy/alchemy.html">GIFCon</a>.
        </font></td>
        </tr>
        </tbody></table>
    </center>

    <?php
        
    ?>
</body>
</html>