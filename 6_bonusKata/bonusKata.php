<?php

function rotate_left($substring)
{
   // Rotate the substring left by moving the first character to the end
   if (strlen($substring) < 2) {

      // No rotation needed for single character
      return $substring;
   };

   return substr($substring, 1) . substr($substring, 0, 1);
};

function maxRot($n)
{

   // Initialize the maximum as the original number
   $max = $n;

   // Convert the number to a string, so we can manipulate the digits easily
   $str = strval($n);

   // We need to perform rotations for each digit position except the last one
   $length = strlen($str);

   for ($i = 0; $i < $length - 1; $i++) {

      $digit = $str[$i];

      echo '<pre style="background: #DEDEDE; color: #3eb100;">';
      echo '<span>Digit =</span>';
      var_dump($digit);
      echo '</pre>';

      // Rotate left from position $i
      $toRotate = substr($str, $i, $length - $i);

      echo '<pre style="background: #DEDEDE; color: #484848;">';
      echo '<span>toRotate String =</span>';
      var_dump($toRotate);
      echo '</pre>';

      $rotated = rotate_left($toRotate);

      echo '<pre style="background: #DEDEDE; color: #484848;">';
      echo '<span>Rotated String =</span>';
      var_dump($rotated);
      echo '</pre>';

      // Update the string for the next rotation iteration
      $str = strval(substr($str, 0, $i) . $rotated);

      echo '<pre style="background: #DEDEDE; color: #00c0d0;">';
      echo '<span>Updated String =</span>';
      var_dump($str);
      echo '</pre>';

      // Update the max if we found a new maximum
      if ($str > $max) {

         $max = $str;
      };

      echo '<pre style="background: #DEDEDE; color: #00c0d0;">';
      echo '<span>Max =</span>';
      var_dump($max);
      echo '</pre>';
   };

   return intval($max);
};

echo '<pre style="background: #DEDEDE; color: #fc3106;">';
echo '<span>maxRot(56789) =</span>';
var_dump(maxRot(56789));
echo '<span>Expected = 68957</span>';
echo '</pre>';

echo '<pre style="background: #DEDEDE; color: #fc3106;">';
echo '<span>maxRot(38458215) =</span>';
var_dump(maxRot(38458215));
echo '<span>Expected = 85821534</span>';
echo '</pre>';
