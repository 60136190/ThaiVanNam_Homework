<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="login.css"/> 
</head> 
<body> 
<form action='login_submit.php' class="dangnhap" method='POST'> 
    <table>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>PassWord</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="submit"> Login</button>
             <button type="reset" name="reset">Reset</button>
            </td>
        </tr>
        <td> <a href="register.php">Register</a> </td>
    </table>
<form> 
</body> 
</html>
