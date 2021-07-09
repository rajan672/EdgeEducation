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



    if(isset($_REQUEST['clgSubmitBtn'])){
        //checking for  empty fields
        if(($_REQUEST['clg_name']== "") || ($_REQUEST['clg_desc'] == "") ){
            $msg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Fill all the fields</div>';
        }else{

            $clg_name = $_REQUEST['clg_name'];
            $clg_desc = $_REQUEST['clg_desc'];

            //feaching the images
            $clg_image = $_FILES['clg_img']['name'];
            $clg_image_temp = $_FILES['clg_img']['tmp_name'];
            $img_folder ='../images/college/'.$clg_image;
            move_uploaded_file($clg_image_temp, $img_folder);

            //sending the data to sql
            $sql = "INSERT INTO college(clg_name,clg_desc,clg_img) VALUES('$clg_name','$clg_desc','$img_folder')";

            if($conn->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 mi-5 mt2">College added successfully..</div>';
            }else{
                $msg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Unable to add the college</div>';
            }
        }
    }

?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New College</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="clg_name">College Name</label>
            <input type="text" class="form-control" id="clg_name" name="clg_name">
        </div>

        <div class="form-group">
            <label for="clg_desc">College Description</label>
            <textarea type="text" class="form-control" id="clg_desc" name="clg_desc" row="2"></textarea>
        </div>

        <div class="form-group">
            <label for="clg_img">College Image</label>
            <input type="file" class="form-control-file" id="clg_img" name="clg_img">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger"  id="clgSubmitBtn" name="clgSubmitBtn">Submit</button>
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