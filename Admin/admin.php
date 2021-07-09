<?php
if(!isset($_SESSION)){
    session_start();
}

include_once('../dbConnection.php');

//Admin login verification
if(!isset($_SESSION['is_Alogin'])){

    if (isset($_POST['checkLogemail']) && isset($_POST['ALogEmail']) && isset($_POST['ALogPass'])){
        $ALogEmail = $_POST['ALogEmail'];
        $ALogPass = $_POST['ALogPass'];

        $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email = '".$ALogEmail."' AND admin_pass ='".$ALogPass."' ";

        $result = $conn->query($sql);

        $row =$result->num_rows;

        if($row === 1){

            $_SESSION['is_Alogin'] = true;
            $_SESSION['Alogemail'] = $ALogEmail;

            echo json_encode($row);

        }else if ($row === 0){
            echo json_encode($row);
        }

    }

}

?>