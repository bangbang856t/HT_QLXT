<?php   
        require_once ('include/db.php');
        
        $error = [];
        if(isset($_POST["btn1_submit"])){
        
            //$conn=mysqli_connect('localhost','root','','dbhethongxt');
            
            
            
            /*
            if(mysqli_connect_errno())
            { 
               echo 'failse'.mysqli_connect_error();
            }
            */
            
            $sbd = mysqli_escape_string($conn, $_POST["sbd"]); // escape ki tu nhap vao không hop le
            $query = "SELECT * FROM `a_ttts` WHERE id='" . $sbd . "'";
            $kq = mysqli_query($conn, $query);
            $data_hsxt=[];
            
            while($row = mysqli_fetch_assoc($kq)){
                 $data_hsxt[] = $row;
                 
            //$_SESSION['fail']='ban da khong thanh cong';
           
            }
            //echo 
            mysqli_free_result($kq);
            //mysqli_close($conn);
            if(empty($data_hsxt)) {
                array_push($error, "SBD khong hop le");
            }
        }
        include "dkxt.html";
        
        
        
    ?>