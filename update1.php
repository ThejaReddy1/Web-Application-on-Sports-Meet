<?php
session_start();
include "db.php";
?>

<?php

        $id=$_GET['id'];
        echo $id;
        $match=$_GET['matchdetails'];
        $date= $_GET['date'];
        $venu= $_GET['venu'];
        $time= $_GET['time'];
        $sql="UPDATE sche SET dates='$date' WHERE id='$id'";
        $sql2="UPDATE sche SET timeings='$time' WHERE id='$id'";
        $sql3="UPDATE sche SET venu='$venu' WHERE id='$id'";
        if(mysqli_query($con,$sql) && mysqli_query($con,$sql2) && mysqli_query($con,$sql2)){
            
            header("Location: schedule.php");
        }
 ?>