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
    <title>Nhập điểm</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li class="logout"><a href="admindash.php">Tổng quan</a></li>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="aboutus.php">Thông tin</a></li>
                <li><a href="contactus.php">Liên hệ</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>Nhập thông tin sinh viên</h2>
        <form method="post" enctype="multipart/form-data" action="secondstep.php">
        <table class="table1">
            <tr>
                <th>Họ tên sinh viên</th><th>Lớp</th><th>Số điện thoại</th>
            </tr>
            <tr>
                <td><input type='text' name='name' placeholder='Nhập họ và tên' required class="box"/></td>
                <td><input type='text' name='class' placeholder='Nhập lớp' required class="box"/></td>
                <td><input type='text' name='rollno' placeholder='Nhập số điện thoại' required class="box"/></td>
            </tr>
        </table>
        <table class="table2">
            <tr>
                <th>Họ tên cha </th><th>Họ tên mẹ</th><th>Số điện thoai</th><th>Nơi sinh sống</th>
            </tr>
                <tr>
                <td><input type='text' name='father' placeholder="Nhập họ tên bố" required class="box"/></td>
                 <td><input type='text' name='mother' placeholder="Nhập họ tên mẹ" required class="box"/></td>
                 <td><input type='text' name='mobile' placeholder='Nhập số điện thoại' required class="box"/></td>
                 <td><input type='text' name='village' placeholder='Nhập nơi sinh sống' required class="box"/></td>
            </tr>    
        </table>
        <table class="table3">
            <tr>
               <th>Chọn ảnh -</th>
               <td><input type="file" name="img" required/></td>
            </tr> 
        </table>
        <table class="table4">
            <tr>
           <td align="center" colspan="2"><input type="submit" name="submit1" value="Tiếp theo" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
</body>
</html> 
