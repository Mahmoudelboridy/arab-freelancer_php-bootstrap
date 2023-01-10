<?php
include ('C:\xampp\htdocs\arab_freelancer\includes\db.php');
include ('C:\xampp\htdocs\arab_freelancer\functions\functions.php');
@session_start();
$user_id=$_SESSION['id'];
$user_name=$_SESSION['username'];

?>
<?php
if(isset($_GET['project_id'])){
    $project_id=$_GET['project_id'];
    $select="SELECT * FROM `add_project` WHERE project_id='$project_id'";
    $query=mysqli_query($con,$select);
    $row=mysqli_fetch_assoc($query);
    $project_name=$row['project_name'];
    $project_description=$row['project_description'];
    $project_time=$row['project_time'];
    $project_money=$row['project_money'];
    $date=$row['date'];
    $tagr_id=$row['user_id'];
    $tagr_name=$row['user_name'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشاريع</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .mn {
        border-radius: 40px;
        background-color: #76ff03;
        text-decoration: none;
        border: 1px solid green;
        color: white;
        background-color: green;
        margin-left: 2px;
        padding-left: 5px;
    }

    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="./freelancer_area/profile_freelancer.php">حسابى</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="projects_all.php">المشاريع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="">عروضى</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"><i class="fa-regular fa-bell"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row px-1">
        <div class="col-md-12">

            <div class="card text-center">
                <div class="card-header">
                    <h2><?php echo $project_name ; ?></h2>
                </div>
                <div class="card-body">
                    <h4 class="card-text"><?php echo $project_description ?></h4>
                    <p class="card-text"><?php echo $project_money ?>$</p>
                    <p class="card-text"><?php echo $project_time ?> يوم</p>
                </div>
                <div class="card-footer text-muted">
                    <?php echo $date ; ?>
                </div>
            </div>



            <?php
            $ss="SELECT * FROM `add_3ard` WHERE user_id='$user_id' AND project_id='$project_id'";
            $ss_q=mysqli_query($con,$ss);
            $row_ss=mysqli_num_rows($ss_q);

           $s_payment="SELECT * FROM `payment` WHERE project_id='$project_id'";
           $s_payment_query=mysqli_query($con,$s_payment);
           $s_row=mysqli_num_rows($s_payment_query);

           
            if($s_row>0){
                echo "<h2 class='text-center text-danger'>اتفق صاحب هذا المشروع مع فرى لانسر فعلا وانتهى الامر</h2>";
            }
            else{
                if($row_ss==0 ){
                    include ('add_3ard.php');
                    }
                    else{
                        echo "<h2 class='text-center text-danger'>انت مقدم عرض فعلا</h2>";
                    }
            }
          
            echo"<br><br><br><br><br><br><br><br><br><br>";
            $sss="SELECT * FROM `add_3ard` WHERE  project_id='$project_id'";
            $sss_q=mysqli_query($con,$sss);
            while($row_sss=mysqli_fetch_assoc($sss_q)){
            $s_user_name=$row_sss['user_name'];
            $s_3ard_title=$row_sss['3ard_title'];
            $s_3ard_description=$row_sss['3ard_description'];
            $s_3ard_money=$row_sss['3ard_money'];
            $s_3ard_time=$row_sss['3ard_time'];
            $s_date=$row_sss['date'];
            echo "
            <div class='card text-center'>
  <div class='card-header'>
    <h2>$s_3ard_title</h2>
  </div>
  <div class='card-body'>
    <h5 class='card-title'>$s_user_name</h5>
    <p class='card-text'>$s_3ard_description</p>
    <p  class='text-center'>$s_3ard_money $</p>
    <p  class='text-center'>$s_3ard_time يوم</p>
  </div>
  <div class='card-footer text-muted'>
  $s_date
  </div>
</div>
            ";


            }
            ?>



        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
if(isset($_POST['insert_aard'])){
$aard_title=$_POST['aard_title'];
$aard_description=$_POST['aard_description'];
$aard_time=$_POST['aard_time'];
$aard_money=$_POST['aard_money'];
$insert_aard="INSERT INTO `add_3ard`(project_id,
user_id,user_name,tagr_id,tagr_name,3ard_title,
3ard_description,3ard_money,3ard_time,date) VALUES 
('$project_id','$user_id','$user_name','$tagr_id',
'$tagr_name','$aard_title','$aard_description','$aard_money',
'$aard_time',NOW())";
$insert_aard_query=mysqli_query($con,$insert_aard);

if($insert_aard_query){
    echo "<script>alert('تم اضافة عرضك لذلك المشروع')</script>";
    echo "<script>window.open('projects_all.php','_self')</script>";
   }
}

?>