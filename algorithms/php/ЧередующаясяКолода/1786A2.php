<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $n[] = readline();
}
for($i = 0; $i < $t; ++$i) {
    $k = 0;
    $white_A = 0;
    $black_A = 0;
    $white_B = 0;
    $black_B = 0;
    $cur = 1;
    $N = 1;
    do {
        if($k % 2 == 0) {
            $white_A += intdiv($cur,2) + 1;
            $black_A += intdiv($cur,2);
        }
        else {
            $white_B += intdiv($cur,2);
            $black_B += intdiv($cur,2) + 1;
        }
        ++$k;
        $cur += 4;
        $N += $cur;
    } while($N <= $n[$i]);

    if($n[$i] > $N - $cur) {
        $N -= $cur;
        if(($n[$i]-$N) % 2 == 0) {
            if($k % 2 == 0) {
                $white_A += intdiv($n[$i]-$N,2);
                $black_A += intdiv($n[$i]-$N,2);
            }
            else {
                $white_B += intdiv($n[$i]-$N,2);
                $black_B += intdiv($n[$i]-$N,2);
            }
        }
        else {
            if($k % 2 == 0) {
                $white_A += intdiv($n[$i]-$N,2) + 1;
                $black_A += intdiv($n[$i]-$N,2);
            }
            else {
                $white_B += intdiv($n[$i]-$N,2);
                $black_B += intdiv($n[$i]-$N,2) + 1;
            }
        }
    }
    print($white_A . " " . $black_A . " " . $white_B . " " . $black_B . "\n");
}