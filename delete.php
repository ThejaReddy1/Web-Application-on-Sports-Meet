<?php
include "db.php"
?>
<?php
$id=$_GET['id'];
$query="delete from applied where id='$id'";
$res=mysqli_query($con,$query);
if($res){
        header("Location: applied.php");
        exit;
}else{
  echo "Error in deleting record";
}

?>
