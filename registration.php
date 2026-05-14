<?php
    session_start();
    include("db.php");

    if(isset($_POST["submit"])){
        $name1 = $_POST["name1"];
        $name2 = $_POST["name2"];
        $name = "{$name1} {$name2}";
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $pass1 = $_POST["pass1"];
        $pass2 = $_POST["pass2"];
        $password = "{$pass1}";
        $role = "User";

        if($pass1 !== $pass2){
            echo"Password mismatch";
        }
        else{
            $sql = "INSERT INTO users(name, email, phone, password, role) VALUES('$name','$email','$phone', '$password','$role')";
            $result = mysqli_query($conn,$sql);

            if (!$result){
                echo "error:{$conn->error}";
                }
            else{
                echo "signed up";
                }
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
    <div class="nav">
        <nav>
            <ul>
                <li><a href="Home.html">HOME</a></li>
                <li><a href="#">PROFILE</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            
        </nav>
    </div>
</head>




<body>
    <h1>Affordable Farm Tools Rental — When You Need It</h1><br>



<!-- This is the regitration form-->
   <section class="login" onsubmit="singUp()">
    <form action="registration.php" method="post">
        <input name="name1" type="text" placeholder="First Name" required><br>
        <input name="name2" type="text" placeholder="Surname" required><br>
        <input name="email" type="email" placeholder="E-Mail" required><br>
        <input name="phone" type="phone" placeholder="Phone" required><br>
        <input name="pass1" type="password" placeholder="Password" required><br>
        <input name="pass2" type="password" placeholder="Retype-Password" required><br>
        <input name="submit" type="submit" value="Sign up">
        <p>Already have an account?<a href="Login.php"> Log in</a></p>
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
<script src="index.js"></script>
</html>