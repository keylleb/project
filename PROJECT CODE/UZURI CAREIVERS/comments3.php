<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";


$conn_comment = mysqli_connect($servername, $username,$password,$dbname) or die("Connection error");

$email = $_REQUEST['email'];
$comm = $_REQUEST['comment'];


$sql_comment = "INSERT  INTO  com_ment_3 (email, comment) VALUES('$email','$comm')";

if (mysqli_query($conn_comment, $sql_comment)){
    header("Location: mtwapa_location_3.html" , true, 301);
    mysqli_close($conn_comment);
} else{
    echo "error";
    mysqli_error($conn_comment);
}


