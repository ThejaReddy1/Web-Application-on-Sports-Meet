<?php
session_start();
include "db.php";

?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

    <body>
        <h1 style="text-align:center;">Students Accepted</h1>
        <?php
        $query="select * from accepted";
        $result=mysqli_query($con, $query);
        ?>
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th>COLLEGE ID</th>
          <th>Name</th>
          <th>Year</th>
          <th>Department</th>
          <th>Sport/Game</th>
          <th>Accept/reject</th>
        </tr>
      </thead>
      <tbody>
     <?php if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
          <td><?php echo $row['id'];?></td>
         <td><?php echo $row['name'];?></td>
         <td><?php echo$row['year'];?></td>
        <td><?php echo $row['dep'];?></td>
         <td><?php echo$row['sport'];?></td>
         <td><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i><a href="delete2.php?id=<?php echo $row['id']; ?>"style="text-decoration:none;color:white;">Delete</a></button></td>
        </tr>
        <?php
      }
    }
    ?>
      </tbody>
    </table>
   
</body>
</html>