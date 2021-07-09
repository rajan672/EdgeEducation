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

    $adminEmail = $_SESSION['Alogemail'];
    if(isset($_REQUEST['adminPassUpdateBtn'])){

        if(($_REQUEST['admin_pass'] == "")){
            $passmsg = '<div class="alert alert-warning col-sm-6 mi-5 mt2">Fill all the fields</div>';
        }else{
            $sql = "SELECT * FROM admin WHERE admin_email = '$adminEmail'" ;
            $result =$conn->query($sql);
            if($result->num_rows ==1){
                $adminPass = $_REQUEST['admin_pass'];
                $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email = '$adminEmail' ";
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
                    <input type="email" class="form-control" id="inputEmail" value=" <?php echo $adminEmail ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="admin_pass">New Password</label>
                    <input type="text" class="form-control" id="admin_pass" placeholder="New Password" name ="admin_pass">
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdateBtn">Update</button>
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