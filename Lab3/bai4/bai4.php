<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="bai4.css">
        <title> Demo form php</title>
       
    </head>
    <body>
 
          
     
        <h2>Bài 4</h2>
        <div class="container" id="container">
                       <form action="bai4a.php" method="POST" name="form">
                    <h1>Nhập thông tin của bạn</h1> <br>
                    <table>
                    <tr>
                        <td>
                            Họ tên
                        </td>
                        <td>
                        <input  name="hoten" type="text" />
                        </td>
                
                     
                    </tr>
                    <table>
                    <tr >
                        <td>
                            Địa chỉ
                        </td>
                        <td>
                        <input name="diachi" type="text" />
                        </td>
                  
                    </tr>
                    </table>
                    <table>
                    <tr >
                        <td>
                            Số điện thoại
                        </td>
                        <td>
                        <input name="sdt" type="number" />
                        </td>
                      
                    </tr>
                    </table>
                    <table>
                    <tr>
                        <td>
                        <label for="add1">Giới tính</label> 
                        </td>
                   <td >
                <input type="radio" id="nam" name="gioitinh" value="Nam" checked="checked">
                    <label for="add1">Nam</label> 
                    </td>
                    <td >
                <input type="radio" id="nu" name="gioitinh" value="Nữ">
                    <label for="sub1">Nữ</label>  
                <br>
                </td>
                </tr>
                </table>
                <table>
                <tr>
                    <td>
                        Quốc tịch
                    </td>
                    <td>
                    <select name="quoctich">
                    <option value="vietnam">
                        Việt nam
                    </option>
                    <option value="My">Mỹ</option>
                    <option value="Phap">Pháp</option>
                    </optgroup>
                    </select>
                    </td>
            
                </tr>
                <tr>
                    <td>
                        Các môn đã học
                    </td>
                    <td>
                    <input type="checkbox" id="subject1" name="subject" value="PHP">
                    <label for="subject1"> PHP & MySQL</label><br>
                    </td>
                    <td>
                    <input type="checkbox" id="subject2" name="subject1" value="C#">
                    <label for="subject2"> C#</label><br>
                    </td>
                    <td>
                    <input type="checkbox" id="subject3" name="subject2" value="XML">
                    <label for="subject3"> XML</label><br>
                    </td>
                    <td>
                    <input type="checkbox" id="subject4" name="subject3" value="Python">
                    <label for="subject4"> Python</label><br>
                    </td>
                </tr>
                </table>
                   <table>
                       <tr>
                           <td>
                               Ghi chú
                           </td>
                           <td>
                           <textarea id="textarea" name="ghichu" rows="4" cols="50">
                            
                            </textarea>
                           </td>
                       </tr>
                   </table>
                    <table>
                        <tr>
                            <td>
                            <button name="tinh" type="submit">Gửi </button> 
                            </td>
                            <td>
                            <button type="reset">Hủy</button> 
                            </td>
                        </tr>
                    </table>
                 
                </form>
           
         
        </div>
    </body>
</html>