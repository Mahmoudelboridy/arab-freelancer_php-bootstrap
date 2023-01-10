<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert products-admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    * {
        font-size: 17pt;
    }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-3">
        <h1 class="text-center">اضف مشروع</h1>
        <form action="" method="POST">

            <div class="form-outline mb-4  ">
                اسم المشروع<input placeholder="ادخل اسم المشروع" type="text" name="project_title" autocomplete="off"
                    required="requird" class="form-control" />
            </div>
            <div class="form-outline mb-4">
                وصف المشروع <input placeholder="ادخل وصف المشروع" style="height:120px;" type="text" class="form-control"
                    name="project_description" autocomplete="off" required="requird" />
            </div>
            <div class="form-outline mb-4">
                اختار تخصص المشروع
                <select class="form-select" name="project_category">
                    <?php
                    
                $select_query="SELECT * FROM `category`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                 $category_title=$row['category_title'];
                 $category_id=$row['category_id'];
                 echo "<option value='$category_id'>$category_title</option>";
                }
              
                ?>
                </select>
            </div>
            <div class="form-outline mb-4 ">
                المدة المتوقعة لتسليم المشروع <input class="form-control" type="number" name="project_time"
                    autocomplete="off" required="requird" />يوم
            </div>
            <div class="form-outline mb-4 ">
                الميزانية المتوقعة للمشروع بالدولار
                <input class="form-control" type="number" name="project_money" autocomplete="off" required="requird" />$
            </div>

            <div class="form-outline mb-4 text-center">
                <button class="btn btn-info " name="insert_project">اضف المشروع</button>
            </div>

        </form>
    </div>

</body>

</html>

<?php
if(isset($_POST['insert_project'])){
    $project_title=$_POST['project_title'];
    $project_description=$_POST['project_description'];
    $project_category=$_POST['project_category'];
    $project_time=$_POST['project_time'];
    $project_money=$_POST['project_money'];
    $status="لم يتم تاكيد من الادمن ";
    $project_done="لم يكتمل انهاء المشروع من الفرى لانسر";
    $insert_project="INSERT INTO `add_project`(user_id,
    user_name,project_name,project_description,
    project_category,project_time,project_money,
    status,date,project_done) VALUES ('$user_id','$user_name',
    '$project_title','$project_description','$project_category',
    '$project_time','$project_money','$status',NOW(),'$project_done')";
    $query=mysqli_query($con,$insert_project);
    if($query){
        echo "<script>alert('تم اضافة المشروع')</script>";
        echo "<script>window.open('profile_seller.php','_self')</script>";
       }

}


?>