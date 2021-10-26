<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai2.css">
        <title> Demo form php</title>
       
    </head>
    <body>
    <?php
    $tenchuho1 ='thai';
    define('dongia',2000);
    if(isset( $_POST['tenchuho'])){

        $tenchuho1 = $_POST['tenchuho'];
        $chisocu1 = $_POST['chisocu'];
        $chisomoi1 = $_POST['chisomoi'];
        $dongia1 = $_POST['dongia'];
        $ketqua1 = ($chisomoi1 - $chisocu1) * $dongia1 ;
    }
            ?>
     
        <h2>Bài 2</h2>
        <div class="container" id="container">
          
            <div class="form-container sign-in-container">
                <form action="bai2.php" method="POST" name="form">
                    <h1>Tính Tiền Điện</h1> <br>
                    <table>
                    <tr>
                        <td>
                            Tên chủ hộ
                        </td>
                        <td>
                        <input name="tenchuho" type="text" placeholder="Nguyễn Văn A" value="<?php echo $tenchuho1 ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Chỉ số cũ
                        </td>
                        <td>
                        <input name="chisocu" type="number" value="<?php echo $chisocu1 ?>" />
                        </td>
                        <td>
                        <p>(Kw)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Chỉ số mới
                        </td>
                        <td>
                        <input name="chisomoi" type="number"value="<?php echo $chisomoi1 ?>" />
                        </td>
                        <td>
                        <p>(Kw)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Đơn giá
                        </td>
                        <td>
                        <input name="dongia" type="number"  value="<?php echo dongia ?>" />
                        </td>
                        <td>
                        <p>(VNĐ)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <h3>Số tiền thanh toán</h3>
                        </td>
                        <td>
                        <input id="aa" name="ketqua1" type="number" disabled="disabled" value="<?php echo $ketqua1 ?>"/>
                        </td>
                        <td>
                        <p>(VNĐ)</p>
                        </td>
                    </tr>
                    </table>
                    
                  <button type="submit">Tính toán</button>  
                </form>
            </div>
        </div>
    </body>
</html>