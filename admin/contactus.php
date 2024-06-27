<html>
<head>
    <title>Liên hệ</title>
<link rel="stylesheet" href="../csss/contactus.css" type="text/css">
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
                <li><a href="../login.php">Đăng nhập</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method='post'>
          <table class="table">
              <h2 class="search">Tổng đài trợ giúp miễn phí !<h2>             
              <h2 class="search1">Gửi tin nhắn trợ giúp tới quản trị viên</h2>                         
              <tr>
                <th class='tblheading'>Điền tên của bạn</th>
              </tr>
              <tr>
              <td><input type='text' class='tbldata' name='name' placeholder='Họ và tên' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Email</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='email' placeholder='Email' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Số điện thoại</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='cont' placeholder='Nhập số điện thoại' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Bạn cần sự trợ giúp gì ?</th>
              </tr>
              <tr>
                <td ><textarea class='tbldata1' name="massage" placeholder='Nhập vấn đề cần sự trợ giúp'></textarea></td>
              </tr>
              <tr>
              <td colspan='2' align='center'><input type="submit" name='submit' value='Gửi yêu cầu trợ giúp' class='submit'/></td>
              </tr>
          </table>
       </form>
      </div>
    </header>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $massage=$_POST['massage'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_massage`) VALUES ('$username','$email','$contact','$massage')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Yêu cầu trợ giúp của bạn đã được gửi tới quản trị viên');
     </script>
   <?php
    }
}
?>