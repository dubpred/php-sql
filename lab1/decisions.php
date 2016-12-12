<?php $time = date("g:i a"); $hour = date(15); 
if ($hour < 12 and $hour > 4) {  echo "Good morning!"; } 
else if ($hour < 15 and $hour >= 12) {  echo "Good afternoon!"; } 
else if ($hour < 21 and $hour >= 15) {  echo "Good evening!"; } 
else if ($hour >= 21 or $hour = 1 or $hour = 2 or $hour = 3 or $hour =4) { echo "goodnight";}
?>
