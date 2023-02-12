<?php
session_start();
include "db.php";
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Student View</title>
        <link rel="stylesheet" href="css/s1.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <i class='bx bxs-user-circle'></i>
                    <div class="logo_name">WELCOME!</div>
                </div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav_list" >
                <li>
                    
                    <a href="profile.php?id=<?php echo $_SESSION['id']; ?>" target="iframe">
                        <i class='bx bxs-user-account' ></i>
                        <span class="links_names">Student Info</span>
                    </a>
                </li>
                <li>
                    <a href="stu-sport.php" target="iframe">
                        <i class='bx bxs-cricket-ball'></i>
                        <span class="links_names">Sports</span>
                    </a>
                </li>
                <li>
                    <a href="stu-game.php" target="iframe">
                        <i class='bx bxs-chess'></i>
                        <span class="links_names">Indore Games</span>
                    </a>
                </li> 
                <li>
                    <a href="schedule.php" target="iframe">
                        <i class='bx bxs-calendar-event'></i>
                        <span class="links_names">Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="teams.html" target="iframe">
                        <i class='bx bx-run'></i>
                        <span class="links_names">Teams & Players</span>
                    </a>
                </li>
                <li>
                    <a href="registration.html" target="iframe">
                        <i class='bx bx-play'></i>
                        <span class="links_names">Register</span>
                    </a>
                </li>
                <li>
                    <a href="stu-results.php" target="iframe">
                        <i class='bx bxs-book-content'></i>
                        <span class="links_names">Results</span>
                    </a>
                    
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="clgpic/theja.jpeg"alt="">
                        <div class="name_job">
                            <div class="name">LogOut</div>
                            
                        </div>

                    </div>
                    <a href="stu-logout.php"><i class='bx bx-log-out' id="log_out"></i></a>  
                </div>
            </div>
        </div>
        <div class="home_content">
            <div class="text"><iframe src="iframebase.php" width="100%" height="100%" name="iframe"></iframe></div>
        </div> 


        <script>
            let btn=document.querySelector("#btn");
            let sidebar=document.querySelector(".sidebar");
            
            btn.onclick=function(){
                sidebar.classList.toggle("active");
            } 

           
        </script>

    </body>
</hthl>