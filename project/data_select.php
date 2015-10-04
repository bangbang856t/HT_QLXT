<?php 
  if(isset($_POST["ma_nganh"])){
        $conn=mysqli_connect('localhost','root','','dbhethongxt');        
        $query= "SELECT * FROM `b_nganh` WHERE ma_nganh like '%".$_POST["ma_nganh"]."%'";
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