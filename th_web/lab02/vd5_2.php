<?php
$a = 10; 

if (is_int($a)) {
    echo "Biến \$a là số nguyên.";
} elseif (is_float($a)) {
    echo "Biến \$a là số thực.";
} else {
    echo "Biến \$a không phải là kiểu số nguyên hoặc số thực.";
}
