<?php
if(!isset($_SESSION)){
    session_start();
}

include_once('../dbConnection.php');

//checking email already registered
if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){

    $stuemail = $_POST['stuemail'];
    
    $sql = "SELECT stu_email FROM singup_data WHERE stu_email = '".$stuemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
} 


//Inserting the data
if(isset($_POST['stusignup']) && isset($_POST['signUser']) && isset($_POST['signEmail']) && isset($_POST['signPass']) ){

    $stuname = $_POST['signUser'];
    $stuemail = $_POST['signEmail'];
    $stupass = $_POST['signPass'];

    $sql = $conn->prepare("INSERT INTO singup_data(stu_name,stu_email,stu_pass) VALUES
    ('$stuname','$stuemail','$stupass')");

    if($sql->execute()==TRUE){
        echo json_encode ("OK");
    }else{
        echo json_encode ("failed");
    }
}


//student login verification
if(!isset($_SESSION['is_login'])){

    if (isset($_POST['checkLogemail']) && isset($_POST['stuLogEmail']) && isset($_POST['stuLogPass'])){
        $stuLogEmail = $_POST['stuLogEmail'];
        $stuLogPass = $_POST['stuLogPass'];

        $sql = "SELECT stu_email, stu_pass FROM singup_data WHERE stu_email = '".$stuLogEmail."' AND stu_pass ='".$stuLogPass."' ";

        $result = $conn->query($sql);

        $row =$result->num_rows;

        if($row === 1){

            $_SESSION['is_login'] = true;
            $_SESSION['stulogemail'] = $stuLogEmail;

            echo json_encode($row);

        }else if ($row === 0){
            echo json_encode($row);
        }

    }

}




?>