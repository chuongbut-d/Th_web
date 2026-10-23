<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab 3_5 - Hàm và Include</title>
<style>
    #banco {
        border: solid 2px #333; 
        padding: 15px; 
        background: #E8E8E8; 
        display: inline-block;
    }
    #banco .cellBlack {
        width: 50px; 
        height: 50px; 
        background: black; 
        color: white; 
        float: left;
        text-align: center;
        line-height: 50px;
    }
    #banco .cellWhite {
        width: 50px; 
        height: 50px; 
        background: white; 
        color: black; 
        float: left;
        text-align: center;
        line-height: 50px;
    }
    .clear {
        clear: both;
    }
</style>
</head>

<body>
<?php
// c. Nhúng file function.php vào lab3_5.php
require_once "function.php";

// d. Gọi các hàm vừa định nghĩa và xuất chuỗi HTML

// Gọi hàm BCC với các tham số tùy chỉnh màu
echo BCC(6, "red", "green", "blue");

// Gọi hàm BCC sử dụng màu mặc định
echo BCC(9);

// Gọi hàm BanCo
echo BanCo(8);
?>
</body>
</html>