<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $newMobileNumber = $_POST['newMobileNumber'];
	$nid = $_POST['nid'];
	$userPassword = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($userPassword !== $password2) {
        echo "Passwords do not match.";
        exit;
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "railsheba";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO myreg(newMobileNumber,nid,password) VALUES ('$newMobileNumber','$nid', '$userPassword')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: Loginpage.php");
        exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Siyam+Rupali&display=swap" rel="stylesheet">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script>
    
    function validateForm() {
    var newMobileNumber = document.getElementById("newMobileNumber").value;
    var nid = document.getElementById("nid").value;
    var password = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;

    if (newMobileNumber === "") {
        alert("Mobile Number must be filled out");
        return false;
    }

    if (nid === "") {
        alert("NID/Passport/Birth Certificate Number must be filled out");
        return false;
    }

    if (password === "") {
        alert("Password must be filled out");
        return false;
    }

    if (password !== password2) {
        alert("Passwords do not match");
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
            height: 110vh;
        }

        .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }

        .box {
            background-color: #fff;
            padding: 40px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 6vh;
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
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .logo_container {
            display: flex;
            align-items: center;
        }

        .logo_image {
            transform: translateX(4in);
        }

        .reg_text {
            transform: translateX(10in);
        }

        .submit_data {
            background-color: #ffffff;
            border: none;
            color: black;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
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

<body style="background-color: rgba(228, 197, 197, 0.226);">
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
  <li><a href="http://localhost/Project/Loginpage.php">Login</a></li>
  <li><a href="http://localhost/Project/Registrationpage.php">Register</a></li>
  <li><a href="http://localhost/Project/Traininformation.php">Train Information </a></li>
  <li><a href="http://localhost/Project/Admin/admin.php">Admin </a></li>
  <li><a href="http://localhost/Project/Contactus.php">Contact Us </a></li>
</ul>
    </div>
    </nav> 
</header>
</div>
    <div class="container">
        <center>
            <img src="verify-nid-illustration.png" height="200px" alt="verify">
            <h2 style="color: rgb(56, 64, 97); font-family: serif;">Please Verify your NID</h2>
            <p style="color: rgb(59, 56, 56); font-family: Verdana, Geneva, Tahoma, sans-serif;">Enter the information below to verify and register
                <br>your NID with Bangladesh Railway Ticketing Service<br><br>If your NID  is verified through SMS, please use the
                <br>Details used during the SMS verification.</p><br>
        </center>
    </div>
    <div class="container2">
    <form method="POST" onsubmit="return validateForm()">
            <label for="newMobileNumber">Mobile Number</label>
            <input type="text" id="newMobileNumber" name="newMobileNumber" placeholder="Enter your mobile number" required>
            <label for="nid">NID/Passport/Birth Certificate Number</label>
            <input type="text" id="nid" name="nid" placeholder="Enter number" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            <label for="con-password">Confirm Password</label>
            <input type="password" id="password2" name="password2" placeholder="Enter your Password Again" required>
            <button type="submit">Register</button><br>
            <p style="color: rgb(59, 56, 56); font-family: Verdana, Geneva, Tahoma, sans-serif;">If you are under 18 years old or a foreign<br>
                passport holder, you can register with your<br>birth certificate or passport by clicking the<br>submit data button.</p>
        </form>
    </div><br><br><br><br>
    
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
        <p style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;margin-top: -45px; padding-left: 10in; font-size:20px;">POWERED BY FAYZUR RAHMAN</p>
        <div style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;padding-top: 15px;margin-top: 8px; padding-left: 10in;font-size:20px;">
            20-43330-1
        </div >

    </div>

</div>
</footer>
    </div>
</body>
</html>