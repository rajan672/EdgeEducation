<?php
    include_once('../dbConnection.php');
    //start the session
    if(!isset($_SESSION)){
        session_start();
    } 

    //check the student login email id
    if(isset($_SESSION['is_login'])){
        $stuLogEmail = $_SESSION['stulogemail'];
    }/* else{
        echo "<script> location.href ='../index.php';</script>";
    } */

    if(isset($stuLogEmail)){
        $sql = "SELECT stu_img FROM singup_data WHERE stu_email = '$stuLogEmail' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $stu_img = $row['stu_img'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edge-Education||admin</title>

    <!-- link style.css file -->
    <link rel="stylesheet" href="../css/admin.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- Icons Link -->
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>

    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
    <!-- Top navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="studentProfile.php">Edge Education 
            <small>Dashboard</small>
        </a>
        <!-- contact breadcrumbs -->
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper text-light" id="go-home">
                <a href="../index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">My Profile</span>
            </div>
        </nav>
        <!-- /contact breadcrumbs -->
    </nav> 

    


    <!-- side bar -->
    <div class="container-fluid mb-5" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                    
                        <li class="nav-item mb-3">
                            <img src=" <?php echo $stu_img  ?> " alt="student Image" class="img-thumbnail rounded-circle">
                        </li>

                        <li class="nav-item">
                            <a href="studentProfile.php" class="nav-link">
                            <i class="fi-xnsuxl-user-solid"></i>
                            Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="mycourse.php" class="nav-link">
                            <i class="fi-xnsuxl-team-solid"></i>
                            My course
                            </a>
                        </li> 

                        <!-- <li class="nav-item">
                            <a href="adminDashboard.php" class="nav-link">
                            <i class="fi-cnsuxl-diploma-solid"></i>
                            College
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="stuFeedback.php" class="nav-link">
                            <i class="fi-xnsuxl-comment-square-dot-solid"></i>
                            Feedback
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="studentChangepass.php" class="nav-link">
                            <i class="fi-xnsuxl-key-alt-solid"></i>
                            Change Password
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                            <i class="fi-xnsuxl-sign-out-solid"></i>
                            Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


