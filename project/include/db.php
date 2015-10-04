<?php 
    $host_name = 'localhost';
    $db_name = 'dbhethongxt';
    $db_username = 'root';
    $db_password = '';
        
    $conn = mysqli_connect($host_name,$db_username ,$db_password, $db_name);
    
    if(mysqli_connect_errno()){ 
       echo 'failse'.mysqli_connect_error();
    }
?>