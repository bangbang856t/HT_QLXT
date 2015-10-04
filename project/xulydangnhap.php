<?php   if(isset($_POST['dangnhap'])){
        $conn=mysqli_connect('localhost','root','','dbhethongxt');
        $username=$_POST['username'];
        $pass=$_POST['password'];
        
        $query= "SELECT * FROM `ql_taikhoan` WHERE NAME = '$username' and PW='$pass' ";
        
        $kq=mysqli_query($conn,$query);
        if(mysqli_connect_errno())
        { 
           echo 'failse'.mysqli_connect_error();
        }
        while($row = mysqli_fetch_array($kq)){
            
            $_SESSION['vaitro']=$row['level'];
            if($_SESSION['vaitro']== 1) header("location: trangchu_admin.php");
            if($_SESSION['vaitro']== 2) header("location: trangchu_user.php");
            }
        //$_SESSION['fail']='ban da khong thanh cong';
       
        }
        include "dangnhap.html";
        
    ?>
        
    
        
        
            
?>