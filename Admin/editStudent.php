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
    if(isset($_REQUEST['stuUpdateBtn'])){
        //checking for empty field
        if(($_REQUEST['id'] == "") || ($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == "")  ){
            //msg display if required filed is empty
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all the fields</div>';
        }else{
            //assigning user values to variable
            $sid = $_REQUEST['id'];
            $sname = $_REQUEST['stu_name'];
            $semail =$_REQUEST['stu_email'];
            $spass =$_REQUEST['stu_pass'];
            $socc =$_REQUEST['stu_occ'];
            /* $cimg = '../images/course/'.$_FILES['course_img']['name']; */

            $sql = "UPDATE singup_data SET id = '$sid', stu_name = '$sname' , stu_email = '$semail' , stu_pass = '$spass' ,stu_occ = '$socc' WHERE id = '$sid' " ;
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

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Student details</h3>



    <?php 

        if(isset($_REQUEST['view'])){
            $sql = "SELECT * FROM singup_data WHERE id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>



    <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="id">Student ID</label>
            <input type="text" class="form-control" id="id" name="id" value = " <?php if(isset( $row['id'])) { echo $row['id']; } ?>" readonly>
        </div>

        <div class="form-group">
            <label for="stu_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value = " <?php if(isset( $row['stu_name'])) { echo $row['stu_name']; } ?>">
        </div>

        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email" value = " <?php if(isset( $row['stu_email'])) { echo $row['stu_email']; } ?>">
        </div>

        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass" value = " <?php if(isset( $row['stu_pass'])) { echo $row['stu_pass']; } ?>">
        </div>

        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ" value = " <?php if(isset( $row['stu_occ'])) { echo $row['stu_occ']; } ?>">
        </div>

        <!-- <div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div> -->

        <div class="text-center">
            <button type="submit" class="btn btn-danger"  id="stuUpdateBtn" name="stuUpdateBtn">Update</button>
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
