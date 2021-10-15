<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm loại nhân viên</title>
</head>
<body>
<?php 
require('connect.php');
?>
<form action="" method="post" enctype="multipart/form-data">
<table bgcolor="#eeeeee" align="center" width="60%" border="0">
<tr bgcolor="#eeee10">
	<td colspan="2" align="center"><font color="blue"><h2>THÊM LOẠI NHÂN VIÊN</h2></font></td>
</tr>
<tr>
	<td>Mã loại nhân viên: </td>
	<td><input type="text" name="MALOAINV" size="20" value="<?php if(isset($_POST['MALOAINV'])) echo $_POST['MALOAINV'];?>" /></td>
</tr>
<tr>
	<td>Tên loại nhân viên: </td>
	<td><input type="text" name="TENLOAINV" size="50" value="<?php if(isset($_POST['TENLOAINV'])) echo $_POST['TENLOAINV'];?>" /></td>
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
	if(empty($_POST['MALOAINV'])){
		$errors[]="Bạn chưa nhập mã loại nhân viên";
	}
	else{
		$ma_loai_nv=trim($_POST['MALOAINV']);
	}
	//kiểm tra ho nhan vien 
	if(empty($_POST['TENLOAINV'])){
		$errors[]="Bạn chưa nhập tên loại nhân viên ";
	}
	else{
		$ten_loai_nv=trim($_POST['TENLOAINV']);
	}
    
	if(empty($errors))//neu khong co loi xay ra
	{ 
		$query="INSERT INTO loainv VALUES ('$ma_loai_nv','$ten_loai_nv')";
		$result=mysqli_query($dbc,$query);
		if(mysqli_affected_rows($dbc)==1){//neu them thanh cong
			echo "<div align='center'>Thêm mới thành công!</div>";			
			$query="Select loainv.*, TENLOAINV from loainv 
					AND MALOAINV ='". $ma_loai_nv. "'";
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

