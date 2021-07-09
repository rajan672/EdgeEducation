<?php

if(!isset($_SESSION)){
    session_start();
}

    include('../Admin/Adminheader.php');
    include('../dbConnection.php');


    if(isset($_SESSION['is_Alogin'])){

    }else{
        echo "<script> location.href ='../index.php';</script>";
    }



    if(isset($_REQUEST['courseSubmitBtn'])){
        //checking for  empty fields
        if(($_REQUEST['course_name']== "") || ($_REQUEST['course_desc'] == "") ){
            $msg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Fill all the fields</div>';
        }else{

            $course_name = $_REQUEST['course_name'];
            $course_desc = $_REQUEST['course_desc'];

            //feaching the images
            $course_image = $_FILES['course_img']['name'];
            $course_image_temp = $_FILES['course_img']['tmp_name'];
            $img_folder ='../images/course/'.$course_image;
            move_uploaded_file($course_image_temp, $img_folder);

            //sending the data to sql
            $sql = "INSERT INTO course(course_name,course_desc,course_img) VALUES('$course_name','$course_desc','$img_folder')";

            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 mi-5 mt2">Course added successfully..</div>';
            }else{
                $msg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Unable to add the course</div>';
            }
        }
    }

?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name">
        </div>

        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea type="text" class="form-control" id="course_desc" name="course_desc" row="2"></textarea>
        </div>

        <div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger"  id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
            <a href="ACourses.php" class="btn btn-secondary">Close</a>
        </div>

        <?php if(isset($msg)){
              echo $msg ; 
           } 
        ?>
    </form>
</div>

</div> <!-- row -->
</div><!-- container -->


<!-- javascript -->
<script src="js/custom.js"></script>
    <script src="js/data.js"></script>
    <script src="js/admin.js"></script>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>

</body>
</html>