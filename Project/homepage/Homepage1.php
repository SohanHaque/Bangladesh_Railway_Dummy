<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Siyam+Rupali&display=swap" rel="stylesheet">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
            width: 550px;
            height: 330px;
            position: relative;
            background-image: url('home front.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 20px;
        }

        .box {
            background-color: whitesmoke;
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
            font-family: sans-serif;
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

        .content {
            display: flex;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    </style>
</head>

<body style="background-color: white;">
    <div class="box">
        <div class="logo_container">
            <table>
                <tr>
                    <td><img src="bdRailwayLogo.png" height="80px" alt="Bangladesh Railway" class="logo_image"></td>
                    <td><h2 style="color: #d3955d" class="logo_image">Bangladesh<br>Railway</h2></td>
                    <td><h1 style="color: rgb(21, 21, 117);" class="reg_text">Home</h1></td>
                </tr>
            </table>
        </div>
    </div>
    <img src="userlogo.png" class="corner-button" alt="Login" title="Login Page">
    <img src="homelogo.png" class="corner-button2" alt="Home" title="Home Page">
    <img src="reglogo.png" class="corner-button3" alt="Register" title="Registration Page">
    <img src="infologo.png" class="corner-button4" alt="Information" title="Information Page">
    <img src="contactlogo.png" class="corner-button5" alt="Contact" title="Contact Us">

    <div class="container1">
        <center>
            <table>
                <tr>
                    <td>
                        <div class="content">
                            <form>
                                <table>
                                    <tr>
                                        <td><label for="from">From</label><br><input type="text" id="form" placeholder="From Station" required>ㅤ</td>
                                        <td><label for="to">To</label><br><input type="text" id="to" placeholder="To Station" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="date">Date of Journey</label><br><input type="date" id="date" placeholder="Pick a Date" required></td>
                                        <td><label for="class">Choose a Class</label><br><input type="text" id="class" placeholder="Choose a Class" required></td>
                                    </tr>
                                </table>
                                <br>
                                <button type="submit">Search Trains</button><br>
                            </form>
                        </div>
                    </td>
                    <td>ㅤ</td>
                    <td>
                        <div class="small_box">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</body>
</html>
