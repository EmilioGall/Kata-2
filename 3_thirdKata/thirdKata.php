<?php

function cats(int $start, int $finish): int
{

   // Initialize the number of jumps
   $jumps = 0;

   // Start the current position at 'start'
   $currentPosition = $start;

   // Loop until we reach the finish shelf
   while ($currentPosition < $finish) {

      // Check if jumping 3 shelves doesn't exceed the finish shelf
      if ($currentPosition + 3 <= $finish) {

         // Make the jump of 3 shelves
         $currentPosition += 3;
      } else {

         // If jumping 3 shelves would exceed, jump 1 shelf instead
         $currentPosition += 1;
      };

      // Increment the jump counter
      $jumps++;
   };

   // Return the total number of jumps made
   return $jumps;
};
