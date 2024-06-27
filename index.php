<html>
<head>
    <title>Hệ thống quản lý điểm học sinh</title>
<link rel="stylesheet" href="csss/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="admin/aboutus.php">Thông tin</a></li>
              <li><a href="admin/contactus.php">Liên hệ</a></li>
              <li><a href="login.php">Đăng nhập</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">             
            <h2 class="search">Xem kết quả tại đây!</h2>
            <tr>
              <th class="name1">Số điện thoại</th>
              <td class="name2"><input type="text" name="rollno" placeholder="Nhập số thứ tự" required class="box1"/></td>
            </tr>
            <tr>
              <th class="standered1">Lớp</th>
              <td class="standered2"><input type="text" name="std" placeholder="Nhập lớp" required class="box2"/></td>
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