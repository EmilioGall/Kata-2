<?php

$string1 = "the_stealth_warrior";

$string2 = "the-stealth-warrior";

function toCamelCase($str)
{

   // First, replace dashes and underscores with spaces
   $str = str_replace(['-', '_'], ' ', $str);

   echo '<pre style="background: #DEDEDE; color: #484848;">';
   var_dump($str);
   echo '</pre>';

   // Split the string into an array of words
   $words = explode(' ', $str);

   // Initialize the result variable
   $camelCaseString = '';

   // Process each word
   foreach ($words as $index => $word) {

      // Capitalize the first character and make the rest lowercase

      // For the first word, we check if it was originally uppercase
      if ($index === 0) {

         // Keep it as is
         $camelCaseString .= $word;
      } else {

         // Capitalize the first letter and append the rest
         $camelCaseString .= ucfirst($word);
      };
   };

   return $camelCaseString;
};

