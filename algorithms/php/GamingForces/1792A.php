<?php
$t = readline();
$n;
$h;
for($i = 0; $i < $t; ++$i) {
    $n[]=readline();
    $h[]=explode(' ', readline());
}
for($i = 0; $i < $t; ++$i) {
    $k = 0;
    $j = 0;
    sort($h[$i]);
    while($h[$i][$n[$i]-1] != 0) {
        if($j == $n[$i] - 1) {
            $h[$i][$j] = 0;
            ++$k;
        }
        elseif($h[$i][$j] == 1 && $h[$i][$j+1] == 1) {
            --$h[$i][$j];
            --$h[$i][$j+1];
            $j += 2;
            ++$k;
        }
        else {
            $h[$i][$j] = 0;
            ++$k;
            ++$j;
        }
    }
    print($k);
    print("\n");
}

