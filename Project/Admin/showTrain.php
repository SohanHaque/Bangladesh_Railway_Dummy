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
<html>

<head>
    <title>Train Schedule</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
        }

        td a:hover {
            background-color: #0056b3;
        }

        td a.delete-link {
            background-color: #dc3545;
        }

        td a.delete-link:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <h2>Train Schedule</h2>
    <table>
        <tr>
            <th>Train Name</th>
            <th>Off Day</th>
            <th>From Destination</th>
            <th>From Time</th>
            <th>To Destination</th>
            <th>To Time</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['train_name'] ?></td>
                <td><?php echo $row['off_day'] ?></td>
                <td><?php echo $row['from_des'] ?></td>
                <td><?php echo $row['from_time'] ?></td>
                <td><?php echo $row['to_des'] ?></td>
                <td><?php echo $row['to_time'] ?></td>
                <td><a href="updateTrain.php?id=<?php echo $row['id']; ?>">Update</a></td>
                <td><a href="deleteTrain.php?id=<?php echo $row['id']; ?>" class="delete-link">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <a href="admin.php"><h1>Back</h1></a>
</body>

</html>