<?php
$message=$_POST['message'];


$host ="localhost";
$dbname="mssgs";
$username="root";
$password="";

$conn=mysqli_connect($host,$username,$password,$dbname);

$sql="INSERT INTO mssg (body)
VALUES(?)";
$stmt=mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"s",$message);
mysqli_stmt_execute($stmt);
echo "message sent!!!";