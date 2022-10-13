<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";

$conn_admin_login = mysqli_connect($servername, $username,$password,$dbname) or die("Connection error");


$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql_e = "SELECT * FROM  admin  WHERE username = '$username' and password ='$password'";

$res_e = mysqli_query($conn_admin_login, $sql_e);
$row = mysqli_fetch_array($res_e,MYSQLI_ASSOC);

$count = mysqli_num_rows($res_e);

if($count == 1){
    header("Location: admin_selection.html");
} else{
    echo "User does not exist";
    //header("Location: index.html");
}


//$res_e = mysqli_query($conn_admin_login, $sql_check);
//$row = mysqli_fetch_array($res_e,MYSQLI_ASSOC);

//$count = mysqli_num_rows($res_e);


//if($count == 1){
   // header("Location: admin_selection.html");
//} else{
  //  echo "User does not exist";
    //header("Location: index.html");
//}


