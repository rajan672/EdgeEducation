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
?>


<div class="col-sm-9 mt-5 text-center">
    <p class="bg-dark text-white bp-2">List of Colleges </p>

    <?php
        $sql ="SELECT * FROM college";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
    ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">College ID</th>
                    <th scope="col">College Name</th>
                    <th scope="col">College Details</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            while($row = $result->fetch_assoc()){  
                echo '<tr>';
                echo '<th scope="row">'.$row['id'].'</th>';
                echo '<td>'.$row['clg_name'].'</td>';
                echo '<td>'.$row['clg_desc'].'</td>';
                echo '<td>
                        <form action="editCollege.php" method="POST" class="d-inline" >
                            <input type="hidden" name="id" value='.$row["id"].'>
                            <button type="submit" class="btn btn-info" name="view" value="View"><i class="fi-xnsuxl-pen-solid"></i></button>
                        </form>


                        <form action="" method="POST" class="d-inline">
                            <input type="hidden" name="id" value='.$row["id"].'>
                            <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fi-xwsuxl-bin"></i> </button> 
                        </form>
                    </td>';
                    echo '</tr>';
            } 
            ?>
            </tbody>
        </table>
    <?php } else{
        echo "0 Result";
    }

    //for delete operation
    if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM collegee WHERE id = {$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        }else{
            echo "Unable to delete data.";
        }
    }
    ?>
</div>
</div><!-- row -->

<div>
    <a href="./addCollege.php" class="btn btn-danger box" ><i class="fi-xwsuxl-plus-solid"></i></a>
</div>
</div><!-- container-fluid -->

<!-- javascript -->
<script src="js/custom.js"></script>
    <script src="js/data.js"></script>
    <script src="js/admin.js"></script>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>

</body>
</html>