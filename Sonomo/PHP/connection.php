<?php
$conn = new mysqli('127.0.0.1','admin','@nILU$2003','sonomo');

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>