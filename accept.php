<?php
include "db.php"
?>
<?php
$id=$_GET['id'];
$query="select * from applied where id='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_assoc($res)){
  $id=$row['id'];
  $name=$row['name'];
  $year=$row['year'];
  $dep=$row['dep'];
  $sport=$row['game'];
}
$query="insert into accepted values('$id','$name','$year','$dep','$sport')";
$res=mysqli_query($con,$query);
if($res){
  $query="delete from applied where id='$id'";
  $re=mysqli_query($con,$query);
  if($re){
        header("Location: applied.php");
        exit;
  }else{echo "Error in deleting";}

}else{
  echo "Error in Accepting record";
}

?>
