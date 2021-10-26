<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thông tin loai nhân viên</title>
</head>
<body>
<?php 
// Ket noi CSDL
require("trangchu.php");
// Chuan bi cau truy van & Thuc thi cau truy van
$strSQL = "SELECT * FROM loainv";
$result = mysqli_query($dbc,$strSQL);
// Xu ly du lieu tra ve
if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{	echo "<h1 style='color: #003366;margin-top:30px' align='center'>THÔNG TIN LOẠI NHÂN VIÊN</h1>
		  <table align='center' width='800' height='150px' border='2'  
				style='border-collapse: collapse; margin-left:430px; margin-top:30px;'>
		  	<tr style='background-color: #18c9c9;' align='center'>
				<td><b>Mã Loại Nhân Viên</b></td>
				<td><b>Tên Loại Nhân Viên</b></td>
			
			
		  	</tr>";
	$stt=1;
	while ($row = mysqli_fetch_array($result))
	{
		if($stt%2!=0)
		{
			echo "<tr align='center' >";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			
		
			echo "</tr>";
		}
		else
		{
			echo "<tr style='background-color: #b3b7b6;' align='center' >";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			
		
            
			echo "</tr>";
		}
			$stt+=1;
	}
	echo '</table>';
}
//Dong ket noi
mysqli_close($dbc);
?>
</body>
</html>