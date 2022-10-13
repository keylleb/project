<style>
    body{
        background-color: whitesmoke;
        font-size: 20px;
    }
</style>
<p id="date"></p>
<script>
document.getElementById("date").innerHTML = Date();
</script>

<p>Comments</p>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_connect";
    $connection = mysqli_connect($servername, $username,$password,$dbname) or die("Connection error");

    $sql = "SELECT * FROM com_ment_5";
    $result = $connection->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
         echo  $row ['email']; 
         echo " ";
         echo  $row['comment'];
            
        }
    }

    ?>