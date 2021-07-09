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
        $stuName = $row["stu_name"];
        $stuOcc = $row["stu_occ"];
        $stuImg = $row["stu_img"];
    }


    if(isset($_REQUEST['updateStuNameBtn'])){
        if(($_REQUEST['stuName'] == "")){
            //msg displayed if required filed missing
            $passmsg = '<div class="alert alert-warning col-sm-6 mi-5 mt-2">Fill all the fields</div>';
        }else{
            $stuName = $_REQUEST['stuName'];
            $stuOcc = $_REQUEST['stuOcc'];

            $stu_image = $_FILES['stuImg']['name'];
            $stu_image_temp = $_FILES['stuImg']['tmp_name'];
            $img_folder = '../images/stuProfile/' . $stu_image;
            move_uploaded_file($stu_image_temp, $img_folder);

            $sql = "UPDATE singup_data SET  stu_name ='$stuName', stu_occ='$stuOcc', stu_img = '$img_folder' WHERE stu_email = '$stuLogEmail' " ;
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
            <label for="stuName">student Name</label>
            <input type="text" class="form-control" id="stuName" name="stuName" value="<?php if(isset($stuName)) { echo $stuName;} ?>" >
        </div>

        <div class="form-group">
            <label for="stuEmail">Email</label>
            <input type="email" class="form-control" id="stuEmail" name="stuEmail" value="<?php echo $stuLogEmail ?>" readonly >
        </div>

        <div class="form-group">
            <label for="stuOcc">Occupation</label>
            <input type="text" class="form-control" id="stuOcc" name="stuOcc" value="<?php if(isset($stuOcc)) { echo $stuOcc;} ?>" >
        </div>

        <div class="form-group">
            <label for="stuImg">Upload Image</label>
            <input type="file" class="form-control-file" id="stuImg" name="stuImg" >
        </div> 

        <div class="text-center">
            <button type="submit" class="btn btn-danger"  id="updateStuNameBtn" name="updateStuNameBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>

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