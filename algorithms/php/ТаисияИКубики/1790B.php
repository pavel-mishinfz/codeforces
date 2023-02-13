<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $nsr[] = explode(" ", readline());
}
for($i = 0; $i < $t; ++$i) {
    $n = $nsr[$i][0];
    $s = $nsr[$i][1];
    $r = $nsr[$i][2];
    $k = $n - 1;
    $res = array();
    $max_elem = $s - $r;
    while($k) {
        $res[] = 1;
        --$k;
    }
    $res[] = $max_elem;
    $sum = $n + $max_elem - 1;
    for($j = $n - 2; $j >= 0 && $sum != $s; --$j) {
        while($res[$j] < $max_elem) {
            ++$res[$j]; 
            ++$sum;
            if($sum == $s) {
                break;
            }
        }
    }
    foreach($res as $elem) {
        print($elem . " ");
    }
    print("\n");
}