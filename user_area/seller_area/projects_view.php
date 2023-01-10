<?php
@session_start();
$user_id=$_SESSION['id'];

?>

<div class="row">
    <div class="col-md-10">
        <div class="row mx-2 my-2">
            <?php
projects_view();
?>

        </div>
    </div>
</div>