<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $n[] = readline();
    $str[] = readline();
}
for($i = 0; $i < $t; ++$i) {
    $j = strpos($str[$i],'LR');
    if($j !== false) {
        print($j + 1 . "\n");
    }
    elseif(strpos($str[$i],'RL') !== false) {
        print(0 . "\n");
    }
    else {
        print(-1 . "\n");
    }
}