<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نسيت كلمة السر</title>
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
                        <a class="text-light nav-link active fw-semibold" aria-current="page" href="../index.php">الصفحة
                            الرئيسية</a>
                    </li>
                </ul>
    </nav>





    <div class="container-fluid my-3">
        <h2 class="text-center">نسيت كلمة السر</h2>
        <div class="row mt-5 d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST">
                    <div class="form-outline mb-4">
                        <label class="mb-1">الايميل</label> <input type="text" class="form-control"
                            placeholder="ادخل ايميلك" required="required" name="user_username" />
                    </div>

                    <div class="text-center">
                        <button class="bg-info mb-3 py-2 px-3 border-0" name="user_login">ارسال</button>
                        <br>
                        <a class="fw-bold mb-0" style="font-size:18pt;" href="signup.php">تريد عمل حساب جديد</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>