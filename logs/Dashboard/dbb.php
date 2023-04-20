<?php
 $conn = new mysqli("localhost", "chengoril", "chengoril99", "wetinde_chengo");
 if(mysqli_connect_errno()){
     printf("connect fail: %s\n", mysqli_connect_error());
     exit();
 }
 ?>