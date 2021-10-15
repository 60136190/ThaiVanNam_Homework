<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tìm kiếm nhân viên</title>
</head>
<body>

<form action="" method="get">
<?php
	require('connect.php');
	?>

<table id="tracuu" bgcolor="#eeeeee" align="center" width="70%" border="1" 
	   cellpadding="5" cellspacing="5" style="border-collapse: collapse;">

<tr>
	<td align="center"><font color="blue"><h3>TÌM KIẾM THEO PHÒNG BAN</h3></font></td>
</tr>
<tr>
	<td align="center">Phòng ban: <input type="text" name="phongban" size="30" 
				value="<?php if(isset($_GET['phongban'])) echo $_GET['phongban'];?>">
			<input type="submit" name="tim" value="Tìm kiếm"></td>
</tr>
</table>
</form>
<?php 

if($_SERVER['REQUEST_METHOD']=='GET')
{
	if(empty($_GET['phongban'])) echo "<p align='center'>Vui lòng nhập tên phòng ban</p>";
	else
	{
		$phongban=$_GET['phongban'];	
	
		$query="Select phongban.*,nhanvien.*, TEN 
		      from phongban,nhanvien 
		      WHERE phongban.MAPHONG=nhanvien.MAPHONG
					AND TENPHONG like '%$phongban%'";
            
		$result=mysqli_query($dbc,$query);		
		if(mysqli_num_rows($result)<>0)
		{	$rows=mysqli_num_rows($result);
			echo "<div align='center'><b>Có $rows nhân viên được tìm thấy.</b></div>";
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				echo '<table border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">
					<tr bgcolor="#eeeeee"><td colspan="2" align="center"><h3>'.						$row['TENPHONG'].' - '.$row['TEN'].'</h3></td></tr>';
				echo '<tr><td width="200" align="center"><img src="Hinh_sua/'.$row['ANH'].'"/></td>';
				echo '<td><i><b>Địa chỉ:</i></b><br />'.$row['DIACHI'].'<br />';
				echo '<i><b>Giới Tính:</b></i>'.$row['GIOITINH'].'<br />';
				echo '</td></tr></table>';
			}
		}
		else echo "<div><b>Không tìm thấy loại nhân viên này này.</b></div>";
	}
}

?>
</body>
</html>
