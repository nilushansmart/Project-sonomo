<?php
include('C:\xampp\htdocs\Sonomo\PHP\connection.php');

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "delete from book where b_id=$id";
    $conn->query($sql);
}

header("location: admin.php");
$conn->close(); 
exit;
?>