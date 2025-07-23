<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button><a href="create.php">ADD NEW USER</a></button>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Buttons</th>
        </tr>

        <?php
        $conn = connectDB();
        createTableIfNotExists($conn);

        //read data
        $sql = "SELECT * FROM user"; //chọn hết
        $result = $conn->query($sql);

        if (!$result) {
            echo "None";
        } else {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" 
                . "<button><a href='update.php?id=".$row['id']."'>Update</a></button>"
                . "<button><a href='delete.php?id=".$row['id']."'>Delete</a></button>" 
                . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>