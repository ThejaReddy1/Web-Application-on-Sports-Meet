<?php
session_start();
     
?>
<?php      
    include('db.php');  
    $username = $_POST['email'];  
    $password = $_POST['password'];  
    $_SESSION['id']=$_POST['email'];
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from students where id = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            header("Location: studentview.php");  
        }  
        else{  
            header("Location: studentlogin.php");
        }     
?>  