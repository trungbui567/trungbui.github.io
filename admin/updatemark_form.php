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
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];
$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);
$class=$row['u_class'];
$sql2="SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2)
?>
<html>
<head>
    <title>Chỉnh sửa</title>
<link rel="stylesheet" href="../csss/updatemark_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="admindash.php"><b>Tổng quan</b></a></li>
                <li><a href="../index.php"><b>Trang chủ</b></a></li>
                <li><a href="aboutus.php"><b>Thông tin</b></a></li>
                <li><a href="contactus.php"><b>Liên hệ</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <form method="post" action="update_mark_data.php">
          <div class="main-content-header1">
              <table>
             <h4> 
                <tr>
                  <th>Họ tên sinh viên: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Lớp: </th>
                  <td><span class="span"><?php echo $row['u_class']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Số điện thoại: </th>
                  <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
             <tr>
             <th>Triết học</th><th>Tiếng Anh</th><th>Toán cao cấp</th><th>Kinh tế chính trị</th>
             </tr>
             <tr> 
                 <td><input type='text' name='triethoc' value="<?php echo $data['u_triethoc']; ?>" class="th" required/></td>
                 <td><input type='text' name='tienganh' value="<?php echo $data['u_tienganh']; ?>" class="th"/></td>
                 <td><input type='text' name='toan' value="<?php echo $data['u_toan']; ?> " class="th" required/></td>
                 <td><input type='text' name='kinhte' value="<?php echo $data['u_kinhte']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
             <th>Lịch sử Đảng</th><th>Xác suất thống kê</th><th>Pháp luật đại cương</th><th>Thực tập</th>
             </tr>
                <tr>
                <td><input type='text' name='lichsu' value="<?php echo $data['u_lichsu']; ?> " class="th" required/></td>
                <td><input type='text' name='xacxuat' value="<?php echo $data['u_xacxuat']; ?> " class="th" required/></td>
                <td><input type='text' name='phapluat' value="<?php echo $data['u_phapluat']; ?> " class="th" required/></td>
                <td><input type='text' name='thuctap' value="<?php echo $data['u_thuctap']; ?> " class="th" required/></td>
             </tr>
         </table>
         <table class="table3">
             <tr>
             <th>CNXH khoa học</th><th>Tâm lý</th><th>Thể chất</th><th>Tin học</th>
             </tr>
             <tr>
                <td><input type='text' name='cnxh' value="<?php echo $data['u_cnxh']; ?> " class="th" required/></td>
                <td><input type='text' name='tamly' value="<?php echo $data['u_tamly']; ?> " class="th" required/></td>
                <td><input type='text' name='thechat' value="<?php echo $data['u_thechat']; ?> " class="th" required/></td>
                <td><input type='text' name='tinhoc' value="<?php echo $data['u_tinhoc']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>"/></td>
            </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Xác nhận" class="submit"/></td>   
             </tr> 
         </table>
       </form>
      </div>
    </header>
</body>
</html>