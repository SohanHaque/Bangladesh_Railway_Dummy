<?php
	if(isset($_COOKIE['status'])){
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 15px;
        }

        .container {
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="addTrain.php">Add Train</a>
        <a href="showTrain.php">Train Information</a>
        <a href="http://localhost/Project/homepage/homepage.php">Home</a>
        <a href="logout.php">Log Out</a>
    </nav>

    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username'] ?></h1>
    </div>
</body>

</html>

<?php
	}
	else {
		header('location: login.php');
	}
?>