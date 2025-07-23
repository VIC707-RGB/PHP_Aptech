<?php
include_once 'db.php';
error_reporting(0);
$conn = connectDB();
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($id)) {
        $sql = $conn->prepare("DELETE FROM user WHERE id=?");
        $sql->execute([$id]);
        if ($sql->error) {
            die("Failed connection: " . $sql->error);
        }

        header('Location: index.php');
    }
}
