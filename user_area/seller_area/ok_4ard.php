<?php
include ('C:\xampp\htdocs\arab_freelancer\includes\db.php');
?>

<?php
 if(isset($_GET['aard_id'])){
    $aard_id=$_GET['aard_id'];
    $select="SELECT * FROM `add_3ard` WHERE 3ard_id='$aard_id'";
    $query=mysqli_query($con,$select);
    $row=mysqli_fetch_assoc($query);
    $project_id=$row['project_id'];
    $user_id=$row['user_id'];
    $user_name=$row['user_name'];
    $tagr_id=$row['tagr_id'];
    $tagr_name=$row['tagr_name'];
    $aard_title=$row['3ard_title'];
    $aard_money=$row['3ard_money'];
    $aard_id=$row['3ard_id'];

    $selectn="SELECT * FROM `add_project` WHERE project_id='$project_id'";
    $queryn=mysqli_query($con,$selectn);
    $rown=mysqli_fetch_assoc($queryn);
    $project_name=$rown['project_name'];


 }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الدفع</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container my-5">
        <h1 class="text-center text-light">Confirm Payment</h1>
        <form action="" method="POST">
            <div class="form-outline my-4 text-center w-50 m-auto">
                <h5 class="text-light">السعر</h5>
                <h5 class="text-light"><?php echo $aard_money ?></h5>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <h5 class='text-light'>اختار طريقة الدفع</h5>
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option>bank cart</option>
                    <option>vodafone cash</option>
                    <option>Paypal</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <button class="bg-info py-2 px-3 border-0" name="confirm_payment">تاكيد</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
if(isset($_POST['confirm_payment'])){
$payment_mode=$_POST['payment_mode'];
$insert="INSERT INTO `payment`(3ard_id,project_id,user_id,
user_name,tagr_id,tagr_name,project_name,3ard_title,
3ard_money,how_pay) VALUES ('$aard_id','$project_id',
'$user_id','$user_name','$tagr_id','$tagr_name',
'$project_name','$aard_title','$aard_money','$payment_mode')";
$result=mysqli_query($con,$insert);
if($result){
    echo "<script>alert('تم عملية الدفع بنجاح');</script>";
    echo "<script>window.open('profile_seller.php','_self')</script>";
}
$update="UPDATE `add_project` SET project_done='تم الدفع وسيتم التنفيذ ان شاء الله' WHERE project_id='$project_id'";
$update_query=mysqli_query($con,$update);
}

?>