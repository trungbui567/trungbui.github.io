<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
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
    
    $sql="UPDATE `user_mark` SET  `u_triethoc` = '$triethoc', `u_tienganh` = '$tienganh', `u_toan` = '$toan', `u_kinhte` = '$kinhte', `u_lichsu` = '$lichsu', `u_xacxuat` = '$xacxuat', `u_phapluat` = '$phapluat', `u_thuctap` = '$thuctap', `u_cnxh` = '$cnxh', `u_tamly` = '$tamly', `u_thechat` = '$thechat', `u_ttinhoc` = '$tinhoc' WHERE `u_rollno` = '$rollno'";
    $run=mysqli_query($con,$sql);
if($run)
    {
        ?>
        <script>
        alert('Cập nhật dữ liệu thành công');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
        <?php
    }
    else
    {
        echo "Không thành công";
    }
}
?>