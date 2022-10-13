<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";

// connection
$conn =  mysqli_connect($servername, $username,$password,$dbname) or die("connection error");

// check connection

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


 
$sql = "INSERT  INTO  user (email, username, password) VALUES('$email','$username','$password')";

if (mysqli_query($conn, $sql)){ 
    header("Location: login.html", true, 301);
    mysqli_close($conn);

} else{
    echo "Error";
    mysqli_error($conn);
    
}
