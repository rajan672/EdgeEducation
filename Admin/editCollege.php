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
    if(isset($_REQUEST['editClgBtn'])){
        //checking for empty field
        if(($_REQUEST['id'] == "") || ($_REQUEST['clg_name'] == "") || ($_REQUEST['clg_desc'] == "")  ){
            //msg display if required filed is empty
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all the fields</div>';
        }else{
            //assigning user values to variable
            $clgid = $_REQUEST['id'];
            $clgname = $_REQUEST['clg_name'];
            $clgdesc =$_REQUEST['clg_desc'];
            $clgimg = '../images/college/'.$_FILES['clg_img']['name'];

            $sql = "UPDATE college SET id = '$clgid', clg_name = '$clgname' , clg_desc = '$clgdesc' , clg_img = '$clgimg' WHERE id = '$clgid' " ;
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
    <h3 class="text-center">Update College details</h3>



    <?php 

        if(isset($_REQUEST['view'])){
            $sql = "SELECT * FROM college WHERE id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>








    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="id">College ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php if(isset($row['id'])){ echo $row['id']; }  ?>" readonly>
        </div>

        <div class="form-group">
            <label for="clg_name">College Name</label>
            <input type="text" class="form-control" id="clg_name" name="clg_name" value="<?php if(isset($row['clg_name'])){ echo $row['clg_name']; }  ?>">
        </div>

        <div class="form-group">
            <label for="clg_desc">College Description</label>
            <textarea type="text" class="form-control" id="clg_desc" name="clg_desc" row="2"> <?php if(isset($row['clg_desc'])){ echo $row['clg_desc']; }  ?></textarea>
        </div>

        <div class="form-group">
            <label for="clg_img">College Image</label>
            <img src="<?php if(isset($row['clg_img'])){ echo $row['clg_img']; } ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="clg_img" name="clg_img">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger"  id="editClgBtn" name="editClgBtn">Update</button>
            <a href="college.php" class="btn btn-secondary">Close</a>
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
