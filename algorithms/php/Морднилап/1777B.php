<?php
$mod = 1000000007;
$t = readline();
for($i = 0; $i < $t; ++$i) {
   $n[] = readline();
}
for($i = 0; $i < $t; ++$i) {
   $k = 0;
   $num = 1;
   while($k != $n[$i]) {
       ++$k;
       $num = ($num*$k) % $mod;
   }
   $num = fmod($num*$n[$i], $mod);
   $num = fmod($num*($n[$i]-1), $mod);
   print($num . "\n");
}