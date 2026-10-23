<?php

function kiemTraSNT($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function nSoNguyenToDauTien($n) {
    $danhSach = [];
    $current = 2;
    
    while (count($danhSach) < $n) {
        if (kiemTraSNT($current)) {
            $danhSach[] = $current;
        }
        $current++;
    }
    
    return $danhSach;
}

$n = 10;
$ketQua = nSoNguyenToDauTien($n);

echo "<h3>Danh sách {$n} số nguyên tố đầu tiên:</h3>";
echo implode(", ", $ketQua);
?>