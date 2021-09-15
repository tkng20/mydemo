<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="css/demo2.css" rel="stylesheet">
    <link href="css/chatbox.css" rel="stylesheet">
</head>

<body>
    <div id="main">
        <div class="topnav">
            <div>
                <a href="#" style="cursor:pointer" onclick="openNav()">&#9776;<b>Home<b></a>
                <a href="#fruit"><b>Fruit</b></a>
                <a href="#cake"><b>Cake</b></a>
                <a href="#drink"><b>Drink</b></a>
                <div class="login-container">
                    <?php
                        if(isset($_SESSION['email'])){
                            echo " <button  class=\"btn button-primary\" onclick=\"window.location.href='includes/logout.php'\">Logout</button> ";
                            echo " <button  class=\"btn button-primary\" onclick=\"window.location.href='profile.php'\">Profile</button>";
                            echo " <button class=\"btn button-primary\" style=\"font-size: 18px;\">&#x1F6D2</button>";
                            echo " <div class=\"dropdown\">
                                        <button class=\"btn button-primary dropbtn\" style=\"font-size: 18px;\">&#x1F514</button>
                                        <div class=\"dropdown-content\">
                                        <a href=\"#\">Link 1</a>
                                        <a href=\"#\">Link 2</a>
                                        <a href=\"#\">Link 3</a>
                                        </div>
                                    </div>
                            ";
                        }
                        else{
                            echo " <button class=\"btn button-primary\" onclick=\"document.getElementById('id01').style.display='block'\">Login</button>";
                            echo " <button class=\"btn button-primary\" onclick=\"document.getElementById('id02').style.display='block'\">Sign up</button>";
                            echo " <button class=\"btn button-primary\" style=\"font-size: 18px;\">&#x1F6D2</button>";
                        }
                    ?>
                </div>
            </div>
            <form class="example" action="search.php" style="text-align: center;">
                <input type="text" placeholder="Search.." name="search" style="width: 70%; height:40px;">
                <button type="submit" class="button btn-primary btn-lg" style="background-color: #007697; border: none"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div> 
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Account</a>
        <a href="#">Services</a>
        <a href="#">About</a>
        <a href="#">Help</a>
    </div>
