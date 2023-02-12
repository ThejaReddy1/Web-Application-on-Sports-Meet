
<?php 
    // Database connection
    include("db.php");
    
    if(isset($_POST["submit"])) {
        $sport_name=$_POST['sport_name'];
        // Set image placement folder
        $target_dir = "game_dir/";
        // Get file path
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("jpg", "jpeg", "png");
        
        if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
           $resMessage = array(
               "status" => "alert-danger",
               "message" => "Select image to upload."
           );
        } else if (!in_array($imageExt, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Allowed file formats .jpg, .jpeg and .png."
            );            
        } else if ($_FILES["fileUpload"]["size"] > 2097152) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File is too large. File size should be less than 2 megabytes."
            );
        } else if (file_exists($target_file)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Sport already exists."
            );
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO games (name,file_path) VALUES ('$sport_name','$target_file')";
                $stmt = $con->prepare($sql);
                 if($stmt->execute()){
                    $resMessage = array(
                        "status" => "alert-success",
                        "message" => "New Indor-Game Added successfully."
                    );                 
                 }
            } else {
                $resMessage = array(
                    "status" => "alert-danger",
                    "message" => "Game coudn't be added."
                );
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>PHP 8 Image Upload Example</title>
  <style>
    .container {
      max-width: 450px;
    }
  </style>
</head>
<body style="background-color:#f002;">
  <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
      <h3 class="text-center mb-5">ADD NEW INDORE-GAME</h3>
      <div class="user-image mb-3 text-center">
        <div style="width: 100px; height: 100px; overflow: hidden; background: #cccccc; margin: 0 auto">
          <img src="..." class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
        </div>
      </div>
      <div class="sport_name">
        Sport:  <input type="text" name="sport_name" placeholder="Enter here..."/>
      </div><br>
      <div class="custom-file">
        <input type="file" name="fileUpload" class="custom-file-input" id="chooseFile">
        <label class="custom-file-label" for="chooseFile">Select Image</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        Add Game
      </button>
    </form>
    <!-- Display response messages -->
    <?php if(!empty($resMessage)) {?>
    <div class="alert <?php echo $resMessage['status']?>">
      <?php echo $resMessage['message']?>
    </div>
    <?php }?>
  </div>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#imgPlaceholder').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }
    $("#chooseFile").change(function () {
      readURL(this);
    });
  </script>
</body>
</html>