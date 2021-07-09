<?php

if(!isset($_SESSION)){
    session_start();
}

    include('../Admin/Adminheader.php');

    if(isset($_SESSION['is_Alogin'])){

    }else{
        echo "<script> location.href ='../index.php';</script>";
    }
?>

            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Courses</div>
                            <div class="card-body">
                                <h4 class="card-title">6</h4>
                                <a href="#" class="btn text-white"> View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">College</div>
                            <div class="card-body">
                                <h4 class="card-title">15</h4>
                                <a href="#" class="btn text-white"> View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">Feedback</div>
                            <div class="card-body">
                                <h4 class="card-title">8</h4>
                                <a href="#" class="btn text-white"> View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-5 mt-5 text-center">
                <!-- Table -->
                    <p class="bg-dark text-white bp-2">Course Order</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row"> 22</th>
                                <td>100</td>
                                <td>sonam@gmail.com</td>
                                <td>20/10/2021</td>
                                <td>2000</td>
                                <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fi-xwsuxl-bin"></i> </button> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script src="js/custom.js"></script>
    <script src="js/data.js"></script>
    <script src="js/admin.js"></script>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
</body>
</html>