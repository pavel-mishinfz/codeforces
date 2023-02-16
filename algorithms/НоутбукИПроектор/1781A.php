<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $wdh[] = explode(" ", readline());
    $abfg[] = explode(" ", readline());
}
for($i = 0; $i < $t; ++$i) {
    $w = $wdh[$i][0];
    $d = $wdh[$i][1];
    $h = $wdh[$i][2];

    $a = $abfg[$i][0];
    $b = $abfg[$i][1];
    $f = $abfg[$i][2];
    $g = $abfg[$i][3];

    $length = array();
    $length[] = $a + abs($g-$b) + $f;
    $length[] = ($w-$a) + abs($g-$b) + ($w-$f);
    $length[] = $b + abs($f-$a) + $g;
    $length[] = ($d-$b) + abs($f-$a) + ($d-$g);

    $j = 0;
    $min_length = $length[$j]; 
    while($j != 3) {
        if($length[$j+1] < $min_length) {
            $min_length = $length[$j+1];
        }
        ++$j;
    }

    print($min_length + $h . "\n");
}