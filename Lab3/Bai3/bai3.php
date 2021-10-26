<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai3.css">
        <title> Demo form php</title>
       
    </head>
    <body>
    <?php

$soa1 = 0;
$sob1 =0;
$ketqua1 =0;
    if(isset( $_POST['soa']) && isset($_POST['sob'])){

        if($soa1 ==0){
            echo 'Vui lòng nhập lại ';
        }
        $tinh1 = $_POST['tinh'];
        $soa1 = $_POST['soa'];
        $sob1 = $_POST['sob'];

    
         
    }

            ?>
          
     
        <h2>Bài 3</h2>
        <div class="container" id="container">
          
            <div class="form-container sign-in-container">
                <form action="bai3a.php" method="POST" name="form">
                    <h1>Tính Phép Tính Tên Hai Số</h1> <br>
                    <table >
                   <tr>
                   <td colspan="2">
                <input type="radio" id="cong" name="tinh" value="Cộng" checked="checked">
                    <label for="add1">Cộng</label> 
                <input type="radio" id="tru" name="tinh" value="Trừ">
                    <label for="sub1">Trừ</label>  
                <input type="radio" id="nhan" name="tinh" value="Nhân">
                    <label for="mul1">Nhân</label> 
                <input type="radio" id="chia" name="tinh" value="Chia">
                    <label for="div1">Chia</label>
                <br>
             </td>
                    </tr>

                    <tr>
                        <td>
                            Số thứ nhất
                        </td>
                        <td>
                        <input name="soa" type="number" value="<?php echo $soa1 ?>" />
                        </td>
                     
                    </tr>
                    <tr >
                        <td>
                            Số thứ hai
                        </td>
                        <td>
                        <input name="sob" type="number"value="<?php echo $sob1 ?>" />
                        </td>
                       
                    </tr>
                   
        
                    </table>
                    
                  <button type="submit">Tính toán</button>  
                </form>
           
            </div>
        </div>
    </body>
</html>