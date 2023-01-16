<?php
require_once('signvalid.php');

$conn = mysqli_connect("localhost", "root", "", "usersdata");

if(mysqli_connect_error()){
    die("Connection Error");
}

$sql = "INSERT INTO users(first_name,last_name,email,pnumber,pwd)
VALUES(?,?,?,?,?);";
$upload = $conn->prepare($sql);
$upload->bind_param('sssss',$fname,$lname,$email,$pnumber,$pwd);

if($upload->execute()){
    echo "Created suceesfully";
}else{
    echo "Problem found: " . $conn->error;
}