<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobileNumber = $_POST['mobileNumber'];
    $password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "railsheba";

    $conn = new mysqli($servername, $username, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM myreg WHERE newMobileNumber='$mobileNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        if ($password === $storedPassword) {
            header("Location: http://localhost/Project/homepage/homepage.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Siyam+Rupali&display=swap" rel="stylesheet">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

<script>
    function validateForm() {
    var mobileNumber = document.getElementById("mobileNumber").value;
    var password = document.getElementById("password").value;
    if (mobileNumber === "" || password === "") {
        alert("Both fields must be filled out");
        return false;
    }

    if (!/^\d+$/.test(mobileNumber)) {
        alert("Mobile number must contain only digits");
        return false;
    }

    return true;
}
</script>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: rgb(0, 104, 71);
            border: none;
            color: white;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(7, 157, 73);
        }

        .corner-button {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button2 {
            position: fixed;
            top: 100px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button3 {
            position: fixed;
            top: 180px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button4 {
            position: fixed;
            top: 260px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button5 {
            position: fixed;
            top: 340px;
            right: 20px;
            width: 80px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .dotted-text {
            text-decoration: dotted;
        }
        .logo_box {
    background-color: #F6F9FF;
    padding: 40px;
    top: 0;
    left: 0;
    width: 100vw;
    height: 6vh;
}

.logo_img {
    margin-left: 300px;
    margin-top: -33px;
    overflow-clip-margin: content-box;
    overflow: clip;
}

.logo_text {
    transform: translateX(4in);
    display: block;
    font-size: 1.5em;
    margin-block-start: -3em;
    margin-block-end: 12.83em;
    margin-inline-start: 12px;
    margin-inline-end: -1px;
    font-weight: bold;
}


/*nav ul {
    float: right;
    margin-top: -98px;
    margin-right: 325px;
}*/

nav li {
    display: inline-block;
    list-style: none;
    font-size: 18px;
    padding: 0px 20px;
    color: black;
    text-decoration: none;
}


/*nav li a {
    color: black;
    font-size: 18px;
    padding: 0px 20px;
}*/

.ul_li {
    float: right;
    display: inline-block;
    margin-top: -98px;
    margin-right: 325px;
    font-size: 18px;
    padding: 0px 20px;
    text-decoration: none;
}


    </style>
</head>

<body style=" background-image: url(animeTrain.jpg); height: 100%; background-repeat: no-repeat; background-size: cover;" >
<div>
    <header>
    <div class="logo_box">
    <div>
        <td><img src="bdRailwayLogo.png" height="80px" alt="Bangladesh Railway" class="logo_img"></td>
        <td><h2 style="color: #DA924E" class="logo_text">Bangladesh<br>Railway</h2></td>
    </div>
    </div>
    <nav>
    <div class="ul_li">  
    <ul>
    <li><a href="http://localhost/Project/homepage/homepage.php">Home</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Loginpage.php">Login</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Registrationpage.php">Register</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Traininformation.php">Train Information </a></li>
  <li><a href="http://localhost/Project/Admin/admin.php">Admin </a></li>
  <li><a href="http://localhost/Project/Login$Reg/Contactus.php">Contact Us </a></li>
</ul>
    </div>
    </nav> 
</header>
</div>
    <div class="container">
        <div class="login-box">
            <center>
                <img src="bdRailwayLogo.png" height="150px" alt="Bangladesh Railway">
                <h2 style="color: #d3955d">Bangladesh Railway</h2>
                <p class="dotted-text" style="color: #006847">নিরাপদ &#x2022; আরামদায়ক &#x2022; সাশ্রয়ী</p><br>
            </center>
            <form method="POST" onsubmit="return validateForm();">
                <label for="mobileNumber">Mobile Number</label>
                <input type="text" id="mobileNumber" name="mobileNumber" placeholder="Enter your mobile number" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <button type="submit">Sign In</button><br>
                <a href="http://localhost/Project/Login$Reg/Registrationpage.php" style="color: #4fb854;" align="center">Register</a><br>
            </form>
        </div>
    </div>
    <div>
    <footer style="background: #F6F9FF;padding: 0px 50px;height: 119px;width: 100%;overflow: hidden;margin-top: 250px;">
<div>
    <div>
        <div>
            <img src="bdRailwayLogo.png" style="height: 10vh;padding-left: 310px; margin-top: 15px;">
        </div>
        <div>
            <p style="font-weight: bold;font-size: 24px;line-height: 0px;text-align: ;color: #DA924E;padding-left: 405px;margin-top: -60px; padding-top: 0px;">Bangladesh Railway</p>
            <p style="font-size: 13px;line-height: 15px;text-align: center;color: #006747;font-weight: 400;padding-top: 8px;padding-right: 9in;">নিরাপদ . আরামদায়ক . সাশ্রয়ী</p>
        </div>
    </div>
    <div style="padding-left: 9in;margin-top: -60px;">
        <a href="http://localhost/Project/homepage/Terms.php" style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;text-decoration: none; font-size:17px;">Terms and Condition |</a>
        <a href="http://localhost/Project/homepage/privacy.php" style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;text-decoration: none;font-size:17px;">Privacy Policy</a>
    </div>
    <div>
        <p style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;margin-top: -45px; padding-left: 10in; font-size:20px;">POWER BY FAYZUR RAHMAN</p>
        <div style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;padding-top: 15px;margin-top: 8px; padding-left: 10in;font-size:20px;">
            20-43330-1
        </div >

    </div>

</div>
</footer>
    </div>
</body>
</html>
