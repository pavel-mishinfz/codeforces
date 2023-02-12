<?php
$t = readline();
for($i = 0; $i < $t; ++$i) {
    $n[] = readline();
    $s[] = readline();
}
for($i = 0; $i < $t; ++$i) {
    $O = [0,0];
    $j = 0;
    while($j != $n[$i]) {
        if($O[0] == 1 && $O[1] == 1) {
            break;
        }
        switch($s[$i][$j]) {
            case 'L':
                --$O[0];
                break;
            case 'R':
                ++$O[0];
                break;
            case 'U':
                ++$O[1];
                break;
            case 'D':
                --$O[1];
                break;
            default:
                break;
        }
        ++$j;
    }
    if($O[0] == 1 && $O[1] == 1) {
        print("YES");
    }
    else {
        print("NO");
    }
    print("\n");
}
