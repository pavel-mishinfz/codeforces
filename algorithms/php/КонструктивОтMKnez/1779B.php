<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $n[] = readline();
}
for($i = 0; $i < $t; ++$i) {
    if($n[$i] % 2 == 0) {
        print("YES\n");
        for($j = 0; $j < $n[$i]; ++$j) {
            if($j % 2 == 0) {
                print(1 . " ");
            }
            else {
                print(-1 . " ");
            }
        }
        print("\n");
    }
    elseif($n[$i] == 3) {
        print("NO\n");
    }
    else {
        print("YES\n");
        for($j = 0; $j < $n[$i]; ++$j) {
            if($j % 2 == 0) {
                print(intdiv($n[$i]-2,2) . " ");
            }
            else {
                print(-intdiv($n[$i],2) . " ");
            }
        }
        print("\n");
    }
}