<?php 
  if(isset($_GET["sbd"])){
        $conn=mysqli_connect('localhost','root','','dbhethongxt');        
        $query= "SELECT * FROM `c` WHERE id_ts = '".$_GET["sbd"]."' and thmt = '".$_GET["thmt"]."'";
        //$query= "SELECT * FROM `c` WHERE id_ts=1";
        //echo $query;
        $kq = mysqli_query($conn,$query);
        if(mysqli_connect_errno())
        { 
           echo 'failse'.mysqli_connect_error();
        }
        $data_hsxt=[];
        while($row = mysqli_fetch_assoc($kq)){
             $data_hsxt[]=$row;
       
        }
        
        echo json_encode($data_hsxt);
        mysqli_free_result($kq);
        mysqli_close($conn);
        
        }
       
?>