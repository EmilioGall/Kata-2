<?php

// FIRST PART

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


// SECOND PART

$string1 = "myCamelCasedString";

$string2 = "myCamelHas3Humps";

function kebabize($string)
{

   // Initialize an empty result string
   $result = '';

   // Loop through each character of the string
   for ($i = 0; $i < strlen($string); $i++) {

      $char = $string[$i];

      // Check if the character is uppercase with UNICODE
      if ($char >= 'A' && $char <= 'Z') {

         // If it's not the first character, prepend a hyphen
         if ($result !== '') {

            $result .= '-';
         };

         // Convert uppercase to lowercase and append to the result
         $result .= strtolower($char);
      } elseif ($char >= 'a' && $char <= 'z') {

         // Append lowercase characters directly
         $result .= $char;
      };
   };

   return $result;
};
