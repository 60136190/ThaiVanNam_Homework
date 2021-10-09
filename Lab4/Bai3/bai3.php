<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai3lab4.css">
        <title> Lab 4</title>
       
    </head>
    <body>
    <?php
    
    if(isset( $_POST['tinh'])){
     

            // giải 8
                $g8 = rand(1, 99);
                if($g8 <10){
                $g8= "0$g8";
                }
                $mang8 = array($g8);

        // giai 7
                $g7 = rand(1, 999);
                if($g7 <10){
                $g7= "00$g7";
                }else if($g7 <100){
                    $g7= "0$g7";
                }
                $mang7 = array($g7);
        // giai 6
                $g6a = rand(1,9999);
                $g6b = rand(1,9999);
                $g6c = rand(1,9999);
                if($g6a < 10){
                    $g6a ="000$g6a";
                }else if($g6a <100){
                    $g6a="00$g6a";
                }else if($g6a<1000){
                    $g6a ="0$g6a";
                }
                $mang6a = array($g6a);
                //
                if($g6b < 10){
                    $g6b ="000$g6b";
                }else if($g6b <100){
                    $g6b="00$g6b";
                }else if($g6b<1000){
                    $g6b ="0$g6b";
                }
                $mang6b = array($g6b);
                //
                if($g6c < 10){
                    $g6c ="000$g6c";
                }else if($g6c <100){
                    $g6c="00$g6c";
                }else if($g6c<1000){
                    $g6c ="0$g6c";
                }
                $mang6c = array($g6c);
            // giải 5
                $g5 = rand(1,9999);
                if($g5 < 10){
                    $g5 ="000$g5";
                }else if($g5 <100){
                    $g5="00$g5";
                }else if($g5<1000){
                    $g5 ="0$g5";
                }
                $mang5 = array($g5);
            // giải 4
                $g4a = rand(1,99999);
                $g4b = rand(1,99999);
                $g4c = rand(1,99999);
                $g4d = rand(1,99999);
                $g4e = rand(1,99999);
                $g4f = rand(1,99999);
                $g4g = rand(1,99999);
                if($g4a < 10){
                    $g4a ="0000$g4a";
                }else if($g4a <100){
                    $g4a="000$g4a";
                }else if($g4a<1000){
                    $g4a ="00$g4a";
                }else if($g4a<10000){
                    $g4a ="0$g4a";
                }
                $mang4a = array($g4a);
                //
                if($g4b < 10){
                    $g4b ="0000$g4b";
                }else if($g4b <100){
                    $g4b="000$g4b";
                }else if($g4b<1000){
                    $g4b ="00$g4b";
                }else if($g4b<10000){
                    $g4b ="0$g4b";
                }
                $mang4b = array($g4b);
                //
                if($g4c < 10){
                    $g4c ="0000$g4c";
                }else if($g4c <100){
                    $g4c="000$g4c";
                }else if($g4c<1000){
                    $g4c ="00$g4c";
                }else if($g4c<10000){
                    $g4c ="0$g4c";
                }
                $mang4c = array($g4c);
                //
                if($g4d < 10){
                    $g4d ="0000$g4d";
                }else if($g4d <100){
                    $g4d="000$g4d";
                }else if($g4d<1000){
                    $g4d ="00$g4d";
                }else if($g4d<10000){
                    $g4d ="0$g4d";
                }
                $mang4d = array($g4d);
                //
                if($g4c < 10){
                    $g4e ="0000$g4e";
                }else if($g4e <100){
                    $g4e="000$g4e";
                }else if($g4e<1000){
                    $g4e ="00$g4e";
                }else if($g4e<10000){
                    $g4e ="0$g4e";
                }
                $mang4e = array($g4e);
                //
                if($g4f < 10){
                    $g4f ="0000$g4f";
                }else if($g4f <100){
                    $g4f="000$g4f";
                }else if($g4f<1000){
                    $g4f ="00$g4f";
                }else if($g4f<10000){
                    $g4f ="0$g4f";
                }
                $mang4f = array($g4f);
                //
                if($g4g < 10){
                    $g4g ="0000$g4g";
                }else if($g4g <100){
                    $g4g="000$g4g";
                }else if($g4g<1000){
                    $g4g ="00$g4g";
                }else if($g4g<10000){
                    $g4g ="0$g4g";
                }
                $mang4g = array($g4g);
                // giai 3
                $g3a = rand(1,99999);
                $g3b = rand(1,99999);
                if($g3a < 10){
                    $g3a ="0000$g3a";
                }else if($g3a <100){
                    $g3a="000$g3a";
                }else if($g3a<1000){
                    $g3a ="00$g3a";
                }else if($g3a<10000){
                    $g3a ="0$g3a";
                }
                $mang3a = array($g3a);
                //
                //
                if($g3b < 10){
                    $g3b ="0000$g3b";
                }else if($g3b <100){
                    $g3b="000$g3b";
                }else if($g3b<1000){
                    $g3b ="00$g3b";
                }else if($g3b<10000){
                    $g3b ="0$g3b";
                }
                $mang3b = array($g3b);
                   // giai 2
                   $g2 = rand(1,99999);
                   if($g2 < 10){
                       $g2 ="0000$g2";
                   }else if($g2 <100){
                       $g2="000$g2";
                   }else if($g2<1000){
                       $g2 ="00$g2";
                   }else if($g2<10000){
                       $g2 ="0$g2";
                   }
                   $mang2 = array($g2);
                     // giai 1
                     $g1 = rand(1,99999);
                     if($g1< 10){
                         $g1 ="0000$g1";
                     }else if($g1 <100){
                         $g1="000$g1";
                     }else if($g1<1000){
                         $g1 ="00$g1";
                     }else if($g1<10000){
                         $g1 ="0$g1";
                     }
                     $mang1 = array($g1);
                     // giai đặc biệt
                     $gdb = rand(1,999999);
                     if($gdb< 10){
                         $gdb ="00000$gdb";
                     }else if($gdb <100){
                         $gdb="0000$gdb";
                     }else if($gdb<1000){
                         $gdb ="000$gdb";
                     }else if($gdb<10000){
                         $gdb ="00$gdb";
                     }else if($gdb<100000){
                        $gdb ="0$gdb";
                    }
                     $mangdb = array($gdb);
           
                }

            ?>
  
     
        <h2>Bài 3</h2>
        <div class="container" id="container">
          
            <div class="form-container sign-in-container">
                <form action="bai3a.php" method="POST" name="form">
                    <h1>Kết quả sổ xố</h1>
                    <table id="bang">
                        <tr>
                            <td>
                                <h4> Giải 8 </h4>
                            </td>
                            <td>
                            <input name="giai8" type="text"  value="<?php echo $g8 ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải 7 </h4>
                            </td>
                            <td>
                            <input name="giai7" type="text"  value="<?php echo $g7 ?>" />
                            </td>
                
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải 6 </h4>
                            </td>
                            <td>
                            <input name="giai6a" type="text"  value="<?php echo $g6a ?>" />
                            </td>
                         
                            <td>
                            <input name="giai6b" type="text"  value="<?php echo $g6b ?>" />
                            </td>
                            <td>
                            <input name="giai6c" type="text"  value="<?php echo $g6c ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải 5 </h4>
                            </td>
                            <td>
                            <input name="giai5" type="text"  value="<?php echo $g5 ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải 4 </h4>
                            </td>
                            <td>
                            <input name="giai4a" type="text"  value="<?php echo $g4a ?>" />
                            </td>
                            <td>
                            <input name="giai4b" type="text"  value="<?php echo $g4b ?>" />
                            </td>
                            <td>
                            <input name="giai4c" type="text"  value="<?php echo $g4c ?>" />
                            </td>
                            <td>
                            <input name="giai4d" type="text"  value="<?php echo $g4d ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                            <input name="giai4e" type="text"  value="<?php echo $g4e ?>" />
                            </td>
                            <td>
                            <input name="giai4f" type="text"  value="<?php echo $g4f ?>" />
                            </td>
                            <td>
                            <input name="giai4g" type="text"  value="<?php echo $g4g ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải 3 </h4>
                            </td>
                            <td>
                            <input name="giai3a" type="text"  value="<?php echo $g3a ?>" />
                            </td>
                         
                            <td>
                            <input name="giai3b" type="text"  value="<?php echo $g3b ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải 2 </h4>
                            </td>
                            <td>
                            <input name="giai2" type="text"  value="<?php echo $g2 ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải 1 </h4>
                            </td>
                            <td>
                            <input name="giai1" type="text"  value="<?php echo $g1 ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4> Giải Đặc Biệt </h4>
                            </td>
                            <td>
                            <input name="giaidb" type="text"  value="<?php echo $gdb ?>" />
                            </td>
                        </tr>
                    </table>
                    <input name="so" id="doso" type="text" placeholder="Nhập vào vé số của bạn"value="" />
                    <button type="submit" name="tinh">Dò thôi nào
                    </button>
                  
                    
                </form> 
            </div>
        </div> 
    </body>
</html>