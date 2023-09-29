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
    $train_name = $_POST['train_name'];
    $off_day = $_POST['off_day'];
    $from_des = $_POST['from_des'];
    $from_time = $_POST['from_time'];
    $to_des = $_POST['to_des'];
    $to_time = $_POST['to_time'];

    $sql = "UPDATE train SET train_name='$train_name', off_day='$off_day', from_des='$from_des', from_time='$from_time', to_des='$to_des', to_time='$to_time' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header('location: showTrain.php');
    } else {
        echo "Error updating record: " . $conn->error;
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
    <title>Update Train Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .cancel-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .cancel-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <h2>Update Train Schedule</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Train Name:</label>
        <input type="text" name="train_name" value="<?php echo $row['train_name']; ?>">
        <select name="off_day">
            <option value="Sun" <?php echo ($row['off_day'] === 'Sun') ? 'selected' : ''; ?>>Sun</option>
            <option value="Mon" <?php echo ($row['off_day'] === 'Mon') ? 'selected' : ''; ?>>Mon</option>
            <option value="Tue" <?php echo ($row['off_day'] === 'Tue') ? 'selected' : ''; ?>>Tues</option>
            <option value="Wed" <?php echo ($row['off_day'] === 'Wed') ? 'selected' : ''; ?>>Wednes</option>
            <option value="Thu" <?php echo ($row['off_day'] === 'Thu') ? 'selected' : ''; ?>>Thurs</option>
            <option value="Fri" <?php echo ($row['off_day'] === 'Fri') ? 'selected' : ''; ?>>Fri</option>
            <option value="Sat" <?php echo ($row['off_day'] === 'Sat') ? 'selected' : ''; ?>>Satur</option>
        </select>
        <label>From Destination:</label>
        <input type="text" name="from_des" value="<?php echo $row['from_des']; ?>">
        <label>From Time:</label>
        <input type="text" name="from_time" value="<?php echo $row['from_time']; ?>">
        <label>To Destination:</label>
        <input type="text" name="to_des" value="<?php echo $row['to_des']; ?>">
        <label>To Time:</label>
        <input type="text" name="to_time" value="<?php echo $row['to_time']; ?>">
        <input type="submit" value="Update">
        <a href="showTrain.php" class="cancel-btn">Cancel</a>
    </form>
</body>

</html>