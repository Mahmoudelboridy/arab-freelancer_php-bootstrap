<?php
include '../includes/db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم الادمن</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container fluid ">
                <a href="index.php"><img src="0.jpg" style="width:7%;height:7%;" /></a>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">

                        <li class='nav-item'>
                            <a class='nav-link' href=''>اهلا ادمن</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
        <div class="bg-light">
            <h3 class="text-center p-2 ">التحكم فى تفاصيل الموقع</h3>
        </div>
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-item-center">
                <div class="px-5">
                    <a href=""><img src="0.jpg" style="width:150px;height:120px"></a>
                    <p class='text-light text-center'>اسم الادمن</p>



                </div>
                <div class="button  mx-5 px-5">
                    <button class="my-3"><a href="index.php?seller_view"
                            class="nav-link text-light bg-info p-1 my-1">اصحاب
                            المشاريع</a></button>
                    <button><a href="index.php?view_projects" class="nav-link text-light bg-info p-1 my-1">عرض
                            المشاريع</a></button>
                    <button><a href="index.php?freelancer_view" class="nav-link text-light bg-info p-1 my-1">الفرى
                            لانسر</a></button>
                    <button><a href="index.php?payment" class="nav-link text-light bg-info p-1 my-1">عرض عمليات
                            الدفع</a></button>
                    <button><a href='' class='nav-link text-light bg-info p-1 my-1'>تسجيل الخروج</a></button>

                </div>
            </div>
        </div>

        <div class="container my-4">
            <?php
if (isset($_GET['seller_view'])) {
    include 'seller_view.php';
}
if (isset($_GET['view_projects'])) {
    include 'view_projects.php';
}
if (isset($_GET['freelancer_view'])) {
    include 'freelancer_view.php';
}
if (isset($_GET['payment'])) {
    include 'payment.php';
}

?>

        </div>

    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>