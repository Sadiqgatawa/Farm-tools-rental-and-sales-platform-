<?php
session_start();
session_destroy();

if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="Home.html">HOME</a></li>
                <li><a href="#">PROFILE</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="Login.html">LOGIN/SIGN-UP</a></li>           
            </ul>    
        </nav>
    </div>
<div class="profile-container">
    <div class="profile_card">
        <div class="image"><img src="hoto.png" alt=""></div>
        <div>
            <h2><?php $_SESSION['user_name'] ;?></h2>
            <h2><?php $_SESSION['user_email'] ;?></h2>
        </div>
    </div>
</div>
<div class="tools-section">
    <div class="tools-container">
        

    </div>
</div>
    


</body>
</html>