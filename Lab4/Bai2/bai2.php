<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai2.css">
        <title> Lab 4</title>
       
    </head>
    <body>
    <?php
    
    if(isset( $_POST['tinh'])){
    	$dayso2=array();
         $dayso1 =$_POST['dayso'];
        $dayso2 = explode(",", $dayso1);
        $ketqua1 = array_sum($dayso2);
        
    }
            ?>
     
        <h2>Bài 2</h2>
        <div class="container" id="container">
          
            <div class="form-container sign-in-container">
                <form action="bai2.php" method="POST" name="form">
                    <h1>Nhập và tính trên dãy số</h1>
                    <table>
                        <tr>
                            <td>
                                <h5>Nhập vào dãy số</h5>
                            </td>
                            <td>
                            <input name="dayso" type="text" placeholder="Nhập vào dãy số"value="<?php echo $dayso1 ?>" />
                            </td>
                            <td>
                                <p>(*)</p>
                            </td>
                        </tr>
                    </table>
                
                    <button type="submit" name="tinh">Tính tổng dãy số</button>
                    
                    <input  name="ketqua1" type="text" disabled="disabled" value="<?php echo $ketqua1 ?>"/>
                   <p>(*) Các số được nhập cách nhau bằng dấu ","</p>
                    
                </form>
               
            </div>
        
        </div>
        
     
    </body>
</html>