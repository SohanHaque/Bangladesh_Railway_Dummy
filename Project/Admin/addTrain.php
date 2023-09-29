<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["train_name"])) {
    $errors[] = "Train Name is required.";
  } else {
    $train_name = $_POST["train_name"];
  }

  if (empty($_POST["off_day"])) {
    $errors[] = "Off Day is required.";
  } else {
    $off_day = $_POST["off_day"];
  }

  if (empty($_POST["from_des"])) {
    $errors[] = "From Destination is required.";
  } else {
    $from_des = $_POST["from_des"];
  }

  if (empty($_POST["from_time"])) {
    $errors[] = "From Time is required.";
  } else {
    $from_time = $_POST["from_time"];
  }

  if (empty($_POST["to_des"])) {
    $errors[] = "To Destination is required.";
  } else {
    $to_des = $_POST["to_des"];
  }

  if (empty($_POST["to_time"])) {
    $errors[] = "To Time is required.";
  } else {
    $to_time = $_POST["to_time"];
  }

  if (empty($errors)) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "railsheba";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO train (train_name, off_day, from_des, from_time, to_des, to_time) VALUES ('$train_name', '$off_day', '$from_des', '$from_time', '$to_des', '$to_time')";

    if ($conn->query($sql) === TRUE) {
      $success = "Data inserted successfully!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Train Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      padding: 20px 0;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }


    input[type="text"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #333;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #444;
    }
  </style>
</head>
<body>
  <?php if (isset($errors) && !empty($errors)) { ?>
    <div style="color: red;">
      <ul>
        <?php foreach ($errors as $error) { ?>
          <li><?php echo $error; ?></li>
        <?php } ?>
      </ul>
    </div>
  <?php } ?>

  <?php if (isset($success)) { ?>
    <h1 style="color: blue;"><?php echo $success; ?></h1>
  <?php } ?>

  <h1>Add Train Information</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="train_name">Train Name:</label>
    <input type="text" id="train_name" name="train_name" required>

    <label for="off_day">Off Day:</label>
    <select id="off_day" name="off_day" required>
      <option value="">Select a option</option>
      <option value="Sun">Sunday</option>
      <option value="Mon">Monday</option>
      <option value="Tue">Tuesday</option>
      <option value="Wed">Wednesday</option>
      <option value="Thu">Thursday</option>
      <option value="Fri">Friday</option>
      <option value="Sat">Saturday</option>
    </select>

    <label for="from_des">From Destination:</label>
    <input type="text" id="from_des" name="from_des" required>

    <label for="from_time">From Time:</label>
    <input type="text" id="from_time" name="from_time" required>

    <label for="to_des">To Destination:</label>
    <input type="text" id="to_des" name="to_des" required>

    <label for="to_time">To Time:</label>
    <input type="text" id="to_time" name="to_time" required>

    <input type="submit" value="Submit">
  </form>
  <a href="admin.php">
    <h1>Back</h1>
  </a>
</body>
</html>
