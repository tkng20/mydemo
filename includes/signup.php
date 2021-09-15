<?php
header('Content-Type: text/html; charset=UTF-8');
include('connect.php');

if(isset($_POST['submit'])){

    $username = $_POST['email'];
    $password = $_POST['psw'];
    $repeat = $_POST['psw-repeat'];

    $sql="select * from taikhoan where email='".$username."'";
    $result = mysqli_query($connect,$sql);

    if( $password != $repeat){
        header("location:../user.php");
        exit();
    }

    elseif ($result->num_rows == 1){
        echo "tai khoan da ton tai";
    } 
    else {
        $insert= "INSERT INTO TAIKHOAN(email,matkhau) VALUES('$username','$password')";
        if (mysqli_query($connect,$insert) === TRUE) {
            header("location:../user.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
}

$connect->close();
?>