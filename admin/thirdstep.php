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
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          <img src="../image/logo_1.png" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>First Step- Student Details</h2>
      </div>
    </header>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $triethoc=$_POST['triethoc'];
    $tienganh=$_POST['tienganh'];
    $toan=$_POST['toan'];
    $kinhte=$_POST['kinhte'];
    $lichsu=$_POST['lichsu'];
    $xacxuat=$_POST['xacxuat'];
    $phapluat=$_POST['phapluat'];
    $thuctap=$_POST['thuctap'];
    $cnxh=$_POST['cnxh'];
    $tamly=$_POST['tamly'];
    $thechat=$_POST['thechat'];
    $tinhoc=$_POST['tinhoc'];
    
    $sql="INSERT INTO `user_mark`(`u_rollno`,`u_class`,`u_triethoc`, `u_tienganh`, `u_toan`, `u_kinhte`, `u_lichsu`, `u_xacxuat`, `u_phapluat`, `u_thuctap`, `u_cnxh`, `u_tamly`, `u_thechat`, `u_tinhoc`) VALUES ('$rollno','$class','$triethoc','$tienganh','$toan','$kinhte','$lichsu','$xacxuat','$phapluat','$thuctap','$cnxh','$tamly','$thechat','$tinhoc')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Dữ liệu được cập nhật thành công');
        window.open('admindash.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>