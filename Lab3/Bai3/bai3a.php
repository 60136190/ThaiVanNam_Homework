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

        $tinh1 = $_POST['tinh'];
        $soa1 = $_POST['soa'];
        $sob1 = $_POST['sob'];


        if($tinh1=='Cộng'){
             $ketqua1= $soa1 + $sob1;
        } else if($tinh1=='Trừ'){
             $ketqua1= $soa1 - $sob1;
        }else if($tinh1=='Nhân'){
            $ketqua1= $soa1 * $sob1; 
        }else if($tinh1 =='Chia'){
             $ketqua1= $soa1 / $sob1;
        }
         
    }

            ?>
          
     
        <h2>Bài 3</h2>
        <div class="container" id="container">
          
            <div class="form-container sign-in-container">
                <form action="bai3a.php" method="POST" name="form">
                    <h1>Tính Phép Tính Tên Hai Số</h1> <br>
                    <table >
                   <tr>
                    
                   <?php 
                   echo 'Phép tính: ' .$tinh1;
                   ?>
            
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
                    <tr >
                        <td>
                            Kết quả
                        </td>
                        <td>
                        <input name="kq" type="number"value="<?php echo $ketqua1 ?>" />
                        </td>
                       
                    </tr>
        
                    </table>
                    
                  <button type="submit">Tính toán</button>  
                  <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
                </form>
           
            </div>
        </div>
    </body>
</html>