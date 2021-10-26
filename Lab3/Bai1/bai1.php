<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai1.css">
        <title> Demo form php</title>
       
    </head>
    <body>
    <?php
        $bankinh = $_POST['bankinh'];
        $ketqua1 = $bankinh*$bankinh *3.14 ;
       
    
            ?>
     
        <h2>Bài 1</h2>
        <div class="container" id="container">
          
            <div class="form-container sign-in-container">
                <form action="bai1.php" method="POST" name="form">
                    <h1>Tính Diện Tích Hình Tròn</h1>
                    <input name="bankinh" type="number" placeholder="Bán hình kình tròn"value="<?php echo $bankinh ?>" />
                    <input name="ketqua1" type="number" disabled="disabled" value="<?php echo $ketqua1 ?>"/>
                    <button type="submit">Tính toán</button>
                    
                </form>
               
            </div>
        
        </div>
        
     
    </body>
</html>