<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'connect.php';
if(isset($_POST['submit'])&& $_POST["username"]!='' && $_POST["password"]!='' && $_POST["repassword"]!=''){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];


    if($password != $repassword){
        header("location:register.php");
    }
    $sql= "SELECT * FROM user WHERE username='$username'";
    $old = mysqli_query($dbc,$sql);
 
    if(mysqli_num_rows($old) > 0){
        header("location:register.php");
    }
    $sql="INSERT INTO user (username,password) VALUES('$username','$password')";
    mysqli_query($dbc,$sql);
    echo "Đã đăng kí thành công";
    
}else{
    header("location:register.php");
}
?>

<td> <a href="login.php">Register</a> </td>
</body>
</html>