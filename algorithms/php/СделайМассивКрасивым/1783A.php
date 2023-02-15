<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $n[] = readline();
    $a[] = explode(" ", readline());
}
for($i = 0; $i < $t; ++$i) {
    $tmp = $a[$i];
    rsort($tmp);
    if($tmp == $a[$i]) {
        print("NO\n");
    }
    else {
        print("YES\n");
        print($a[$i][$n[$i]-1] . " ");
        for($k = 0; $k < $n[$i] - 1; ++$k) {
            print($a[$i][$k] . " ");
        }
        print("\n");
    }
}