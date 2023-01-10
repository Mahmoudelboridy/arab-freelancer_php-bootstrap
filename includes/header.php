<nav class="navbar navbar-expand-lg bg-primary bg-body-tertiary">
    <div class="container-fluid">
        <a class="text-light fs-2 navbar-brand fw-semibold" href="./index.php">عرب فرى
            لانسر</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" aria-current="page" href="./index.php">الصفحة الرئيسية</a>
                </li>
                <?php

                            if(!isset($_SESSION['username'])){

                                echo " <li class='nav-item'>
                                <a class='nav-link fw-semibold active' href='./user_area/signup.php'>حساب جديد</a>
                            </li>";
                               }else{
                                $mode=$_SESSION['mode'];

                                if($mode==1){
                                echo " <li class='nav-item'>
                                <a class='nav-link fw-semibold active' href='./user_area/seller_area/profile_seller.php'>حسابى</a>
                            </li>";
                                }
                                else{
                                    echo " <li class='nav-item'>
                                    <a class='nav-link fw-semibold active' href='./user_area/freelancer_area/profile_freelancer.php'>حسابى</a>
                                </li>";
                                }
                               }
                               ?>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <?php
                            if(!isset($_SESSION['username'])){
                                echo " <li class='nav-item'>
                                <a class='nav-link fw-semibold active' href=''>اهلا يا صديقى</a>
                            </li>";
                               }else{
                                echo " <li class='nav-item'>
                                <a class='nav-link fw-semibold active' href=''>اهلا يا ".$_SESSION['username']."</a>
                            </li>";
                               }
                               ?>
        <?php
                            if(!isset($_SESSION['username'])){
                                echo " <li class='nav-item'>
                                <a class='nav-link fw-semibold active' href='./user_area/login.php'>تسجيل الدخول</a>
                            </li>";
                               }else{
                                echo " <li class='nav-item'>
                                <a class='nav-link fw-semibold active' href='./user_area/logout.php'>تسجيل الخروج</a>
                            </li>";
                               }
                               ?>
    </ul>
</nav>