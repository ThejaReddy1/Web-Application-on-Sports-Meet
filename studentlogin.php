
<?php
require('db.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
    
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css”/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Stylish Login Page CSS -->
    <link rel="stylesheet" href="css/login-page.css">
    
    
    <link rel="stylesheet" href="css/demo.css" />
	
    <script>
        function val()
        {
            let x = document.forms["login"]["email"].value.trim();
            let y = document.forms["login"]["password"].value.trim();
            if (x == "" || y=="") {
            alert("Details must be filled out");
            return false;
            }
            else{
                return true;
            }
        }
        </script>
</head>
<body style="background-color: #00ffcc;">
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
        <img src="clgpic/logo.jpg" height="80px" width="80px" style="float:left;">
            <h1 style="font-family:Lucida Console, Courier New, monospace;font-size: 40px;">WELCOME!</h1>
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="base.html" title="Back to Tutorial Page to Download"> Back </a></li>
            </ul>
        </div>
    </div>
</div>

<!--<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>CSS Stylish Login Page</h1>
                <p>A Stylish Login Page in HTML with CSS Code</p>
            </div>
        </div>
    </div>
</header>-->

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
              <!-- Stylish Login Page Start -->
    <form class="codehim-form" action="authentication.php" method="post" name="login" onsubmit="return val()">
        <div class="form-title">
            <div class="user-icon gr-bg">
            <i class="fa fa-user"></i>
            </div>
                <h2> Student Login</h2>
            </div>
    <label for="email"><i class="fa fa-user"></i> Reg.Id:</label>
        <input type="text" id="email" name="email"class="cm-input" placeholder="Enter your register Id">
        <label for="pass"><i class="fa fa-lock"></i> Password:</label>
        <input id="pass" name="password" type="password" class="cm-input" placeholder="Enter your password">
        <input type="submit" class="btn-login  gr-bg" value="login"/>
    </form>
              <!-- Stylish Login Page End -->
    		
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
   
</html>
