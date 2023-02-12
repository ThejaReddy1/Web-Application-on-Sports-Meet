<?php 
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
  a{
    text-decoration:none;
    color:orange;
  }
  button{
    background-color:blue;
    
    border-radius:8px;
    font-weight:bold;
    display:flex;

  }
  button:hover{
    background-color:orange;
    color:blue;
    cursor: pointer;
  }
  </style>
</head>
<body>
<div><button><a href="teams.html" target="iframe">Back</a></button></div>
    <h1 style="text-align:center;">CRICKET TEAMS AND PLAYERS</h1>
<table class="table table-success table-striped">
 
      <tr>
          
          <th colspan="4" style="text-align:center; font-size:30px;color:orange;">CSE</th>
    </tr>

  <tr>
        <th>COLLEGE ID</th>
        <th>Name</th>
        <th>Year</th>
        <th>Department</th>
      </tr>
   <?php
      $sql="SELECT * FROM accepted WHERE dep='CSE' AND  sport='Cricket'";
      $result=mysqli_query($con,$sql);
      
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['year'];?></td>
        <td><?php echo $row['dep'];?></td>
      </tr>
      <?php } ?>
  </table>


<table class="table table-success table-striped">
 
  <tr>
          <th colspan="4" style="text-align:center; font-size:30px;color:orange;">ECE</th>
    </tr>
  <tr>
        <th>COLLEGE ID</th>
        <th>Name</th>
        <th>Year</th>
        <th>Department</th>
      </tr>
      <?php
      $sql="select * from accepted where dep='ECE' and Sport='Cricket'";
      $res=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($res)){
      ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['year'];?></td>
        <td><?php echo $row['dep'];?></td>
      </tr>
      <?php }?>
  </table>


  <table class="table table-success table-striped">
 
 <tr>
         <th colspan="4" style="text-align:center; font-size:30px;color:orange;">EEE</th>
   </tr>
 <tr>
       <th>COLLEGE ID</th>
       <th>Name</th>
       <th>Year</th>
       <th>Department</th>
     </tr>
     <?php
     $sql="select * from accepted where dep='EEE' and Sport='Cricket'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($res)){
     ?>
     <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['year'];?></td>
       <td><?php echo $row['dep'];?></td>
     </tr>
     <?php }?>
 </table>

 <table class="table table-success table-striped">
 
 <tr>
         <th colspan="4" style="text-align:center; font-size:30px;color:orange;">CIVIL</th>
   </tr>
 <tr>
       <th>COLLEGE ID</th>
       <th>Name</th>
       <th>Year</th>
       <th>Department</th>
     </tr>
     <?php
     $sql="select * from accepted where dep='CIVIL' and Sport='Cricket'";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($res)){
     ?>
     <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['year'];?></td>
       <td><?php echo $row['dep'];?></td>
     </tr>
     <?php }?>
 </table>

 <table class="table table-success table-striped">
 
  <tr>
          <th colspan="4" style="text-align:center; font-size:30px;color:orange;">MEC</th>
    </tr>
  <tr>
        <th>COLLEGE ID</th>
        <th>Name</th>
        <th>Year</th>
        <th>Department</th>
      </tr>
      <?php
      $sql="select * from accepted where dep='MEC' and Sport='Cricket'";
      $res=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($res)){
      ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['year'];?></td>
        <td><?php echo $row['dep'];?></td>
      </tr>
      <?php }?>
  </table>
</body>
</html>
