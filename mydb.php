<?php
require_once('signvalid.php');

$conn = mysqli_connect("localhost", "root", "", "usersdata");

if(mysqli_connect_error()){
    die("Connection Error");
}

$sql = "INSERT INTO users(name,email,number,user_password,lname)
VALUES(?,?,?,?,?);";
$upload = $conn->prepare($sql);
$upload->bind_param('sssss',$fname,$email,$pnumber,$pwd,$lname);

if($upload->execute()){
    header("Location:login.php");
    exit;
}else{
    echo "Problem found: " . $conn->error;
}
