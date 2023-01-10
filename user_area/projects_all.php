<?php
include ('C:\xampp\htdocs\arab_freelancer\includes\db.php');
include ('C:\xampp\htdocs\arab_freelancer\functions\functions.php');
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
                        <a class="nav-link text-light" href="">عروضى</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"><i class="fa-regular fa-bell"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-light  my-3 ">
        <a style="text-decoration: none;" href="projects_all.php">
            <h3 class="text-center">كل المشاريع</h3>
        </a>
    </div>
    <div class="row px-1">
        <div class="col-md-10">
            <?php
            if(!isset($_GET['category'])){
            if(isset($_GET['page'])){
                $page=$_GET['page'];
            }
            else{
                $page=1;
            }
            $num_per_page=3;
$start_from=($page-1)*3;

            $select_pro="SELECT * FROM `add_project` WHERE status='تم النشر'  ORDER BY date DESC  LIMIT $start_from,$num_per_page";
            $select_query=mysqli_query($con,$select_pro);
            while($row=mysqli_fetch_assoc($select_query)){
                $project_name=$row['project_name'];
                $project_description=$row['project_description'];
                $date=$row['date'];
                $project_id=$row['project_id'];
              echo "
              <div class='card w-50 m-auto text-center'>
              <div class='card-body'>
                  <h2 class='card-title'>$project_name</h2>
                  <p class='card-text'>$project_description</p>
                  <a href='project_1_view.php?project_id=$project_id' class='btn btn-primary'>اعرض المشروع</a>
              </div>
              <div class='card-footer text-muted'>
              $date
                            </div>
          </div>

              ";


            }
           
            $pr_query="SELECT * FROM `add_project`";
            $pr_result=mysqli_query($con,$pr_query);
            $total_record=mysqli_num_rows($pr_result);
            $total_page=ceil($total_record/$num_per_page);
            if($page>1){
                echo "<a class='mn' href='projects_all.php?page=".($page-1)."'><</a>";
            }
            for($i=1;$i<$total_page;$i++){
            echo "<a class='mn' href='projects_all.php?page=".$i."'>$i</a>";
            }
            if($i>$page){
                echo "<a class='mn' href='projects_all.php?page=".($page+1)."'>></a>";
            }}

            unique_category();
            ?>



        </div>
        <div class="col-md-2 bg-secondary  p-0">
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">
                        <h4>تخصص المشاريع</h4>
                    </a>
                </li>
                <?php
                    getcategory();
                    ?>
            </ul>

        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>