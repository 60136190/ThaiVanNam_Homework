<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai3alab4.css">
        <title> Lab 4</title>
       
    </head>
    <body>
    <?php
    
    if(isset( $_POST['tinh'])){
        $giaitam = $_POST['giai8'];
        $giaibay = $_POST['giai7'];
        $giaisaua = $_POST['giai6a'];
        $giaisaub = $_POST['giai6b'];
        $giaisauc = $_POST['giai6c'];
        $giainam = $_POST['giai5'];
        $giaibona = $_POST['giai4a'];
        $giaibonb = $_POST['giai4b'];
        $giaibonc = $_POST['giai4c'];
        $giaibond = $_POST['giai4d'];
        $giaibone = $_POST['giai4e'];
        $giaibonf = $_POST['giai4f'];
        $giaibong = $_POST['giai4g'];
        $giaibaa = $_POST['giai3a'];
        $giaibab = $_POST['giai3b'];
        $giaihai = $_POST['giai2'];
        $giaimot = $_POST['giai1'];
        $giaidacbiet = $_POST['giaidb'];
        $so1 = $_POST['so'];
        $mang8 = array($giaitam);
        $mang7 = array($giaibay);
        $mang6a = array($giaisaua);
        $mang6b = array($giaisaub);
        $mang6c = array($giaisauc);
        $mang5 = array($giainam);
        $mang4a = array($giaibona);
        $mang4b = array($giaibonb);
        $mang4c = array($giaibonc);
        $mang4d = array($giaibond);
        $mang4e = array($giaibone);
        $mang4f = array($giaibonf);
        $mang4g = array($giaibong);
        $mang3a = array($giaibaa);
        $mang3b = array($giaibab);
        $mang2 = array($giaihai);
        $mang1 = array($giaimot);
        $mangdb = array($giaidacbiet);


        $trungso=array();
        $trungso = array_merge($mang8,$mang7,$mang6a,$mang6b,$mang6c,$mang5,$mang4a,$mang4b,$mang4c,$mang4d,$mang4e,$mang4f,$mang4g,
                                $mang3a,$mang3b,$mang2,$mang1,$mangdb);
       
            if($so1 ==$trungso[0] || $so1 ==$trungso[1] ||$so1 ==$trungso[2] ||$so1 ==$trungso[2] ||
            $so1 ==$trungso[4] ||$so1 ==$trungso[5] ||$so1 ==$trungso[6] ||$so1 ==$trungso[7] ||
            $so1 ==$trungso[8] ||$so1 ==$trungso[9] ||$so1 ==$trungso[10] ||$so1 ==$trungso[11] ||
            $so1 ==$trungso[12] ||$so1 ==$trungso[13] ||$so1 ==$trungso[14] ||$so1 ==$trungso[15] ||
            $so1 ==$trungso[16] ||$so1 ==$trungso[17]){
               $trung = "Trúng rồi";
            }else{
                $trung = "Bạn thua rồi";
            }
 
            }
            ?>
     
        <h2>Bài 3</h2>
        <div class="container" id="container">
          
            <div class="form-container sign-in-container">
                <form action="bai3.php" method="POST" name="form">
                    <h1>Kết quả sổ xố</h1>
                   
                   
                    <input name="ketqua" id="doso1"  type="text" disabled="disabled" value="<?php echo $trung ?>"/>   
                    <button type="submit" id="back" name="tinh">Quay lại trang trước  </button>
                  
                </form> 
            </div>
        </div> 
    </body>
</html>