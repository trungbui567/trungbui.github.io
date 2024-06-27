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
    <title>Thông tin sinh viên</title>
<link rel="stylesheet" href="../csss/allstudentdata.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php"><b>Trang chủ</b></a></li>
                <li><a href="aboutus.php"><b>Thông tin</b></a></li>
                <li><a href="contactus.php"><b>Liên hệ</b></a></li>
                <li class="logout"><a href="admindash.php"><b>Tổng quan</b></a></li>    
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <h2>Thông tin sinh viên</h2>
        <form>
         <table>
          <tr>
            <th class="id_h1">Số thứ tự</th>
            <th class="name_h1">Họ và tên</th> 
            <th class="contact_h1">Lớp</th> 
            <th class="contact_h1">Số điện thoại</th>
            <th class="contact_h1">Họ tên cha</th>
            <th class="massage_h1">Họ tên mẹ</th>
            <th class="contact_h1">Nơi sinh sống</th>
         </tr>   
<?php
include('../dbcon.php');
  $sql="SELECT * FROM `student_data`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_class'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_rollno'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_father'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_mother'].'<br>'; ?></th>
            <th class="contact_h"> <?php  echo $row['u_village'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
}
?>
              </table>
        </form>
      </div>
    </header>
</body>
</html>