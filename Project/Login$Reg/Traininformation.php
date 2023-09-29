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
  <li><a href="http://localhost/Project/Login$Reg/Contactus.php">Contact Us </a></li>
</ul>
    </div>
    </nav> 
</header>
</div>
    

    <div class="container1">
        <center>
            <table>
                <tr>
                    <td>
                        <div class="search_box">
                            <h3>Select Your Prefered Train</h3>
                            <div class="search_box2">
                                <label for="dropdown">Train Name:</label><br>
                                <select id="dropdown">
                                    <option value="" disabled selected>Select Train</option>
                                    <option value="tc1033">TANGAIL COMMUTER 1033</option>
                                    <option value="tc1034">TANGAIL COMMUTER 1034</option>
                                    <option value="me3107">MAITREE EXPRESS 3107</option>
                                    <option value="me3108">MAITREE EXPRESS 3108</option>
                                    <option value="me3109">MAITREE EXPRESS 3109</option>
                                    <option value="me3110">MAITREE EXPRESS 3110</option>
                                    <option value="be3107">BANDHAN EXPRESS 3129</option>
                                    <option value="be3108">BANDHAN EXPRESS 3130</option>
                                    <option value="me3131">MITALI EXPRESS 3131</option>
                                    <option value="me3132">MITALI EXPRESS 3132</option>
                                    <option value="rc57">RAJSHAHI EXPRESS 57</option>
                                    <option value="rc58">RAJSHAHI EXPRESS 58</option>
                                    <option value="se701">SUBORNO EXPRESS 701</option>
                                    <option value="se702">SUBORNO EXPRESS 702</option>
                                    <option value="mg703">MAHANAGAR GODHULI 703</option>
                                    <option value="mp704">MAHANAGAR PROVATI 704</option>
                                    <option value="ee705">EKOTA EXPRESS 705</option>
                                    <option value="ee706">EKOTA EXPRESS 706</option>
                                    <option value="te707">TISTA EXPRESS 707</option>
                                    <option value="te708">TISTA EXPRESS 708</option>
                                </select>
                            </div><br>
                            <button type="submit">Search</button><br>
                        </div>
                    </td>
                    <td>
                        <div class="small_box">
                        </div>
                    </td>
                </tr>
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
        <p style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;margin-top: -45px; padding-left: 10in; font-size:20px;">POWER BY Group 7 </p>
        <div style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;padding-top: 15px;margin-top: 8px; padding-left: 10in;font-size:20px;">
            21-44604-1
        </div >

    </div>

</div>
</footer>
</body>

</html>