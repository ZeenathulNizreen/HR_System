<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hr_system";
$connect ="mysql_connect($servername,$username,$password)";

if($connect)
    {
      echo"Server Connected Succesfully....<br>";

        if($dbname)
        {
          echo "Database Connected Succesfully....";
        } else
         {
            echo "Can't Connect To Database!!!";
         }

     }
       else
     {
         echo"Can't Connect to server !!!";
      }
?>
