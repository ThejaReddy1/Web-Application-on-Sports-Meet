<?php
session_start();
include "db.php";
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #33FFD4">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Match Details</th>
        <th>Results</th>
      </tr>
    </thead>
<?php
$sport=$_GET['id'];
$query="select * from sche where sport='$sport'";

$result=mysqli_query($con,$query);
?>
<div class="container mt-3">
    <tbody>
        <?php 
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            break;

        }?>
            <?php
            $query2="select * from results where id='$id'";
            $res=mysqli_query($con,$query2);
            while($r=mysqli_fetch_assoc($res)){
            ?>
            
      <tr>
        <td><?php echo $r['matchdetails'];?></td>
        <td><?php echo $r['result'];?></button></td>
      </tr>
  
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
