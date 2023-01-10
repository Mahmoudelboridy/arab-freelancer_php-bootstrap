<style>
.product_image {
    width: 30%;
    height: 30%;
    object-fit: contain;
}
</style>
<h3 class="text-center text-success">اصحاب المشاريع</h3>
<table class="table table-bordered-mt-5">
    <thead class="bg-info text-center">
        <tr>
            <th>Si no</th>
            <th>اسم الفرى لانسر</th>
            <th>اسم صاحب المشروع</th>
            <th>اسم المشروع</th>
            <th>عنوان عرض الفرى لانسر</th>
            <th>سعر عرض الفرى لانسر</th>
            <th>طريقة الدفع</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-center text-light">
        <?php
$get_payment = "SELECT * FROM `payment`";
$result = mysqli_query($con, $get_payment);
$row = mysqli_num_rows($result);
$num = 0;
if ($row == '0') {
    echo "<h2 class='text-danger text-center mt-5'>لا يوجد عمليات شراء لحد الان </h2>";
} else {
    while ($rown = mysqli_fetch_assoc($result)) {
        $num++;
        $username = $rown['user_name'];
        $tagr_name = $rown['tagr_name'];
        $project_name = $rown['project_name'];
        $aard_title = $rown['3ard_title'];
        $ard_money = $rown['3ard_money'];
        $how_pay = $rown['how_pay'];
        ?>
        <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $username ?></td>
            <td><?php echo $tagr_name ?></td>
            <td><?php echo $project_name ?></td>
            <td><?php echo $aard_title ?></td>
            <td><?php echo $ard_money ?> $</td>
            <td><?php echo $how_pay ?></td>


        </tr>
        <?php
}}
?>
    </tbody>
</table>