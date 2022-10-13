<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Mtwapa Location 3</title>
</head>
<body>
<p style="color: rgba(255, 0, 0, 0.849);" id="date"></p>
    <script>
    document.getElementById("date").innerHTML = Date();
    </script>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_connect";
    $connection = mysqli_connect($servername, $username,$password,$dbname) or die("Connection error");

    $sql = "SELECT * FROM com_ment_2";
    $result = $connection->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
         echo  $row ['email']; 
         echo " ";
         echo  $row['comment'];
            
        }
    }

    ?>
    
</body>
</html>