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



    if(isset($_REQUEST['stu_SubmitBtn'])){
        //checking for  empty fields
        if(($_REQUEST['stu_name']== "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == "") ){
            $msg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Fill all the fields</div>';
        }else{

            $stu_name = $_REQUEST['stu_name'];
            $stu_email = $_REQUEST['stu_email'];
            $stu_pass = $_REQUEST['stu_pass'];
            $stu_occ = $_REQUEST['stu_occ'];

            //feaching the images
            /* $course_image = $_FILES['course_img']['name'];
            $course_image_temp = $_FILES['course_img']['tmp_name'];
            $img_folder ='../images/course/'.$course_image;
            move_uploaded_file($course_image_temp, $img_folder); */

            //sending the data to sql
            $sql = "INSERT INTO singup_data(stu_name,stu_email,stu_pass,stu_occ) VALUES('$stu_name','$stu_email','$stu_pass','$stu_occ')";

            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 mi-5 mt2">Student added successfully..</div>';
            }else{
                $msg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Unable to add the student</div>';
            }
        }
    }

?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name">
        </div>

        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email" >
        </div>

        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass" >
        </div>

        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ">
        </div>

        <!-- <div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div> -->

        <div class="text-center">
            <button type="submit" class="btn btn-danger"  id="stu_SubmitBtn" name="stu_SubmitBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
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