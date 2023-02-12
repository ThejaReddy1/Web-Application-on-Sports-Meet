<?php
session_start();
include "db.php";
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #33FFD4">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Match Details</th>
        <th>Venu</th>
        <th>Time</th>
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
            ?>
      <tr>
        <td><?php echo $row['dates'];?></td>
        <td><?php echo $row['matchdetails'];?></td>
        <td><?php echo $row['venu'];?></td>
        <td><?php echo $row['timeings'];?></td>
        <td><button type="button" class="btn btn-success" ><i class="bi bi-person-check-fill"></i><a href="update.php?id=<?php echo $row['id']; ?>"style="text-decoration:none;color:white;">Update</a></button></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>

</body>
</html>
