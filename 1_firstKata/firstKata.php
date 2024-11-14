<?php

function rpsls($player1, $player2)
{

   // Define the rules of the game in array (who wins agains who)
   $rules = [

      'rock' => ['scissors', 'lizard'],
      'scissors' => ['paper', 'lizard'],
      'paper' => ['rock', 'spock'],
      'lizard' => ['spock', 'paper'],
      'spock' => ['scissors', 'rock']

   ];

   // Check if the players chose the same option
   if ($player1 === $player2) {

      return "Draw!";
   };

   // Determine the winner
   if (in_array($player2, $rules[$player1])) {

      return "Player 1 Won!";
   } else {

      return "Player 2 Won!";
   };
   
};
