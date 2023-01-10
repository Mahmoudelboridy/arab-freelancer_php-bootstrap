<?php
include ('../includes/db.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
a {
    text-decoration: none;
}
</style>

<body>



    <nav class="navbar navbar-expand-lg bg-primary bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="text-light nav-link active fw-semibold" aria-current="page" href="../index.php">الصفحة
                            الرئيسية</a>
                    </li>
                </ul>
    </nav>





    <div class="container-fluid my-3">
        <h2 class="text-center">تسجيل الدخول</h2>
        <div class="row mt-5 d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST">
                    <div class="form-outline mb-4">
                        <label class="mb-1">الايميل</label> <input type="text" class="form-control"
                            placeholder="ادخل ايميلك" required="required" name="user_email" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">الباسورد</label> <input type="password" class="form-control"
                            placeholder="ادخل الباسورد" required="required" name="user_password" />
                    </div>
                    <div class="text-center">
                        <button class="bg-info mb-3 py-2 px-3 border-0" name="user_login">تسجيل الدخول</button>
                        <p class="fw-bold mb-0" style="font-size:18pt;">ليس لديك حساب ؟ <a href="signup.php">حساب
                                جديد</a></p>
                        <br>
                        <a class="fw-bold mb-0" style="font-size:18pt;" href="forgetpass.php">نسيت كلمة السر</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php

if(isset($_POST['user_login'])){
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $user_email=stripcslashes($user_email);
    $user_password=stripcslashes($user_password);
    $user_email=mysqli_real_escape_string($con,$user_email);
    $user_password=mysqli_real_escape_string($con,$user_password);

$select_query="SELECT * FROM `users` WHERE user_email='$user_email'";
$query=mysqli_query($con,$select_query); 
$row=mysqli_num_rows($query);
$row_data=mysqli_fetch_assoc($query);
if($row>0){
    if(!password_verify($user_password,$row_data['user_password'])){
        echo "<script>alert('الباسورد خطأ')</script>";
    }
    else{
    if($row_data['user_mode']=='1'){
        $user_username=$row_data['user_name'];
        $user_id=$row_data['user_id'];
        $user_mode=$row_data['user_mode'];
        $_SESSION['username']=$user_username;   
        $_SESSION['id']=$user_id;     
        $_SESSION['mode']=$user_mode;
        echo "<script>alert('تم تسجيل الدخول')</script>";
        echo "<script>window.open('./seller_area/profile_seller.php','_self')</script>";
    }
    else{
        $user_username=$row_data['user_name'];
        $user_id=$row_data['user_id'];
        $_SESSION['username']=$user_username;  
        $_SESSION['id']=$user_id; 
        $user_mode=$row_data['user_mode'];   
        $_SESSION['mode']=$user_mode;

        $sql="SELECT * FROM `freelancer_profile` WHERE user_id='$user_id'";
        $queryn=mysqli_query($con,$sql);
        $row=mysqli_num_rows($queryn);
        if($row=='0'){
            echo "<script>alert('تم تسجيل الدخول')</script>";
            echo "<script>window.open('./freelancer_area/profile_edit.php','_self')</script>";       
        }else{
        echo "<script>alert('تم تسجيل الدخول')</script>";
        echo "<script>window.open('./freelancer_area/profile_freelancer.php','_self')</script>";
        }
    }
}}
else{
    echo "<script>alert('الايميل او الباسورد خطا ')</script>";

}}







?>