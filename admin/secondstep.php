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
    <title>Điền thông tin điểm</title>
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">
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
            </ul>
        </div>
    </nav>
    <div class="main-content-header"> 
        <form method="post" action="thirdstep.php">
        <div class="main-content-header1">
              <h2>Điền thông tin điểm</h2>       
        <td><input type="hidden" name="class" class="class" value="<?php  echo $_POST['class']; ?>" required/></td>    
        <td><input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td> 
        <table class="table1">
            <tr>
            <th>Triết học</th><th>Tiếng Anh</th><th>Toán cao cấp</th><th>Kinh tế chính trị</th>
            </tr>
            <tr>
                <td><input type='text' name='triethoc' placeholder='Triết học' required/></td>
                <td><input type='text' name='tienganh' placeholder='Tiếng Anh' required/></td>
                <td><input type='text' name='toan' placeholder='Toán cao cấp' required/></td>
                <td><input type='text' name='kinhte' placeholder='Kinh tế chính trị' required/></td>
            </tr>
        </table>
        <table class="table2">
            <tr>
            <th>Lịch sử Đảng</th><th>Xác suất thống kê</th><th>Pháp luật đại cương</th><th>Thực tập</th>
            </tr>
            <tr>
                <td><input type='text' name='lichsu' placeholder='Lịch sử Đảng' required/></td>
                <td><input type='text' name='xacxuat' placeholder='Xác suất thống kê' required/></td>
                <td><input type='text' name='phapluat' placeholder='Pháp luật đại cương' required/></td>
                <td><input type='text' name='thuctap' placeholder='Thực tập' required/></td>
            </tr> 
        </table>
        <table class="table3">
            <tr>
            <th>CNXH khoa học</th><th>Tâm lý</th><th>Thể chất</th><th>Tin học</th>
            </tr>
            <tr>
                <td><input type='text' name='cnxh' placeholder='CNXH khoa học' required/></td>
                <td><input type='text' name='tamly' placeholder='Tâm lý' required/></td>
                <td><input type='text' name='thechat' placeholder='Thể chất' required/></td>
                <td><input type='text' name='tinhoc' placeholder='Tin học' required/></td>
            </tr>
        </table>
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="Xác nhận" class="submit"/></td>   
            </tr> 
        </table>
       </form>
      </div>
    </header> 
</body>
</html>
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Hoàn thành bước 1');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Lỗi');
        </script>
        <?php 
    }
}

?>
