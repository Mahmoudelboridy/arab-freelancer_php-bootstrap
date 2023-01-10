<div class="container w-50 h-25 mt-3">
    <h1 class="text-center">اضف عرض</h1>
    <form action="" method="POST">

        <div class="form-outline mb-4  ">
            عنوان العرض<input placeholder="ادخل اسم العرض" type="text" name="aard_title" autocomplete="off"
                required="requird" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            وصف العرض <input placeholder="ادخل وصف العرض" style="height:120px;" type="text" class="form-control"
                name="aard_description" autocomplete="off" required="requird" />
        </div>

        <div class="form-outline mb-4 ">
            المدة المتوقعة لتسليم المشروع <input class="form-control" type="number" name="aard_time" autocomplete="off"
                required="requird" />يوم
        </div>
        <div class="form-outline mb-4 ">
            سعر العرض
            <input class="form-control" type="number" name="aard_money" autocomplete="off" required="requird" />$
        </div>

        <div class="form-outline mb-4 text-center">
            <button class="btn btn-info" name="insert_aard">اضف العرض</button>
        </div>

    </form>
</div>