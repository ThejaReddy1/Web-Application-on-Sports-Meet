<?php
include "db.php"
?>
<?php
$id=$_GET['id'];
$query="delete from accepted where id='$id'";
$res=mysqli_query($con,$query);
if($res){
        header("Location: Playing.php");
        exit;
}else{
  echo "Error in deleting record";
}

?>