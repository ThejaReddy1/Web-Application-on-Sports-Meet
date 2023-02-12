<?php
session_start();
include "db.php";
?>

<?php

        $id=$_GET['id'];
        $match=$_GET['matchdetails'];
        $result=$_GET['result'];
        $sql="INSERT INTO results (id,matchdetails,result) VALUES ('$id','$match','$result')";
        try {
           if(mysqli_query($con,$sql)){
            header("Location: success.php");
           }
        } catch (mysqli_sql_exception $e) {
            echo "Results Already Published.<a href=resultspub.php>clickhere...to go back</a>" ;
        }
 ?>