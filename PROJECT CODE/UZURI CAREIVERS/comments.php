<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";


$conn_comment = mysqli_connect($servername, $username,$password,$dbname) or die("Connection error");

$comm = $_REQUEST['comment_mtpa_i'];
$email = $_REQUEST['email'];
$label = $_REQUEST['identifier'];

$sql_comment = "INSERT  INTO  com_ment (email, comment) VALUES('$email','$comm')";

if (mysqli_query($conn_comment, $sql_comment)){
    header("Location: mtwapa_location_1.html" , true, 301);
    mysqli_close($conn_comment);

   
} else{
    echo "error";
    mysqli_error($conn_comment);
}


