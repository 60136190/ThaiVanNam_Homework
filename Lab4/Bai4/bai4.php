<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="bai4lab4.css">
	<title>Lab 4</title>
</head>
<body>
                <?php 
                  
                if(isset( $_POST['tinh'])){
                    $son = $_POST['n'];
                    $som = $_POST['m'];
                    $ketqua = $_POST['ketqua1'];
                    $ketqua ="";
                    $a= array();
                    for($i=0; $i< $son; $i ++){
                        for($j=0;$j<$som;$j++){
                            $tron = rand(0,100);
                            $a[$i][$j]= $tron;
                        }
                    }
                    
                    
                    for($i=0;$i<$son;$i++)
                    {   $ketqua.="\n";
                        foreach($a[$i] as $val)
                        {
                            $ketqua.=" $val ";
                        }
                       
                    }

                    /// dem phan tu le
                $count=0;
                    for($i=0;$i<$son;$i++)
                    {
                        for($j=0;$j<$som;$j++)
                        {
                                     
                            if($a[$i][$j]%2!=0)
                            {
                                $count++;
                            }
                            
                            
                        }
                    }
                    $ketqua.="\nsố phần tử lẻ:".$count;       

                    // doi mang thanh 1
                         
                    for($i=0; $i< $son; $i ++){
                        for($j=0;$j<$som;$j++){
                            $tron = 1;
                            if($a[$i][$j] !=0){
                                $a[$i][$j]= $tron;
                            }
                            
                        }
                    }
                    
                    
                    for($i=0;$i<$son;$i++)
                    {   $ketqua.="\n";
                        foreach($a[$i] as $val)
                        {
                           
                            $ketqua.= " $val ";
                        }
                       
                    }
        
                
                      
                }
                
                ?>
 <h2>Bài 1</h2>
        <div class="container" >
          
            <div class="form-container sign-in-container">
                <form action="bai4.php" method="POST" name="form">
                    <h1>Nhập Số n</h1>
                    <table>
                        <tr>
                            <td>
                                <h5>Nhập n</h5>
                            </td>
                            <td>
                            <input type="nummber" name="n"  value=""/>
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <h5>Nhập m</h5>
                            </td>
                            <td>
                            <input type="nummber" name="m"  value=""/>
                            </td>
                        </tr>
                    </table>
	                <button type="submit" name="tinh">Xử lý</button>
                    <textarea name="ketqua1" id="" cols="30" rows="10"><?php echo $ketqua ?></textarea>
                </form>       
            </div>  
        </div>
    </body>
</html>