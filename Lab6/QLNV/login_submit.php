<?php
session_start();
include 'connect.php';

    if(isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"]!=''){

        $username= $_POST["username"];
        $password=$_POST["password"];

        $sql= "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $user = mysqli_query($dbc,$sql);
        if(mysqli_num_rows($user)>0){
           $_SESSION["user"]=$username;
           header("location:trangchu.php");
              
        }else{
            echo "Nhap sai";
        }
    }else{
        header("location:login.php");
    }
?>