<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $n[] = readline();
}
for($i = 0; $i < $t; ++$i) {
    if($n[$i] % 2 != 0) {
        print(-1 . "\n");
        continue;
    }
    else {
        $x = 1;
        $y = $n[$i] / 2;
        print($x . " " . $y . "\n");
    }
}
