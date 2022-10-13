<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";


$conn = mysqli_connect($servername, $username,$password,$dbname);

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql_e = "SELECT * FROM  user  WHERE email = '$email' and password ='$password'";

$res_e = mysqli_query($conn, $sql_e);
$row = mysqli_fetch_array($res_e,MYSQLI_ASSOC);

$count = mysqli_num_rows($res_e);

if($count == 1){
    header("Location: index_user.html");
} else{
    echo "User does not exist";
    //header("Location: index.html");
}


