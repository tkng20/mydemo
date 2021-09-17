<?php
header('Content-Type: text/html; charset=UTF-8');
include('connect.php');
  
if(isset($_POST['login'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from taikhoan where email='".$email."'AND matkhau='".$password."' limit 1";

    
    $result = $connect->query($sql);
    
    if($result->num_rows==1){
        session_start();
        $_SESSION['email']=$email;
        header("location:../user.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
}
$connect->close();
?>