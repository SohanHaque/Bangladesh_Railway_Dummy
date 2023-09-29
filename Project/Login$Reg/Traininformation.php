<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railsheba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from train";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Siyam+Rupali&display=swap" rel="stylesheet">
    <title>Train Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container1 {
            transform: translateX(4in);
            transform: translateY(2in);
        }

        .small_box {
            background-color: white;
            width: 750px;
            height: 380px;
            position: relative;
            background-image: url('train-information-illustration.jpg');
            background-repeat: no-repeat;
            background-size: 45%;
            background-position: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 20px;
        }

        .search_box {
            background-color: rgb(241,241,251);
            width: 300px;
            height: 150px;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 20px;
            color: black;
            font-family: Arial, sans-serif;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .search_box2 {
            background-color: rgb(204, 204, 211);
            width: 260px;
            height: 40px;
            position: relative;
            border-radius: 6px;
            padding: 15px;
            color: black;
            font-family: Arial, sans-serif;
            font-size: 16px;
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

        .corner-button {
            position: fixed;
            top: 130px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button2 {
            position: fixed;
            top: 210px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button3 {
            position: fixed;
            top: 290px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button4 {
            position: fixed;
            top: 370px;
            right: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
        }

        .corner-button5 {
            position: fixed;
            top: 450px;
            right: 20px;
            width: 80px;
            height: 70px;
            border-radius: 50%;
            border: none;
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

.train-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
        }

.train-card h3 {
            color: #DA924E;
            margin-bottom: 10px;
        }

.train-card p {
            margin: 5px 0;
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
<body style="background-color: rgba(177, 177, 177, 0.226);">
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
    

    <div class="container1">
        <center>
        <table>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="train-card">
        <h3><?php echo $row['train_name'] ?></h3>
        <p><strong>Off Day:</strong> <?php echo $row['off_day'] ?></p>
        <p><strong>From Destination:</strong> <?php echo $row['from_des'] ?></p>
        <p><strong>From Time:</strong> <?php echo $row['from_time'] ?></p>
        <p><strong>To Destination:</strong> <?php echo $row['to_des'] ?></p>
        <p><strong>To Time:</strong> <?php echo $row['to_time'] ?></p>
    </div>
<?php } ?>
    </table>
        </center>
    </div>
    <footer style="background: #F6F9FF;padding: 0px 50px;height: 119px;width: 100%;overflow: hidden;margin-top: 380px;">
<div>
    <div>
        <div>
            <img src="bdRailwayLogo.png" style="height: 10vh;padding-left: 310px; margin-top: 15px;">
        </div>
        <div>
            <p style="font-weight: bold;font-size: 24px;line-height: 0px;color: #DA924E;padding-left: 405px;margin-top: -60px; padding-top: 0px;">Bangladesh Railway</p>
            <p style="font-size: 13px;line-height: 15px;text-align: center;color: #006747;font-weight: 400;padding-top: 8px;padding-right: 9in;">নিরাপদ . আরামদায়ক . সাশ্রয়ী</p>
        </div>
    </div>
    <div style="padding-left: 9in;margin-top: -60px;">
        <a href="http://localhost/Project/homepage/Terms.php" style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;text-decoration: none; font-size:17px;">Terms and Condition |</a>
        <a href="http://localhost/Project/homepage/privacy.php" style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;text-decoration: none;font-size:17px;">Privacy Policy</a>
    </div>
    <div>
        <p style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;margin-top: -45px; padding-left: 10in; font-size:20px;">POWERED BY FAYZUR RAHMAN </p>
        <div style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;padding-top: 15px;margin-top: 8px; padding-left: 10in;font-size:20px;">
            20-43330-1
        </div >

    </div>

</div>
</footer>
</body>

</html>