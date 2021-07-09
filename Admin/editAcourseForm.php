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



    //update
    if(isset($_REQUEST['requpdate'])){
        //checking for empty field
        if(($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "")  ){
            //msg display if required filed is empty
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all the fields</div>';
        }else{
            //assigning user values to variable
            $cid = $_REQUEST['course_id'];
            $cname = $_REQUEST['course_name'];
            $cdesc =$_REQUEST['course_desc'];
            $cimg = '../images/course/'.$_FILES['course_img']['name'];

            $sql = "UPDATE course SET course_id = '$cid', course_name = '$cname' , course_desc = '$cdesc' , course_img = '$cimg' WHERE course_id = '$cid' " ;
            if ($conn->query($sql) == TRUE){
                //below msg display on form submit success
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully !</div>';
            }else{
                //below msg display on form submit failed
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update !</div>';
            }
        }
    }


?>

<div class="col-sm6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course details</h3>



    <?php 

        if(isset($_REQUEST['view'])){
            $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>








    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])){ echo $row['course_id']; }  ?>" readonly>
        </div>

        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])){ echo $row['course_name']; }  ?>">
        </div>

        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea type="text" class="form-control" id="course_desc" name="course_desc" row="2"> <?php if(isset($row['course_desc'])){ echo $row['course_desc']; }  ?></textarea>
        </div>

        <div class="form-group">
            <label for="course_img">Course Image</label>
            <img src="<?php if(isset($row['course_img'])){ echo $row['course_img']; } ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger"  id="requpdate" name="requpdate">Update</button>
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
