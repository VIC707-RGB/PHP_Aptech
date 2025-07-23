<?php
include_once 'db.php';
error_reporting(0);
$conn = connectDB();
// $name = $_GET['name'];
// $email = $_GET['email'];
$name;
$email;
$id = $_GET['id'];
if (isset($id) && isset($conn)) {
    if (isset($_GET['name']) || isset($_GET['email'])) {
        if ($_GET['email'] == "") {
            echo "enter not get email";
            $sql_getLastEmail = "SELECT * FROM user WHERE id = " . $id;
            $result = $conn->query($sql_getLastEmail);
            if (!$result) {
                echo "no result";
            } else {
                while ($row = $result->fetch_assoc()) {
                    $email = $row['email'];
                    echo $email;
                }
            }
            
        }else{
            echo "enter get";
            $email = $_GET['email'];
        }

        if ($_GET['name'] == "") {
            echo "enter not get name";
            $sql_getLastName = "SELECT * FROM user WHERE id = " . $id;
            $result = $conn->query($sql_getLastName);
            if (!$result) {
                echo "no result";
            } else {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    echo $name;
                }
            }
        }else{
            echo "enter get";
            $name = $_GET['name'];
        }   
        echo $name;
        echo $email;

        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $sql = $conn->prepare("UPDATE user SET name=?, email=? WHERE id=?");
            $sql->execute([$name, $email, $id]);
            echo $id;
            if ($sql->error) {
                die("Failed connection: " . $sql->error);
            }

            header('Location: index.php');

        }    
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM user WHERE id=" . $_GET['id']; //chọn hết
    $result = $conn->query($sql);
    if (!$result) {
        echo "None";
    } else {
        while ($row = $result->fetch_assoc()) {
    ?>
            <form action="#" method="get">
                Id: <input type="number" name="id" value="<?php echo $row['id'] ?>" readonly="true"><br>
                Name: <input type="text" name="name" placeholder="<?php echo $row['name'] ?>"><br>
                Email: <input type="email" name="email" placeholder="<?php echo $row['email'] ?>"><br>
                <button type="submit">Submit</button>
            </form>
    <?php
        }
    }
    ?>
</body>

</html>