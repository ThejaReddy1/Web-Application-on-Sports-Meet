<?php
session_start();
include "db.php";
?>
<?php
        $id=$_GET['id'];
        $query="select * from sche where id='$id'";
        $res=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($res)){
         $date= $row['dates'];
         $matchdetails= $row['matchdetails'];
        
 }?>
<html>
<head><title>update</head></title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

<form action="publish1.php" method="get">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Match Details</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="matchdetails" value="<?php echo $matchdetails?>">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" name="date" value="<?php echo $date?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Enter Who won</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="result" placeholder="Enter here who won the game..">
    </div>
  </div>
  
  <input type="hidden" name="id" value="<?php echo $id ?>" invisible>
  <div><input type="submit" class="btn btn-outline-success"onclick="alert('Confirm to Publish')" value="Update"></div>
</form>
</body>
</html>