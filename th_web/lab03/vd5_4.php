<?php
function hcn($d, $r) {
    for ($i = 1; $i <= $r; $i++) {
        for ($j = 1; $j <= $d; $j++) {
            if ($i == 1 || $i == $r || $j == 1 || $j == $d) {
                echo "* ";
            } else {
                echo "&nbsp;&nbsp;&nbsp;"; 
            }
        }
        echo "<br>"; 
    }
}

// Chạy thử với d = 6, r = 3
hcn(6, 3);
?>