<?php
session_start();
include('connect.php');

    if(isset($_POST['send'])){

      $msg= $_POST['msg'];
      $user=$_SESSION['email'];

     $insert = "INSERT INTO chat(email,noidung) VALUES('$user','$msg') ";
       if ($connect->query($insert) === TRUE){
        header("location:../user.php");
        exit();
        }
        else echo" wrong!";
      }
?>