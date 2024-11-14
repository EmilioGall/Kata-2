<?php

function calculate_speed($distance, $time)
{

   // Initialize distance in meters and time in seconds
   $distanceInMeters = 0;
   $timeInSeconds = 0;

   // Process distance
   if (strpos($distance, 'km') !== false) {

      $value = (float)str_replace('km', '', $distance);

      $distanceInMeters = $value * 1000; // convert km to meters

   } elseif (strpos($distance, 'm') !== false) {

      $value = (float)str_replace('m', '', $distance);

      $distanceInMeters = $value; // meters remain as is

   };

   // Process time
   if (strpos($time, 'min') !== false) {

      $value = (float)str_replace('min', '', $time);

      $timeInSeconds = $value * 60; // convert minutes to seconds

   } elseif (strpos($time, 's') !== false) {

      $value = (float)str_replace('s', '', $time);

      $timeInSeconds = $value; // seconds remain as is

   };

   // Calculate speed in meters per second
   if ($timeInSeconds > 0) {

      $speedInMetersPerSecond = $distanceInMeters / $timeInSeconds;
   } else {

      return "Time cannot be zero.";
   };

   // Convert speed to miles per hour
   $speedInMilesPerHour = $speedInMetersPerSecond * 2.23694;

   // Round to nearest integer and format output
   return round($speedInMilesPerHour) . 'mph';
};
