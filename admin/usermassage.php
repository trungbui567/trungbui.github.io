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
    <title>Tin nhắn</title>
<link rel="stylesheet" href="../csss/usermassage.css" type="text/css">
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
                <li class="logout"><a href="admindash.php">Tổng quan</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form>
         <table>
          <tr>
           <th class="id_h1">Số thứ tự </th>
           <th class="name_h1">Họ và tên </th> 
           <th class="email_h1">Email </th> 
           <th class="contact_h1">Số điện thoại</th>
           <th class="massage_h1">Tin nhắn </th>
          </tr>        
<?php
include('../dbcon.php');
  $sql="SELECT * FROM `user_massage`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_email'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_contact'].'<br>'; ?></th> 
            <th class="massage_h"> <?php  echo $row['u_massage'].'<br>'; ?></th> 
        </tr>     
        <?php    
        } 
}
else{
    echo "Kết nối không thành công";
}
?>
              </table>
        </form>
      </div>
    </header>
</body>
</html>