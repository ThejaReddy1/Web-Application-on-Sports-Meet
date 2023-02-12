<?php
include "db.php";
?>
<?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $year=$_POST['year'];
    $dep=$_POST['dept'];
    $sport=$_POST['sport'];
    $sql="INSERT INTO applied VALUES ('$id','$name','$year','$dep','$sport')";
    $res=mysqli_query($con,$sql);
    if($res)
        echo "<h2>Successfully Applied</h2><a href='iframebase.php'>clickhere...</a><p>to go back</p>";
    else
        echo "<h2>Unable to Apply</h2><a href='iframebase.php'>clickhere...</a><p>to go back</p>";
        ?>