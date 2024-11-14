<?php

function wordsToMarks(string $str): int
{

   // Initialize the total sum
   $total = 0;

   // Loop through each character in the string
   for ($i = 0; $i < strlen($str); $i++) {

      // Get the character
      $char = $str[$i];

      // Calculate the position in the alphabet (a=1, b=2, ..., z=26)
      $position = ord($char) - ord('a') + 1;

      // Add the character's position to the total sum
      $total += $position;
   };

   return $total;
};
