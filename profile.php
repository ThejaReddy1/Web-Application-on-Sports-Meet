<?php
session_start();
include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Student Profile Page </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
    
	    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Student Profile Page</h1>
                <p>Student from RGMCET</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<?php 
 $id=$_GET['id'];
  $query="select * from students where id='$id'";
  $result=mysqli_query($con,$query);
   if (mysqli_num_rows($result) > 0) {
      
    while($row = mysqli_fetch_assoc($result)) {
  ?>

<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="clgpic/admin.jpg" alt="student dp">
            <h3><?php echo $row['name'] ;?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo $row['id'];?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0">Student Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td><?php echo $row['name'] ;?></td>
              </tr>
              <tr>
                <th width="30%">DOB	</th>
                <td width="2%">:</td>
                <td><?php echo $row['dob'] ;?></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $row['gender'] ;?></td>
              </tr>
              <tr>
                <th width="30%">Department</th>
                <td width="2%">:</td>
                <td><?php echo $row['dept'] ;?></td>
              </tr>
              <tr>
                <th width="30%">Year</th>
                <td width="2%">:</td>
                <td><?php echo $row['year'] ;?></td>
              </tr>
            </table>
          </div>
        </div>
         <?php }} ?>
    </div>
  </div>
</div>

    		</div>
		</div>
    </div>
</section>


	</body>
</html>