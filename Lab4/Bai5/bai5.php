<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="bai5lab4.css">
	<title>Lab 4</title>
</head>
<body>
<?php 	
 $mamh="";
 $tenmh="";
 $donvt="";
 $soluong=0;
 $mang = array();
  if(isset( $_POST['tinh'])){
	 $mamh =$_POST['mmh'];
	 $tenmh =$_POST['tmh'];
	 $donvt =$_POST['dvt'];
	 $soluong =$_POST['sl'];
	
		
		$mang[0]=$mamh;
		$mang[1]=$tenmh;
		$mang[2]=$donvt;
		$mang[3]=$soluong;
  }

	
	
  
	$songlist=array
	(
		array("A001","Sữa Tắm Xmen","Chai 50ml",50),
		array("A002","Dầu gội Lifeboy","Chai 50ml",20),
		array("B001","Dầu ăn Cái Lân","Chai 1 lít",10),
		array("B002","Đường cát","Kg",15),
		array("C001","Chén sứ Minh Long","Bộ 10 cái",2)
	
    );

	 $newarray=	array_push($songlist,$mang);
		echo $newarray++;
	



	?>
	 <h2>Danh sách mặt hàng</h2>
	 <table border="1">
	 	<tr>
	 		<th>
	 			<b>Mã mặt hàng</b>
	 		</th>
	 		<th>
                 <b>Tên mặt hàng</b>
            </th>
            <th>
                 <b>Đơn vị tính</b>
            </th>
            <th>
                 <b>Số Lượng</b>
            </th>
	 	
			<?php
				for ($row = 0; $row <count($songlist); $row++)
				{
				echo "<tr>\n";
				foreach ($songlist[$row] as $val)
				{
				echo "<td>$val</td>\n";
				}
				echo "</tr>\n";
				}
			
			?>
	 </table>
			
	 <div class="container1" >
          
		  <div class="form-container sign-in-container">
			  <form action="bai5.php" method="POST" name="form">
				  <table id="bang">
					  <tr>
						  <td>
							  <h4> Mã mặt hàng </h4>
						  </td>
						  <td>
						  <input name="mmh" type="text"  value="<?php echo $mamh ?>" />
						  </td>
					  </tr>
					  <tr>
						  <td>
							  <h4> Tên mặt hàng </h4>
						  </td>
						  <td>
						  <input name="tmh" type="text"  value="<?php echo $tenmh ?>" />
						  </td>
			  
					  </tr>
					  <tr>
						  <td>
							  <h4> Đơn vị tính </h4>
						  </td>
						  <td>
						  <input name="dvt" type="text"  value="<?php echo $donvt ?>" />
						  </td>
			  
					  </tr>
					  <tr>
						  <td>
							  <h4> Số lượng </h4>
						  </td>
						  <td>
						  <input name="sl" type="text"  value="<?php echo $soluong ?>" />
						  </td>
			  
					  </tr>
					 
			</table>
				  <button type="submit" name="tinh">Insert Data
				  </button>
				
			
				  
			  </form> 
		  </div>
	  </div>
    </body>
</html>