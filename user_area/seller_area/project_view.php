<?php
include ('C:\xampp\htdocs\arab_freelancer\includes\db.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<nav class="navbar navbar-expand-lg bg-primary bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="./profile_seller.php">حسابى</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-light" href="profile_seller.php?add_project">اضف مشروع<i
                            class="fa-solid fa-plus"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

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
    echo "
    <div class='card text-center'>
  <div class='card-header'>
  <h2>$project_name</h2>
  </div>
  <div class='card-body'>
    <p class='card-text'>$project_description</p>
    <p class='card-text'>$project_time يوم</p>
    <p class='card-text'>$project_money $</p>
  </div>
  <div class='card-footer text-muted'>
  $date
  </div>
</div>
<br><br><br>
    ";

    $kk="SELECT * FROM `payment` WHERE project_id='$project_id'";
    $kk_query=mysqli_query($con,$kk);
    $r_kk=mysqli_num_rows($kk_query);
    if($r_kk>0){
        echo "<h2 class='text-center text-danger'>تم الاتفاق فعلا مع فرى لانسر</h2>";
    }
    else{

$select_3ard="SELECT * FROM `add_3ard` WHERE project_id='$project_id' ORDER BY date DESC";
$query_3ard=mysqli_query($con,$select_3ard);
while($row_3ard=mysqli_fetch_assoc($query_3ard)){
    $user_name=$row_3ard['user_name'];
    $ard_title=$row_3ard['3ard_title'];
    $ard_description=$row_3ard['3ard_description'];
    $ard_money=$row_3ard['3ard_money'];
    $ard_time=$row_3ard['3ard_time'];
    $ard_date=$row_3ard['date'];
    $ard_id=$row_3ard['3ard_id'];
    echo "
    <div class='card text-center'>
  <div class='card-header'>
  <h2>$ard_title</h2>
  </div>
  <div class='card-body'>
    <h5 class='card-title'>$user_name</h5>
    <p class='card-text'>$ard_description</p>
    <p class='card-text'>$ard_time يوم</p>
    <p class='card-text'>$ard_money $</p>
    <a href='ok_4ard.php?aard_id=$ard_id' class='btn btn-primary'>وافق على العرض</a>
  </div>
  <div class='card-footer text-muted'>
  $ard_date
  </div>
</div>
<br><br>
    ";
}}
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>