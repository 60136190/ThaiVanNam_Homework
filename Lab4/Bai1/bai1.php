<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="bai1lab4.css">
	<title>Lab 4</title>
</head>
<body>
<?php
	if(isset($_POST['n'])) $n=$_POST['n'];
	else $n=0;

	$ketqua="";
	if(isset($_POST['hthi'])) 
	{	//Tạo mảng có n phần tử
		$arr=array();
		for($i=0;$i<$n;$i++)
		{
			$x=rand(1,1000);
			$arr[$i]=$x;
		}
		//In ra mảng vừa tạo
		$ketqua="Mảng được tạo là:" .implode(" ",$arr)."&#13;&#10;";
		//Tìm và in ra các số dương chẵn trong mảng dùng hàm foreach
		sort($arr);
        $ketqua1="Mang sau khi sap xep la:" .implode(" ",$arr)."&#13;&#10;";
	
	}
  
?>
 <h2>Bài 1</h2>
        <div class="container" >
          
            <div class="form-container sign-in-container">
                <form action="bai1.php" method="POST" name="form">
                    <h1>Nhập Số n</h1>
	<input type="nummber" name="n"  value="<?php echo $n?>"/>
	Insert Number
	 <input type="nummber" name="insert"  value=""/>
	
	<button type="submit" name="hthi">Xử lý</button>
	 <br>
	<textarea cols="75" rows="10" name="ketqua" id="khung"> 
        <?php echo $ketqua?>
        <?php echo $ketqua1?>
        <?php 
		$vitri = 3;
        $insert1 = $_POST['insert']; 
		array_splice( $arr, $vitri, 0, $insert1 );   
		echo "Sau khi chèn phần tử '$insert1' thì mảng sẽ như sau: "."";  
		foreach ($arr as $x1)   
		{
			echo "$x1 ";
		}  
	
        ?>

		<?php 

		$ketqua2="";
		echo "Sau khi sắp xếp thì mảng sẽ như sau: ".""; 

		for($i=0; $i<$vitri;$i++){
			$arr1[$i]=$arr[$i];
		}
		sort($arr1);
		foreach($arr1 as $v){
			$ketqua2.= "$v ";
			
		}
	
		$ketqua2.=$insert1." ";
		///
		for($i=$vitri+1; $i<count($arr);$i++){
			$arr2[$i] = $arr[$i];
		}
		rsort($arr2);
		foreach($arr2 as $v){
			$ketqua2.= "$v ";
		}
		echo $ketqua2;
		 
		?>


    </textarea>                         
                </form>       
            </div>  
        </div>
    </body>
</html>