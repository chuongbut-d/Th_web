<?php
$a = 0;
$b = -4;
$c = 1;

echo "<h3>Giải phương trình: {$a}x² + {$b}x + {$c} = 0</h3>";

if ($a == 0) {
    if ($b == 0) {
        if ($c == 0) {
            echo "Phương trình có vô số nghiệm.<br>";
        } else {
            echo "Phương trình vô nghiệm.<br>";
        }
    } else {
        $x = -$c / $b;
        echo "Đây là phương trình bậc nhất. Nghiệm: x = " . $x . "<br>";
    }
} else {
    $delta = ($b * $b) - (4 * $a * $c);
    echo "Delta = " . $delta . "<br>";

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm phân biệt:<br>";
        echo "x1 = " . $x1 . "<br>";
        echo "x2 = " . $x2 . "<br>";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Phương trình có nghiệm kép: x1 = x2 = " . $x . "<br>";
    } else {
        echo "Phương trình vô nghiệm.<br>";
    }
}
?>