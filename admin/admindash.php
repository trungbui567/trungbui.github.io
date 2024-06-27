<?php
session_start();		
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
?>
<html>
<head>
    <title>Tổng quan</title>
<link rel="stylesheet" href="../csss/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
      <nav>
      <div class="row clearfix">
        <ul class="main-nav" animate slideInDown>
            <li><a href="../index.php">Trang chủ</a></li>
            <li><a href="aboutus.php">Thông tin</a></li>
            <li><a href="contactus.php">Liên hệ</a></li>
            <li class="logout"><a href="logout.php">Đăng xuất</a></li>   
        </ul>
      </div>
      </nav>
      <div class="main-content-header">
      <h1>Các chức năng của quản trị viên</h1>
      <h3><a href="addmark.php">+ Nhập điểm </a></h3>
      <h3><a href="updatemark.php">+ Tuỳ chỉnh dữ liệu </a></h3>
      <h3><a href="allstudentdata.php">+ Danh sách các sinh viên </a></h3>
      <h3><a href="usermassage.php">+ Tin nhắn từ sinh viên</a></h3>
      </div>
    </header>    
</body>
</html>