<?php
    include('C:\xampp\htdocs\Sonomo\PHP\connection.php');
    $inuname = $_POST['username'];
    $inpwd = $_POST['password'];

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT uname, pwd FROM users";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $uname = $row["uname"]; 
        $pwd = $row["pwd"];
    }

    if($inuname==$uname && $inpwd==$pwd){
        header ("Location: admin.php");
    }
    else {
        echo "user name password wrong";
    }
    
    
$conn->close();  
?>



