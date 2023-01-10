<?php
include ('C:\xampp\htdocs\arab_freelancer\includes\db.php');
@session_start();
$user_id=$_SESSION['id'];
$user_name=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اكمل ملفك الشخصى</title>
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
        <h1 class="text-center">اكمل ملفك الشخصى</h1>
        <form action="" method="POST">

            <div class="form-outline mb-4  ">
                المسمى الوظيفى<input placeholder="المسمى الوظيفى" type="text" name="jop_title" autocomplete="off"
                    required="requird" class="form-control" />
            </div>
            <div class="form-outline mb-4">
                اكتب عن نفسك <input placeholder="ادخل وصف لعملك" style="height:120px;" type="text" class="form-control"
                    name="jop_description" autocomplete="off" required="requird" />
            </div>
            <div class="form-outline mb-4">
                تخصصك الوظيفى
                <select class="form-select" name="jop_category">
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
                وضح مهاراتك
                <input class="form-control" type="text" placeholder="وضح مهاراتك" name="maharat" autocomplete="off"
                    required="requird" />
            </div>

            <div class="form-outline mb-4 text-center">
                <button class="btn btn-info " name="tm">تم</button>
            </div>

        </form>
    </div>

</body>

</html>

<?php
if (isset($_POST['tm'])){
   $jop_title=$_POST['jop_title'];
   $jop_description=$_POST['jop_description'];
   $jop_category=$_POST['jop_category'];
   $maharat=$_POST['maharat'];
   $insert="INSERT INTO `freelancer_profile`
   (user_id,user_name,mosama_wazefy,shara7,
   maharat,maharat_tfseel) VALUES 
    ('$user_id','$user_name','$jop_title',
    '$jop_description','$jop_category','$maharat')";
        $query=mysqli_query($con,$insert);
        if($query){
            echo "<script>alert('تم اضافة بروفيلك الخاص')</script>";
            echo "<script>window.open('profile_freelancer.php','_self')</script>";
           }
    


}

?>