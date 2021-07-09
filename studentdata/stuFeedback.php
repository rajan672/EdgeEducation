<?php
if(!isset($_SESSION)){
    session_start();
}

    include('stuHeader.php'); 
    include_once('../dbConnection.php');

    //check the student login email id
    if(isset($_SESSION['is_login'])){
        $stuLogEmail = $_SESSION['stulogemail'];
    }else{
        echo "<script> location.href ='../index.php';</script>";
    }

    $sql = "SELECT * FROM singup_data WHERE stu_email = '$stuLogEmail' ";
    $result = $conn->query($sql);
    
    if($result->num_rows == 1 ){
        $row = $result->fetch_assoc();
        $stuId = $row["id"];
        /* $stuName = $row["stu_name"];
        $stuOcc = $row["stu_occ"];
        $stuImg = $row["stu_img"]; */
    }

    if(isset($_REQUEST['submitfeedback'])){
        if(($_REQUEST['f_content'] == "")){
            //msg displayed if required filed missing
            $passmsg = '<div class="alert alert-warning col-sm-6 mi-5 mt-2">Fill all the fields</div>';
        }else{
            $fcontent = $_REQUEST['f_content'];
            $sql = " INSERT INTO feedback (f_content , id) VALUES ('$fcontent' , '$stuId') " ;
            if ($conn->query($sql) == TRUE){
                //below msg display on form submit success
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully !</div>';
            }else{
                //below msg display on form submit failed
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update !</div>';
            }
        }
    }
?>



<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <!-- <h3 class="text-center">Add New Student</h3> -->
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if(isset($stuId)) { echo $stuId;} ?>" readonly >
        </div>

        <div class="form-group">
            <label for="f_content">Write feedback : </label>
            <textarea class="form-control" id="f_content" name="f_content" row=2 ></textarea>
        </div>
        <button type="submit" class="btn btn-danger"  id="submitfeedback" name="submitfeedback">Submit</button>

        <?php 
            if(isset($passmsg)){
                echo $passmsg ; 
           } 
        ?>
    </form>
</div>
</div> <!-- row -->
</div><!-- container -->


    <!-- javascript -->
    <!-- <script src="../js/custom.js"></script> -->
    <script src="../js/data.js"></script>
    <script src="../js/admin.js"></script>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="../js/jquery.min.js"></script>
</body>
</html>