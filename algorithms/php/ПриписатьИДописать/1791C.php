<?php
$t = readline();
$n;
$m;
for($i = 0; $i < $t; ++$i) {
    $n[]=readline();
    $m[]=readline();
}
for($i = 0; $i < $t; ++$i) {
    $min_len = 0;
    $j = 0;
    $k = $n[$i]-1;
    if($n[$i] == 1) {
        $min_len = 1;
    }
    elseif($n[$i] % 2 != 0) {
        while(($m[$i][$j] != $m[$i][$k]) && $j != $k) {
            ++$j;
            --$k;
        }
        $min_len = $n[$i]-2*$j;
    }
    else {
        while(($m[$i][$j] != $m[$i][$k]) && $j != $n[$i]/2) {
            ++$j;
            --$k;
        }
        $min_len = $n[$i]-2*$j; 
    }
    print($min_len);
    print("\n");
}