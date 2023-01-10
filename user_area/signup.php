<?php
include ('../includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب جديد</title>
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
                        <a class="nav-link active text-light fw-semibold" aria-current="page" href="../index.php">الصفحة
                            الرئيسية</a>
                    </li>
                </ul>
    </nav>

    <div class="container-fluid my-3">
        <h2 class="text-center">حساب جديد</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label class="mb-1">الاسم</label> <input type="text" class="form-control"
                            placeholder="ادخل اسمك" autocomplete="off" required="required" name="user_username" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">الايميل</label> <input type="email" class="form-control"
                            placeholder="ادخل ايميلك" autocomplete="off" required="required" name="user_email" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">صورتك الشخصية</label> <input type="file" class="form-control"
                            required="required" name="user_image" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">الباسورد</label> <input type="password" class="form-control"
                            placeholder="ادخل الباسورد الخاص بيك" autocomplete="off" required="required"
                            name="user_password" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">تاكيد الباسورد</label> <input type="password" class="form-control"
                            placeholder="اكد الباسورد الخاص بيك" autocomplete="off" required="required"
                            name="conf_user_password" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="mb-1">نوع الحساب</label>
                        <select class="form-select" name="user_mode">
                            <option value='1'>صاحب مشروع</option>
                            <option value='2'>فرى لانسر</option>

                        </select>
                    </div>
                    <div class="text-center">
                        <button class="bg-info mb-3 py-2 px-3 border-0" name="user_register">حساب جديد</button>
                        <p class="fw-bold mb-0" style="font-size:18pt;">لديك حساب فعلا ؟ <a href="login.php">تسجيل
                                الدخول</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php

if(isset($_POST['user_register'])){
  $user_username=$_POST['user_username'];
  $user_email=$_POST['user_email'];
  $user_password=$_POST['user_password'];
$hash_password=password_hash($user_password,PASSWORD_DEFAULT);
$conf_user_password=$_POST['conf_user_password'];
$user_mode=$_POST['user_mode'];
$imagename=$_FILES['user_image']['name'];
$temp=$_FILES['user_image']['tmp_name'];
$folder='user_images/'.$imagename ;

    $select_query="SELECT * FROM `users` 
WHERE user_name='$user_username' OR user_email='$user_email'";
$result=mysqli_query($con,$select_query);
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    echo "<script>alert('الاسم او الايميل موجود فعلا');</script>";
}
elseif($user_password!=$conf_user_password){
  echo "<script>alert('الباسورد غير متطابق');</script>";
}
elseif(!filter_var($user_email,FILTER_VALIDATE_EMAIL)){
    echo "
    <script>
    alert('ادخل ايميل صحيح ');
    </script>
    ";
}
else{
    move_uploaded_file($temp,$folder);
$insert_users="INSERT INTO `users`(user_name,user_email,
user_image,user_password,user_mode) VALUES 
('$user_username','$user_email','$imagename','$hash_password',
'$user_mode')";
   $sql_execute=mysqli_query($con,$insert_users);
   if($sql_execute){
    echo "<script>alert('تم انشاء حساب جديد ');</script>";
    echo "<script>window.open('../index.php','_self')</script>";
}else
    {
     echo "لم يتم انشاء حساب للاسف";
    }

}



}

?>