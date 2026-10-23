<?php
/*
Hàm xuất bảng cửu chương $n
- Input: 
    $n: Số nguyên dương (1->10)
    $colorHead: Màu nền của dòng tiêu đề (mặc định: '#4CAF50')
    $color1: Màu nền dòng lẻ (mặc định: '#f2f2f2')
    $color2: Màu nền dòng chẵn (mặc định: '#ffffff')
- Output: Chuỗi HTML chứa bảng cửu chương
*/
function BCC($n, $colorHead = "#4CAF50", $color1 = "#f2f2f2", $color2 = "#ffffff")
{
    $str = "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse; text-align: center; margin-bottom: 20px;'>";
    
    // Dòng tiêu đề
    $str .= "<tr bgcolor='{$colorHead}' style='color: white; font-weight: bold;'>";
    $str .= "<td colspan='5'>Bảng cửu chương {$n}</td>";
    $str .= "</tr>";

    // Các dòng phép tính từ 1 đến 10
    for ($i = 1; $i <= 10; $i++) {
        // Kiểm tra dòng chẵn/lẻ để chọn màu nền
        $bgColor = ($i % 2 != 0) ? $color1 : $color2;

        $str .= "<tr bgcolor='{$bgColor}'>";
        $str .= "<td>{$n}</td>";
        $str .= "<td>x</td>";
        $str .= "<td>{$i}</td>";
        $str .= "<td>=</td>";
        $str .= "<td>" . ($n * $i) . "</td>";
        $str .= "</tr>";
    }

    $str .= "</table>";
    return $str;
}

/*
Hàm in ra bàn cờ vua
- Input: $size: kích thước bàn cờ (mặc định là 8)
- Output: Chuỗi HTML chứa bàn cờ
*/
function BanCo($size = 8)
{
    $str = '<div id="banco">';
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            $classCss = (($i + $j) % 2 == 0) ? "cellWhite" : "cellBlack";
            $str .= "<div class='{$classCss}'>{$i}{$j}</div>";
        }
        $str .= "<div class='clear'></div>";
    }
    $str .= '</div>';
    return $str;
}
?>