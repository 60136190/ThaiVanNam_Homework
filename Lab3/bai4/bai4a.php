<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai4.css">
        <title> Demo form php</title>
       
    </head>
    <body>
    <?php

    if(isset( $_POST['tinh'])){

     
        $hoten1 = $_POST['hoten'];
        $diachi1 = $_POST['diachi'];
        $sdt1 = $_POST['sdt'];
        $gt1 = $_POST['gioitinh'];
        $qt = $_POST['quoctich'];
        $ghichu1 = $_POST['ghichu'];
        
       
    }


            ?>
          
     
        <h2>Bài 4</h2>
        <div class="container" id="container">
                       <form action="bai4a.php" method="POST" name="form">
                    <h1>Login is correct, Your infomation!</h1> <br>
                    <table>
                    <tr>
                        <td>
                        <?php 
                   echo 'Họ tên ' .$hoten1;
                   ?>
                        </td>
                 
                    </tr>
                    
                    <tr >
                    <td>
                        <?php 
                   echo 'Giới tính ' .$gt1;
                   ?>
                        </td>
                    </tr>
                   
                    <tr >
                    <td>
                        <?php 
                   echo 'Địa chỉ ' .$diachi1;
                   ?>
                        </td>
                    </tr>
                   
                    <tr>
                    <td>
                        <?php 
                   echo 'Điện thoại ' .$sdt1;
                   ?>
                        </td>
                   <td >
                
                </tr>
             
                <tr>
                <td>
                        <?php 
                   echo 'Quốc tịch ' .$qt;
                   ?>
                        </td>
                </tr>
                <tr>
                <td>
                    Môn đã học
                        <?php   
                    $php= isset($_POST["subject"]);
                    if($php) echo "PHP & MYSQL &nbsp;&nbsp;";
                    $c= isset($_POST["subject1"]); 
                    if($c) echo "C# &nbsp;&nbsp;";  
                    $xml= isset($_POST["subject2"]);
                    if($xml) echo "XML &nbsp;&nbsp;";   
                    $python= isset($_POST["subject3"]);
                    if($python) echo"Python &nbsp;&nbsp;";
                   ?>
                        </td>
                </tr>
                
                
                       <tr>
                       <td>
                        <?php 
                   echo 'Ghi chú ' .$ghichu1;
                   ?>
                        </td>
                       </tr>
                  
                      
                    </table>
                 
                </form>
           
         
        </div>
    </body>
</html>