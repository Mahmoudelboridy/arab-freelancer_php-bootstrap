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
            <th>Username</th>
            <th>user email</th>
            <th>User image</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-center text-light">
        <?php
$get_users="SELECT * FROM `users` where user_mode='2'";
$result=mysqli_query($con,$get_users);
$row=mysqli_num_rows($result);
$num=0 ;
if($row=='0'){
    echo "<h2 class='text-danger text-center mt-5'>لا يوجد فرى لانسر لحد الان</h2>";
}
else{
    while($rown=mysqli_fetch_assoc($result)){
        $num++;
$username=$rown['user_name'];
$user_email=$rown['user_email'];
$user_id=$rown['user_id'];
$user_image=$rown['user_image'];
?>
        <tr>
            <td><?php echo $num ?></td>
            <td><?php echo $username ?></td>
            <td><?php echo $user_email ?></td>
            <td><img class='product_image' src='../user_area/user_images/<?php echo $user_image ?>' /></td>
            <td><a href='index.php?delete_user=<?php echo $user_id ?>' class='text-light'><i
                        class='fa-solid fa-trash'></a></td>
        </tr>
        <?php
        }}
        ?>
    </tbody>
</table>