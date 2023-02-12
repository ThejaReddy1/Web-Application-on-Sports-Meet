
<?php
include "db.php";
?>
<html>
  <head>
  <link rel="stylesheet" href="css/sport.css">
  </head>
  <body>
    <?php
        $sql=" SELECT * FROM sports ";
        echo "<table>";

            $result = $con->query($sql);
            if ($result->num_rows > 0) {
          // output data of each row
          echo "<tr> <td colspan='2'><h2 class='p'>Sports in RPL</h2></td></tr>";
            while($row = $result->fetch_assoc()) 
            {   echo "<tr><td> <h3 class='p'> ".$row['name']."</h3></td>";
                echo "<td><div class='card'>";
                echo "<img src='$row[file_path]' class='rounded-circle' alt='$row[file_path]'>";
                echo "</div></td></tr>";
            }
          }
          
        echo "</table>";
      ?>
      </body>
  </html>