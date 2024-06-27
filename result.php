
<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$standerd=$_POST['std'];
	$rollno =$_POST['rollno'];
	$sql="SELECT * FROM `student_data` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
  $sql2="SELECT * FROM `user_mark` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$run2=mysqli_query($con,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);  
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>
<html>
<head>
    <title>Kết quả</title>
<link rel="stylesheet" href="csss/result.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>Trang chủ</b></a></li>
                <li><a href="admin/aboutus.php"><b>Thông tin</b></a></li>
                <li><a href="admin/contactus.php"><b>Liên hệ</b></a></li>
                <li><a href="login.php"><b>Tổng quan</b></a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <img src="dataimg/<?php  echo $data['u_image']; ?>" class="image2" /> 
              <tr>
              <th>Họ và tên:</th>
                <td><?php echo $data['u_name'] ?></td>
              </tr>
              <tr>
              <th>Lớp:</th>
              <td><?php echo $data2['u_class']; ?></td>
              </tr>
              <tr>
              <th>Số điện thoại:</th>
              <td><?php echo $data['u_rollno']; ?></td>
              </tr>
              <tr>
              <th>Nơi sinh sống:</th>
              <td><?php echo $data['u_village']; ?></td>
              </tr>
          </table>
          <table class="table2">
              <tr>
               <th>Môn học</th><th>Điểm</th>
              </tr>
              <tr>
              <th>Triết học</th>
                <th><?php echo $data2['u_triethoc']; ?></th>
              </tr>
              <tr>  
              <th>Tiếng anh</th>
                <th><?php echo $data2['u_tienganh']; ?></th>
              </tr>
              <tr>
              <th>Toán cao cấp</th>
                <th><?php echo $data2['u_toan']; ?></th>
              </tr>
              <tr>
              <th>Kinh tế chính trị</th>
                <th><?php echo $data2['u_kinhte']; ?></th>
              </tr>
              <tr>
              <th>Lịch sử Đảng</th>
                <th><?php echo $data2['u_lichsu']; ?></th>
              </tr>
              <th>Xác suất thống kê</th>
                <th><?php echo $data2['u_xacxuat']; ?></th>
              </tr>
              <th>Pháp luật đại cương</th>
                <th><?php echo $data2['u_phapluat']; ?></th>
              </tr>
              <th>Thực tập</th>
                <th><?php echo $data2['u_thuctap']; ?></th>
              </tr>
              <th>CNXH khoa học</th>
                <th><?php echo $data2['u_cnxh']; ?></th>
              </tr>
              <th>Tâm lý</th>
                <th><?php echo $data2['u_tamly']; ?></th>
              </tr>
              <th>Thể chất</th>
                <th><?php echo $data2['u_thechat']; ?></th>
              </tr>
              <th>Tin học</th>
                <th><?php echo $data2['u_tinhoc']; ?></th>
              </tr>
              <tr>
              <th>Tổng</th>
                  <th>
                   <?php echo $data2['u_triethoc']+$data2['u_tienganh']+$data2['u_toan']+$data2['u_kinhte']+$data2['u_lichsu']+$data2['u_xacxuat']+$data2['u_phapluat']+$data2['u_thuctap']+$data2['u_cnxh']+$data2['u_tamly']+$data2['u_thechat']+$data2['u_tinhoc']; ?>
                  </th>
              </tr>    
          </table>
            <marquee scrollamount="10"><p>Kết quả của bạn đã được công bố. Vui lòng kiểm tra điểm của bạn và trong trường hợp có bất kỳ sai sót nào, hãy liên hệ với quản trị viên.</p></marquee>
       </form>
      </div>
    </header>
</body>
</html>
<?php
}
else
{
?>
<script>
alert('Không tìm thấy');
    window.open('index.php','_self');
</script>
<?php
}
}
?>