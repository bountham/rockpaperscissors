<?php

    class RPS
    {
        function compareRPS($player1, $player2)
        {
            $player1 = str_replace(" ","", $player1);
            $player2 = str_replace(" ","", $player2);
            if($player1 == "rock")
            {
                if ($player2 == "scissors"){
                    return "Player 1 wins!";

                }
                elseif ($player2 == "paper"){
                    return "Player 2 wins!";
                }
                elseif ($player2 =="rock") {
                    return "It's a tie, try again!";
                }
                else {
                    return "Invalid entry, try again!";
                }}//ending rock



             elseif($player1 == "paper"){
                 if ($player2 == "rock"){
                     return "Player 1 wins!";
                 }
                 elseif ($player2 == "scissors") {
                     return "Player 2 wins!";
                 }
                 elseif ($player2 == "paper") {
                        return "It's a tie, try again!";
                     }
                 else
                 {
                     return "Invalid entry, try again!";
                 }
             }//ending paper



            elseif($player1 == "scissors"){
                if($player2 == "rock"){
                    return "Player 2 wins!";
                }
                elseif($player2 == "paper"){
                    return "Player 1 wins!";
                }
                elseif($player2 == "scissors") {
                    return "It's a tie, try again!";
                }

            }//ending scissors

            else {
                return "Invalid entry, try again!";
            }




             }

             function save()
             {
                 array_push($_SESSION['players_choices'], $this);
             }

             static function deleteAll()
             {
                 $_SESSION['players_choices']=array();
             }
        }




?>
