<?php
function sumOfDigits($string) {
    preg_match_all('/\d/', $string, $matches);
    
    return array_sum($matches[0]);
}

$string = "1ngaythu6hoc3ca";
$result = sumOfDigits($string);

echo "Chuỗi: " . $string . "<br>";
echo "Tổng các chữ số = " . $result;
?>