<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="register.css"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Đăng kí thành viên</h3>
    <form action="register_submit.php" method="POST">
        <table>
            <tr>
                <td>Tên đăng nhập</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu</td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr>
                <td colspan="4">
                    <button type="submit" name="submit">Register</button>
                    <button type="reset">Reset</button>

                </td>
            </tr>
        
            
        </table>


    </form>
    
</body>
</html>