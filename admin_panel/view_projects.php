<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض كل المشاريع</title>
</head>

<body>
    <?php
   
    
$get_projects="SELECT * FROM `add_project` ";
$result=mysqli_query($con,$get_projects);
$row=mysqli_fetch_assoc($result);


?>
    <h3 class="text-success text-center">كل المشاريع</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>si no</th>
                <th>اسم صاحب المشروع</th>
                <th>اسم المشروع </th>
                <th>حال المشروع مع الفرى لانسر</th>
                <th>حالة المشروع</th>
                <th>نشر المشروع</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
                           $serial_n=1;
     $get_order_details="SELECT * FROM `add_project`";
        $querry=mysqli_query($con,$get_order_details);
        while($rown=mysqli_fetch_assoc($querry)){
               $oid=$rown['project_id'];
               $username=$rown['user_name'];
               $project_name=$rown['project_name'];
               $status=$rown['status'];
               $project_done=$rown['project_done'];
               
               $serial_n+'1';

             echo "
             <tr>
             <td>$serial_n</td>
             <td>$username</td>
             <td>$project_name</td>
             <td>$project_done</td>
             <td>$status</td>
             
             ";
             ?>
            <?php
          if($status=='تم النشر'){
            echo "<td class='text-center'>تم</td>";
          }else{
             echo "<td class='text-center'><a  href='confirm_project.php?project_id=$oid' class='text-light'>تاكيد</a></td>
         </tr>";}
        $serial_n++ ;

        }
      
        ?>

        </tbody>
    </table>
</body>

</html>