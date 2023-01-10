<?php
session_start();
$user_id=$_SESSION['id'];
$user_name=$_SESSION['username'];


?>

<?php
function projects_view(){
    global $con;
    global $user_id;
 


    $select="SELECT * FROM `add_project` WHERE 	user_id='$user_id'
     ORDER BY date DESC";
    $query=mysqli_query($con,$select);
    $num=mysqli_num_rows($query);
    if($num==0){
        echo "<h2 class='text-center text-danger'>لا يوجد مشاريع حاليا </h2>";
      }
      else{
        while($row=mysqli_fetch_assoc($query)){
            $project_name=$row['project_name'];
            $project_description=$row['project_description'];
            $status=$row['status'];
            $data=$row['date'];
            $project_done=$row['project_done'];
            $project_id=$row['project_id'];
            echo "
            <div class='card mx-2 my-2 text-center' style='width: 18rem;'>
            <div class='card-body'>
                <h3 class='card-title'>$project_name</h3>
                <h5 class='card-text'>$project_description</h5>
                <p class='card-subtitle mb-2 text-muted'>$status</p>
                <p class='card-subtitle mb-2 text-muted'>$project_done</p>
                <P>$data</P>
                <a href='project_view.php?project_id=$project_id' class='card-link'>عرض المشروع</a>
            </div>
        </div>
            ";
        }
      }
     
    }

    function getcategory(){

        global $con;
    
        $select_category="SELECT * FROM `category`";
        $result_category=mysqli_query($con,$select_category);
        while($row_data=mysqli_fetch_assoc($result_category)){
            $category_title=$row_data['category_title'];
            $category_id=$row_data['category_id'];
            echo " <li class='mx-2 nav-item'>
            <a href='projects_all.php?category=$category_id' class='nav-link text-light'>
            $category_title
            </a>
        </li>" ;
        }
    }

    function unique_category(){
        global $con;
       if(isset($_GET['category'])){
        $category_id=$_GET['category'];
        $select="SELECT * FROM `add_project` WHERE( project_category='$category_id' AND status='تم النشر') ORDER BY date DESC";
        $query=mysqli_query($con,$select);
        $num=mysqli_num_rows($query);
        if($num==0){
          echo "<h2 class='text-center text-danger'>لا يوجد مشاريع لهذا التخصص</h2>";
        }
        while($row=mysqli_fetch_assoc($query)){
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
        }
    }

    
?>