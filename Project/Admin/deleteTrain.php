<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railsheba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM train WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header('location: showTrain.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM train WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No data found!";
    }
} else {
    echo "Invalid request!";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete Train Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            margin: 5px 0;
        }

        .container {
            max-width: 600px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .confirmation-box {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .cancel-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .cancel-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Delete Train Schedule</h2>
        <div class="confirmation-box">
            <p>Are you sure you want to delete this record?</p>
            <p><strong>Train Name:</strong> <?php echo $row['train_name']; ?></p>
            <p><strong>Off Day:</strong> <?php echo $row['off_day']; ?></p>
            <p><strong>From Destination:</strong> <?php echo $row['from_des']; ?></p>
            <p><strong>From Time:</strong> <?php echo $row['from_time']; ?></p>
            <p><strong>To Destination:</strong> <?php echo $row['to_des']; ?></p>
            <p><strong>To Time:</strong> <?php echo $row['to_time']; ?></p>
        </div>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="delete-btn">Delete</button>
            <a href="showTrain.php" class="cancel-btn">Cancel</a>
        </form>
    </div>
</body>

</html>