<?php
include ('../includes/db.php');
$project_id=$_GET['project_id'];
$update_query="UPDATE `add_project` SET status='تم النشر' WHERE project_id='$project_id'";
$resultn=mysqli_query($con,$update_query);
echo "<script>window.open('index.php','_self')</script>";



?>