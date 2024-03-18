<?php
include('C:\xampp\htdocs\Sonomo\PHP\connection.php');

$title="";
$author="";
$price="";
$qty="";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $title = $_POST['title'];
  $author = $_POST['author'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
}

  //add new books to db

  $sql = "insert into book (title, author, price, qty) values ('$title','$author','$price','$qty')";
  $result = $conn->query($sql);

  $title="";
  $author="";
  $price="";
  $qty="";
  $successMessage="Books added successfully";

  header("location: admin.php");
  $conn->close(); 
  exit;
?>