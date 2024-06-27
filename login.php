<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');	
}
?>
<html>
<head>
    <title>Đăng nhập</title>

    <link rel="stylesheet" href="csss/login.css" type="text/css">
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
      <div class="login-content-header">
          <form action="login.php" method="post">
           <h1 class="login_heading">Quản trị viên</h1>
           <table class="form1">
            <tr>
            <th>Tên đăng nhập </th>
            <td class="table"><input type="text" name="username" placeholder="Nhập tên đăng nhập" class="field1"/></td>  
            </tr> 
            <tr >
            <th>Mật khẩu </th>
            <td class="table"><input type="password" name="password" placeholder="Nhập mật khẩu" class="field1"/></td>
            </tr>   
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="Đăng nhập" class="submit"/></td>
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
    include('dbcon.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Tên đăng nhập hoặc mật khẩu không đúng');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:admin/admindash.php');
    }
}
?>