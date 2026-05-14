<?php
    session_start();
    include("db.php");

    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if($result-> num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row["id"];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_password'] = $row['password'];
            header('Location: profile.php');
        }
        else{
            echo"Details error";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in/Sign up</title>
    <link rel="stylesheet" href="stylesheet.css">


    <!-- This is the navigatin bar sectiom-->
     <header>
        
     </header>

</head>




<body>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            
        </nav>
    </div>    
    <h1>Affordable Farm Tools Rental — When You Need It</h1><br>

<!-- This is the login form-->
   <section class="login">
    <form action="login.php" onsubmit="" method="post">
        <input name="email" type="email" placeholder="E-Mail"><br>
        <input name="password" type="password" placeholder="Password"><br>
        <input name="submit" type="submit" value="Log In">
        <p>Dont't have an account?<a href="registration.php"> Sign Up</a></p>
    </form>
   </section>


<!--this is the infomation regarding farm tools rental-->
   <section class="content">
    <h2>What is Farm Tools Rental?</h2>
    <p>Farm tools rental is a service that allows farmers to hire 
        agricultural equipment for a specific period of time instead of buying it.<br>
        This helps reduce the high cost of purchasing machines while still giving access to modern 
        farming tools.
    </p><br>
    <h2>Why Farm Tools Rental is Important</h2>
    <p>Many farmers cannot afford expensive 
        equipment like tractors or harvesters. Renting provides:
    <ul>
        <li><p>Cost savings: No need for large upfront investment</p></li>
        <li><p>Access to modern equipment: Use advanced tools when needed</p></li>
        <li><p>Flexibility: Rent only during planting or harvesting seasons</p></li>
        <li><p>Increased productivity: Get more work done in less time</p></li>
    </ul>
    </p>
   </section> 

</body>
</html>