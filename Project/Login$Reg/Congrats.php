<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
    
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }
    
        button {
            background-color: rgb(0, 104, 71);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    
        button:hover {
            background-color: rgb(7, 157, 73);
        }

        .header {
            background-color: #d3955d;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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
    <div class="header">
        <h1>User (Buy Ticket)</h1>
    </div>

    <div class="container">
        <h1>Congratulations!!!<br>
            <br>Ticket Purchase is Successful</h1>
    </div>
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
</body>
</html>