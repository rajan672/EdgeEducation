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

    //$adminEmail = $_SESSION['Alogemail'];
    if(isset($_REQUEST['stuPassUpdateBtn'])){

        if(($_REQUEST['stuNewPass'] == "")){
            $passmsg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Fill all the fields</div>';
        }else{
            $sql = "SELECT * FROM singup_data WHERE stu_email = '$stuLogEmail'" ;
            $result =$conn->query($sql);
            if($result->num_rows ==1){
                $stuPass = $_REQUEST['stuNewPass'];
                $sql = "UPDATE singup_data SET stu_pass = '$stuPass' WHERE stu_email = '$stuLogEmail' ";
                if($conn->query($sql) == TRUE){
                    //below msg display on form submit success
                    $passmsg = '<div class="alert alert-success col-sm-6 mi-5 mt2">Updated successfully..</div>';
                }else{
                    $passmsg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Unable to Update !</div>';
                }
                
            }
        }
    }


?>


<div class="col-sm-6 mt-5 jumbotron">

    <h3 class="text-center">Update Password</h3>
    <div class="row">
        <div class="col-sm-6">
            <div class="mt-5 mx-5">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value=" <?php echo $stuLogEmail ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="stuNewPass">New Password</label>
                    <input type="password" class="form-control" id="stuNewPass" placeholder="New Password" name ="stuNewPass">
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="stuPassUpdateBtn">Update</button>
                <button class="btn btn-secondary mt-4">Reset</button>
                <?php 
                    if(isset($passmsg)){ 
                        echo $passmsg;
                    } 
                ?>
            </form>
            </div>
        </div>
    </div>
</div>