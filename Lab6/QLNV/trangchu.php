
<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="trangchu.css">
<title>Thông tin loai nhân viên</title>
</head>
<body id="than_page">
<?php 

if(!isset($_SESSION["user"])){
    header("location:login.php");
}
require("connect.php");
?>

<div id="menu">
<ul>
<li><a href="trangchu.php">Trang chủ</a></li>
<li><a href="infostaff.php">Thông tin nhân viên</a></li>
<li><a href="phongban.php">Thông tin phòng ban</a></li>
<li><a href="loainv.php">Loại nhân viên</a></li>
<li><a href="tracuu.php">Tìm kiếm</a></li>
<li><a href="themthongtin.php">Thêm thông tin</a></li>
</ul>
</div>

</body>
</html>