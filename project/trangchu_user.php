<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Jackie Do" />
    <link href="trangchu_user.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
            h3 { color: #FAF3F3;}
            h3 {text-align: center;}
    </style>
	<title>trangchu.com</title>
</head>

<body>

 <div id="trangchu_user"> 
    <?php
        if(isset($_SESSION['thanhcong']))
            {
            echo "<script>alert('Thanh cong')</script>";
            }
            else 
    ?>
    
    <div id="top"> 
            <div id="top_banner"> 
                    <img src="bck.png" width="982px" height="120px" alt="banner trang chu ĐHCT" usemap="#map_logo" />
                    <map name="map_logo" id="map_id">
                    <area href="http://www.ctu.edu.vn" alt="Trường Đại học Cần Thơ" shape="polygon" coords="26, 64, 77, 11, 128, 63, 72, 113"/>                    <area shape="circle" coords="100,80,52" href="trangchuDHCT.php" />
                    </map>
     </div>
     </div>
    <div id="chua_icon_trangchu">
        <div id="icon_trangchu"> Hệ thống xét tuyển ĐHCT </div>
    </div>
    <div id="template">
    <div id="mid"> 
        <div id="mid_left">
            <div class="module">
                <div class="inner">
                    <div class="module_body">
                        <ul class="menu_content">
                            <li class="left_1">
                            <a href="dangnhap.html" target="_blank">
                                <span> Giới thiệu các ngành, chuyên ngành tuyển sinh năm 2015 </span>
                            </a>
                            </li>
                            <li class="left_2">
                            <a href="dangnhap.html" target="_blank">
                                <span> Tuyển sinh đại học hệ chính quy 2015 </span>
                            </a>
                                <ul>
                                    <li class="left_2_1">
                                    <a href="dangnhap.html" target="_blank" onclick=" 
                                    window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;">
                                    <span> +  Thông tin chung </span>
                                    </a>
                                    </li>
                            
                                    <li class="left_2_2">
                                    <a href="dangnhap.html" target="_blank">
                                    <span> +  Thông tin xét tuyển </span>
                                    </a>
                                    </li>
                                    <li class="left_2_3">
                                    <a href="dangnhap.html" target="_blank">
                                    <span> +  Đăng ký xét tuyển </span>
                                    </a>
                                    </li>
                               
                                    <li class="left_2_4">
                                    <a href="dangnhap.html" target="_blank">
                                    <span> +  Danh mục tổ hợp ngành </span>
                                    </a>
                                    </li>
                                
                                </ul>
                            </li>
                            <li class="left_3">
                            <a href="dangnhap.html" target="_blank">
                                <span> Tuyển thẳng, ưu tiên xét tuyển</span>
                            </a>
                            
                                <ul>
                                    <li class="left_3_1">
                                    <a href="dangnhap.html" target="_blank" onclick=" 
                                    window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;">
                                    <span> +  Danh mục ngành được phép tuyển thẳng </span>
                                    </a>
                                    </li>
                               
                                    <li class="left_3_2">
                                    <a href="dangnhap.html" target="_blank">
                                    <span> +  Kết quả thí sinh được tuyển thẳng </span>
                                    </a>
                                    </li>
                                
                                    <li class="left_3_3">
                                    <a href="dangnhap.html" target="_blank">
                                    <span> +  Danh sách thí sinh được ưu tiên xét tuyển </span>
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="left_4">
                            <a href="dangnhap.html" target="_blank">
                                <span> Điểm tuyển đại học </span>
                            </a>
                                <ul>
                                    <li class="left_4_1">
                                    <a href="dangnhap.html" target="_blank" onclick=" 
                                    window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,');return false;">
                                    <span> +  Danh mục điểm sàn theo ngành năm 2015 </span>
                                    </a>
                                    </li>
                               
                                    <li class="left_4_2">
                                    <a href="dangnhap.html" target="_blank">
                                    <span> +  Danh mục điểm trúng tuyển theo ngành năm 2015</span>
                                    </a>
                                    </li>    
                                </ul>
                            </li>    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div id="mid_letter"></div>
    <div id="mid_right">
        <div id="module_right_top">
            <div class="inner_right">
                <div class="module_body"> 
                    <p style="text-align: left;">
                    <a href="dkxt.html" style="font-size: 13px;" >
                        <b>
                            <font color="#F7E543" >»&nbsp;ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC TRỰC TUYẾN </font>
                            
                            
                        </b>
                    </a>
                    <br />
                    <a>
                        <b> 
                            <font color="#908E8E">--------------------------------------------</font>
                        </b>
                    </a>
                     <br />
                    <a href="http://ctu.edu.vn" style="font-size: 12px;" >
                        <b> 
                            <font color="#FFFFFF" >»&nbsp;RÚT HỒ SƠ ĐKXT </font> 
                        </b>
                    </a>
                    <br/>
                    <a>
                        <b> 
                            <font color="#908E8E">--------------------------------------------</font>
                        </b>
                    </a>
                    <br />
                    <a href="http://ctu.edu.vn" style="font-size: 12px;">
                        <b> 
                            <font color="#FFFFFF" >»&nbsp;THAY ĐỔI NGÀNH ĐKXT</font> 
                        </b>
                    </a>
                    <br/>
                    <a>
                        <b> 
                            <font color="#908E8E">--------------------------------------------</font>
                        </b>
                    </a>
                    <br />
                    <a href="http://ctu.edu.vn" style="font-size: 12px;">
                        <b> 
                            <font color="#FFFFFF" >»&nbsp;DANH SÁCH THÍ SINH ĐÃ THAM GIA ĐKXT ĐỢT 1 </font> 
                        </b>
                    </a>
                    <br/>
                    <a>
                        <b> 
                            <font color="#908E8E">--------------------------------------------</font>
                        </b>
                    </a>
                    <br />
                    <a href="http://ctu.edu.vn" style="font-size: 12px;">
                        <b> 
                            <font color="#F7E543" >»&nbsp;DANH SÁCH THÍ SINH TRÚNG TUYỂN NGUYỆN VỌNG 1 </font> 
                        </b>
                    </a>
                    <br/>
                    <a>
                        <b> 
                            <font color="#908E8E">--------------------------------------------</font>
                        </b>
                    </a>
                    <br />
                    <a href="http://ctu.edu.vn" style="font-size: 12px;">
                        <b> 
                            <font color="#FFFFFF" >»&nbsp;DANH SÁCH THÍ SINH TRÚNG TUYỂN NGUYỆN VỌNG BỔ SUNG </font> 
                        </b>
                    </a>
                    </p>
                </div>
            </div>
        </div>
        <div id="module_right_letter">
            <div class="inner_letter">
            <br />
    				<h3>NGUYÊN TẮC VÀ THỦ TỤC</h3>
                    <br />
                    <div class="module-body_letter">
                        <p>
                            <a href="http://ctu.edu.vn" style="font-size: 13px;" >
                                <b> 
                                    <font color="#0069d0" > =>&nbsp; Quy đinh chung </font> 
                                </b>
                            </a>
                            <br/>
                            <a href="http://ctu.edu.vn" style="font-size: 13px;" >
                                <b> 
                                    <font color="#0069d0"> =>&nbsp; Nguyên tắc xét tuyển </font> 
                                </b>
                            </a>
                            <br/>
                            <a href="http://ctu.edu.vn" style="font-size: 13px;" >
                                <b> 
                                    <font color="#0069d0" > =>&nbsp; Thời gian xét tuyển </font> 
                                </b>
                            </a>
                            <br />
                            <a href="http://ctu.edu.vn" style="font-size: 13px;" >
                                <b> 
                                    <font color="#0069d0" > =>&nbsp; Thủ tục nhập học </font> 
                                </b>
                            </a>
                            <br />
                        </p>
    	            </div>
            </div> 
	   </div>
        <div id="module_right_bottom">
        </div>
    
    </div>
    </div>
</div>    
        
 

</body>
</html>


<?php

?>