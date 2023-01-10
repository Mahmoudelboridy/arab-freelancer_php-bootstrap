<?php
include 'C:\xampp\htdocs\arab_freelancer\includes\db.php';
@session_start();
$user_id = $_SESSION['id'];
$user_name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اكونت الفرى لانسر</title>
    <link href="styles/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    .i1 {
        width: 90%;
        display: block;
        margin: auto;
        height: 75%;
    }

    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="profile_freelancer.php">حسابى</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../projects_all.php">المشاريع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="arody.php">عروضى</a>
                    </li>

                    <?php
$selectn = "SELECT * FROM `payment` WHERE user_id='$user_id'";
$quern = mysqli_query($con, $selectn);
$rown = mysqli_num_rows($quern);
$koment = $rown;
?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link text-light" href="profile_seller.php?kkk"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            كومنتات <sup><?php echo $koment ?></sup>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
$selectn = "SELECT * FROM `payment` WHERE user_id='$user_id'";
$qun = mysqli_query($con, $selectn);
while ($rroww = mysqli_fetch_assoc($qun)) {
    $tagr_name = $rroww['tagr_name'];
    $project_id = $rroww['project_id'];
    $how_pay = $rroww['how_pay'];
    echo "
                           <li><a class='dropdown-item  text-center nav-link' href='../project_1_view.php?project_id=$project_id'>$tagr_name,$how_pay</a></li>
                           ";
}

?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-2">
            <ul style="height:100vh" class="navbar-nav bg-secondary text-center">
                <li class="nav-item bg-info">
                    <a class="nav-link text-light" href="">
                        <h4>حسابى</h4>
                    </a>

                </li>
                <?php
$username = $_SESSION['username'];
$user_image = "SELECT * FROM `users`
                     WHERE user_name='$username'";
$result_image = mysqli_query($con, $user_image);
$row = mysqli_fetch_assoc($result_image);
$user_ima = $row['user_image'];
echo " <li class='nav-item '>
                     <img src='../user_images/$user_ima' class='my-4 i1' />
                     </a>
                 </li>";
?>

                <li class="nav-item ">
                    <a class="nav-link text-light" href="">
                        <h6>حذف الاكونت</h6>
                    </a>
                </li>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="../logout.php">
                        <h6>تسجيل الخروج</h6>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-10">

        </div>



        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>