<?php

    class RPS
    {
        function compareRPS($player1, $player2)
        {
            if($player1 == "rock") {
                if ($player2 == "scissors"){
                    return "Player 1 wins!";

                }
                elseif ($player2 == "paper"){
                    return "Player 2 wins!";
                }
                elseif ($player2 =="rock") {
                    return "It's a tie! Try again!";
                }
                else {
                    return "Invalid entry, try again!";
                }}
             elseif($player1 == "paper"){
                 if ($player2 == "rock"){
                     return "Player 1 wins!";

                 }
             }

        }
    }



?>
