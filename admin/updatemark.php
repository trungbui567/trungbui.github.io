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
    <title>Chỉnh sửa điểm</title>
<link rel="stylesheet" href="../csss/updatemark.css" type="text/css">
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
        <form method="post" action="updatemark.php">
        <table class="table1">
            <h1>Tìm kiếm sinh viên</h1>
            <tr align="left">
            <th>Lớp : </th>
            <td><input type="text" name="class" placeholder="Điền lớp" class="box"/></td>
            <br>
            <th>Số điện thoại : </th>
            <td><input type="text" name="rollno" placeholder="Điền số điện thoại" class="box"/></td>  
            </tr>
            <tr align="left">
            <table class="table3">
            <th><input type="submit" value="Tìm kiếm" name="submit" class="submit"/></th>
            </tr>
            </table>
        <table class="table2">
              <tr> 
                <th class="student_id">Số thứ tự</th>
                <th class="student_class">Họ và tên</th>
                <th class="student_class">Họ tên cha</th>
                <th class="student_class">Nơi sinh sống</th>
                <th class="student_class">Lớp</th>
                <th class="student_class">Số điện thoại</th>
                <th class="student_edit">Chỉnh sửa</th>
                <th class="student_edit">Xoá</th>
            </tr>
         <?php
            if(isset($_POST['submit']))
            {
                include('../dbcon.php');
                $class=$_POST['class'];
                $rollno=$_POST['rollno'];
                
                $sql="SELECT * FROM `student_data` WHERE `u_class`='$class'  AND `u_rollno`='$rollno' ";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<0)
                {
                     ?>
                     <script>
                     alert('Không tìm thấy');
                     </script>
                    <?php
                }
                else
                {
                 while($data=mysqli_fetch_assoc($run))  
                 {
             ?>
                   <tr>
            <th class="student_class2"> <?php  echo $data['id'].'<br>'; ?></th>
            <th class="student_class2"> <?php  echo $data['u_name'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['u_father'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['u_village'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['u_class'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['u_rollno'].'<br>'; ?></th> 
            <th class="student_class2"><a href="updatemark_form.php?sid=<?php echo $data['u_rollno']; ?>">Chỉnh sửa</a></th> 
            <th class="student_class2"><a href="delete_data.php?sid=<?php echo $data['u_rollno']; ?>">Xoá</a></th> 
           </tr>    
               <?php  
                 }
                }
            }
            ?>
        </table>   
      </form>
 </div>
 </header>
</body>
</html>