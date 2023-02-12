<?php
session_start();
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
        body{
        font-family: 'Arial', sans-serif;
        background: url('clgpic/sp.jpg') no-repeat;
        background-size: 100%;  
        
    }
        .container{
            height: 50em;
            display: flex;
            align-items: center;
            justify-content:center;
            
        }
        .dropdown{
            
            margin-right:20px;
        }
       
        </style>
    <title>Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:black;">
  <?php
  $query="select * from sports";
  $res=mysqli_query($con,$query);

  ?>
  <div class="container">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Sports
        </button>
        
        <ul class="dropdown-menu">
        <?php 
        
        while($row = mysqli_fetch_assoc($res)){
          ?>
          <li><a class="dropdown-item" href="scdisplay.php?id=<?php echo $row['name'] ; ?>" target="iframe"><?php echo $row['name'];?></a></li>
          <?php }?>
        </ul>
        
      </div>
      <?php
  $query="select * from games";
  $res=mysqli_query($con,$query);

  ?>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
          Indore Games
        </button>
        
        <ul class="dropdown-menu">
        <?php 
        
        while($row = mysqli_fetch_assoc($res)){
          ?>
          <li><a class="dropdown-item" href="scdisplay.php?id=<?php echo $row['name'] ; ?>" target="iframe"><?php echo $row['name'];?></a></li>
          <?php }?>
        </ul>
        
      </div>
      </div>
</body>
</html>