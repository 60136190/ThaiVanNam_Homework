<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="infostaff.css">
<title>Thong tin nhân viên</title>
</head>
<body >
	
<?php 
// Ket noi CSDL
require("trangchu.php");
// Chuan bi cau truy van & Thuc thi cau truy van

$rowsPerPage=3; //số mẩu tin trên mỗi trang, giả sử là 10
if (!isset($_GET['page']))
{ $_GET['page'] = 1;
}
//vị trí của mẩu tin đầu tiên trên mỗi trang
$offset =($_GET['page']-1)*$rowsPerPage;
//lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
//lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
$result = mysqli_query($dbc, 'Select MANV,HO,TEN,ANH,	NGAYSINH,GIOITINH,DIACHI, TENLOAINV , TENPHONG  from nhanvien,phongban,loainv WHERE  nhanvien.MALOAINV=loainv.MALOAINV AND nhanvien.MAPHONG=phongban.MAPHONG LIMIT '. $offset . ', ' .$rowsPerPage);
	
// Xu ly du lieu tra ve
if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{	echo "<h1 style='color: #003366; margin-top:30px' align='center'  >THÔNG TIN NHÂN VIÊN</h1>
		  <table   width='1300' height='300px' padding:10px; border='1' 
				style='border-collapse: collapse; margin-left:170px; margin-top:30px'>
		  	<tr style='background-color: #18c9c9;' align='center' height='40px' >
			  <td><b>STT</b></td>
				<td><b>Mã nhân viên</b></td>
				<td><b>Họ nhân viên</b></td>
				<td><b>Tên nhân viên</b></td>
				<td><b>Ảnh nhân viên</b></td>
				<td><b>Ngày sinh</b></td>
				<td><b>Giới tính</b></td>
                <td><b>Địa chỉ</b></td>
                <td><b>Loại nhân viên</b></td>
                <td><b>Phòng ban</b></td>
				<td><b>Chức năng</b></td>

		  	</tr>";
	$stt=1;
	while ($row = mysqli_fetch_array($result))
	{

		if($stt%2!=0)
		{
            echo "<tr align='center'  width='100' height='60px' >";
			echo "<td>$stt</td>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>";?>
			<img src="Hinh_nv/<?php echo $row['ANH'];?>" width="50" height="50" style="border-radius:10px" />
			<?php
			echo "</td>";
			echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
			echo "<td>$row[8]</td>";
			echo "<td>";?> 
			<a href='editnhanvien.php?MANV=<?php echo $row[0];?>'><img src='Hinh_nv/edit.png' width='20px' height='20px'></a> <a href='deletenhanvien.php?MANV=<?php echo $row[0];?>'><img src='Hinh_nv/delete.png' width='20px' height='20px'></a>
			<?php echo "</tr>";
		}
		else
		{
			echo "<tr style='background-color: #b3b7b6;' align='center'  width='100' height='60px'>";
			echo "<td>$stt</td>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>";?>
			<img src="Hinh_nv/<?php echo $row['ANH'];?>" width="50" height="50"   style="border-radius:10px"/>
			<?php
			echo "</td>";
			echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
			echo "<td>$row[8]</td>";
			echo "<td>"; ?>
			<a href='editnhanvien.php?MANV=<?php echo $row[0];?>'> <img src='Hinh_nv/edit.png' width='20px' height='20px'></a> <a href='deletenhanvien.php?MANV=<?php echo $row[0];?>'><img src='Hinh_nv/delete.png' width='20px' height='20px'></a>
			<?php echo "</tr>";
		}
			$stt+=1;
	}
	echo '</table>';
	?>
	<div style="text-align:center; font-size:120%; margin-top:10px;">
		<?php
	$re = mysqli_query($dbc, 'Select MANV,HO,TEN,NGAYSINH,GIOITINH,DIACHI, TENLOAINV , TENPHONG  from nhanvien,phongban,loainv WHERE  nhanvien.MALOAINV=loainv.MALOAINV AND nhanvien.MAPHONG=phongban.MAPHONG');
	//tổng số mẩu tin cần hiển thị
	$numRows = mysqli_num_rows($re); 
	//tổng số trang
	$maxPage = floor($numRows/$rowsPerPage) + 1; 
	if ($_GET['page'] > 1){
	echo "<a href=" .$_SERVER['PHP_SELF']."?page=1".">Trang Đầu</a>&nbsp;&nbsp;";
	echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">Back</a> ";
	}
	for ($i=1 ; $i<=$maxPage ; $i++){
		if ($i == $_GET['page']){
			echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
	} 
	else
		echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i.">".$i."</a> ";
	}
	if ($_GET['page'] < $maxPage){
	echo "<a href=". $_SERVER['PHP_SELF']."?page=".$maxPage.">Next</a> &nbsp;&nbsp;";
	echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']=$maxPage).">Trang Cuối</a>";
	}
}
//Dong ket noi
mysqli_close($dbc);
?>
</body>
</html>