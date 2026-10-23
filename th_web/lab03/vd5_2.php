<?php
function isPalindrome($string) {
    $reversedString = strrev($string);
    return $string === $reversedString;
}

$str1 = "abcba";
$str2 = "abcdba";

echo $str1 . " -> " . (isPalindrome($str1) ? "Là chuỗi đối xứng" : "Không phải chuỗi đối xứng ") ."<br>" ;

echo $str2 . " -> " . (isPalindrome($str2) ? "Là chuỗi đối xứng" : "Không phải chuỗi đối xứng");
?>