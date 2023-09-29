
<!DOCTYPE html>
<html>

<head>
  <title>Destination</title>
  
  <style>
    .ul_li{
    float:right;
    display: inline-block;
    margin-top: -98px;
    margin-right: 325px;
    font-size: 18px;
    padding: 0px 20px;
    text-decoration: none;
    }
    nav li {
    display: inline-block;
    list-style: none;
    font-size: 18px;
    padding: 0px 20px;
    color: black;
    text-decoration: none;
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
  </style>
</head>

<body>
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
    <ul style="float: right;margin-top: -85px;padding-right: 244px;text-decoration: none;color: black;">
    <li><a href="http://localhost/Project/homepage/homepage.php">Home</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Loginpage.php">Login</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Registrationpage.php">Register</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Traininformation.php">Train Information </a></li>
  <li><a href="http://localhost/Project/Admin/admin.php">Admin </a></li>
  <li><a href="http://localhost/Project/Login$Reg/Contactus.php">Contact Us </a></li>
</ul>
    </div>
    </nav> 
    </div>
</header> 
<?php

 

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $start = $_POST["start"];
    $destination = $_POST["destination"];
    $class = $_POST["class"];
    $Date = $_POST["Date"];

 

    $response = "Directions from $start to $destination using $class on $Date";

 

    // Display the response to the user
    echo $response;
}

?>


  <footer style="background: #F6F9FF;padding: 0px 50px;height: 119px;width: 100%;overflow: hidden; margin-top:660px;">
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
        <p style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;margin-top: -45px; padding-left: 10in; font-size:20px;">POWER BY SHAHRIAZ POLOK</p>
        <div style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;padding-top: 15px;margin-top: 8px; padding-left: 10in;font-size:20px;">
            21-44604-1
        </div >

    </div>

</div>
</footer>
</body>

</html>