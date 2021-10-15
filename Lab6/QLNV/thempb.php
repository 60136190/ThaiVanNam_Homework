<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm phòng ban</title>
</head>
<body>
<?php 
require('connect.php');
?>
<form action="" method="post" enctype="multipart/form-data">
<table bgcolor="#eeeeee" align="center" width="60%" border="0">
<tr bgcolor="#eeee10">
	<td colspan="2" align="center"><font color="blue"><h2>THÊM PHÒNG BAN MỚI</h2></font></td>
</tr>
<tr>
	<td>Mã phòng ban: </td>
	<td><input type="text" name="MAPHONG" size="20" value="<?php if(isset($_POST['MAPHONG'])) echo $_POST['MAPHONG'];?>" /></td>
</tr>
<tr>
	<td>Tên phòng ban: </td>
	<td><input type="text" name="TENPHONG" size="50" value="<?php if(isset($_POST['TENPHONG'])) echo $_POST['TENPHONG'];?>" /></td>
</tr>

<tr>
	<td colspan="2" align="center"><input type="submit" name ="them" size="10" value="Thêm mới" /></td>
</tr>
</table>
</form>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$errors=array(); //khởi tạo 1 mảng chứa lỗi
	//kiem tra ma nhan vien
	if(empty($_POST['MAPHONG'])){
		$errors[]="Bạn chưa nhập mã phòng ban";
	}
	else{
		$ma_phong_ban=trim($_POST['MAPHONG']);
	}
	//kiểm tra ho nhan vien 
	if(empty($_POST['TENPHONG'])){
		$errors[]="Bạn chưa nhập tên phòng ban ";
	}
	else{
		$ten_phong_ban=trim($_POST['TENPHONG']);
	}
    
	if(empty($errors))//neu khong co loi xay ra
	{ 
		$query="INSERT INTO phongban VALUES ('$ma_phong_ban','$ten_phong_ban')";
		$result=mysqli_query($dbc,$query);
		if(mysqli_affected_rows($dbc)==1){//neu them thanh cong
			echo "<div align='center'>Thêm mới thành công!</div>";			
			$query="Select phongban.*, TENPHONG from phongban 
					AND MAPHONG ='". $ma_phong_ban. "'";
			$result=mysqli_query($dbc,$query);
			
		}
		else //neu khong them duoc
		{
			echo "<p>Có lỗi, không thể thêm được</p>";
			echo "<p>".mysqli_error($dbc)."<br/><br />Query: ".$query."</p>";	
		}
	}
	else
	{//neu co loi
		echo "<h2>Lá»—i</h2><p>Có lỗi xảy ra:<br/>";
		foreach($errors as $msg)
		{
			echo "- $msg<br /><\n>";
		}
		echo "</p><p>Hãy thử lại.</p>";
	}
}
mysqli_close($dbc);
?>
</body>
</html>

