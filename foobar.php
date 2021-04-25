<?php
$words = ['foo', 'bar'];
$output = [];
for ($i = 1; $i <= 100; $i++) { 
 if ($i%3 === 0 && $i%5 === 0) {
  $output[] = " $words[0]$words[1]";
 } else if ($i%3 === 0) {
  $output[] = " $words[0]";
 } else if ($i%5 === 0) {
  $output[] = " $words[1]";
 } else {
  $output[] = " $i";
 }
}
echo implode(",", $output);
?>