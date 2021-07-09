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
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">Edge Education 
            <small>Dashboard ||Admin Area</small>
        </a>
    </nav>


    <!-- side bar -->
    <div class="container-fluid mb-5" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="adminDashboard.php" class="nav-link">
                            <i class="fi-xnsuxl-user-solid"></i>
                            Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="ACourses.php" class="nav-link">
                            <i class="fi-xnsuxl-open-book-solid"></i>
                            Programmes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="students.php" class="nav-link">
                            <i class="fi-xnsuxl-team-solid"></i>
                            Students
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="college.php" class="nav-link">
                            <i class="fi-cnsuxl-diploma-solid"></i>
                            College
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="feedback.php" class="nav-link">
                            <i class="fi-xnsuxl-comment-square-dot-solid"></i>
                            Feedback
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="changePass.php" class="nav-link">
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