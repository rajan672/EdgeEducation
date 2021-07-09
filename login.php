
<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edge-Education||Login</title>

    <!-- link style.css file -->
    <link rel="stylesheet" href="css/style-login.css"> 

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
    <!-- Home Page -->

    <div  id="home"> <!-- Home Page div -->

        <nav class="navbar navbar-expand-md navbar-light " id="header"> <!-- navbar homepage part 1 -->

            <a href="" class="navbar-brand text-warning"  ><img src="images/logo.png" alt="" id="logo"></a>  <!-- Logo -->

            <div > <!-- Navbar section -->

                <!-- <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#cnavbar">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>

                <div class="collapse navbar-collapse text-center" id="cnavbar"> --> <!-- div  for navbar elements -->
    
                    <!-- <ul class="navbar-nav" style="margin-right: auto;">
    
                        <li class="nav-item">
                            <a href="index.html" class="nav-link mr-3 h5 "> Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#colleges" class="nav-link mr-3 h5">Colleges</a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link mr-3 h5 "> Contact Us</a>
                         </li>

                         <li class="nav-item ">
                            <a href="about.html" class="nav-link mr-3 h5 " > About Us</a>
                        </li>
                                
                    </ul>
                </div> --><!-- div  for navbar elements -->



                <nav class="nav-1">
                    <ul>
                        <?php  
                            /* session_start(); */
                            if(isset($_SESSION['is_login'])){
                                echo '<li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php" class="active"><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php" class="active"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }

                        ?>
                    </ul>
                </nav>
        
                <nav>
                  <div class="icon">
                    <i class="fi-xnsuxl-three-bars-solid" id="bar"  onclick="showmenu()"></i>
                      <i class="fi-xnsuxl-times-solid" id="cros" onclick="closemenu()"></i>
                  </div>
                </nav>
        
                <nav class="nav-mob" id="nav-mob" > 
                  <ul >
                        <?php  
                            /* session_start(); */
                            if(isset($_SESSION['is_login'])){
                                echo '<li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php" class="active"><i class="fi-xnsuxl-user-solid"></i>>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php" class="active"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }

                        ?>
                  </ul>
              </nav>

            </div>  <!-- Navbar section -->

        </nav><!-- navbar homepage part 1 -->
        <!-- Header Part closed -->

        <!-- login breadcrumbs -->
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class=" page-wrapper" id="go-home">
                <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">LogIn</span>
            </div>
        </nav>
        <!-- login breadcrumbs -->
    </div>

<!-- 
        <div class="container" id="log">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="sign-in-form" id="login">
                        <h2 class="title">Log In</h2>
                        <div class="input-field">
                            <i class="fi-xnsuxl-user-solid"></i>
                            <input type="text" placeholder="Username" />
                        </div>
                        <div class="input-field">
                            <i class="fi-xnsuxl-lock-solid"></i>
                            <input type="password" placeholder="Password" />
                        </div>
                        
                        <button type="button"  onclick="Login()" class="btn btn-primary" id="btnn">Log In</button>
                        <p class="social-text">Or Log in with social platforms 
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter">Admin Login</a>
                        
                        </p>

                        <div class="social-media">
                            <a target="_blank" href="https://www.facebook.com/" class="social-icon">
                                <i class="fi-xnsuxl-facebook icon"></i></
                            </a>
                            <a target="_blank" href="https://twitter.com/?lang=en" class="social-icon">
                                <i class="fi-xnsuxl-twitter icon"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/" class="social-icon">
                                <i class="fi-xnsuxl-instagram icon"></i>
                            </a>
                            <a target="_blank" href="https://in.linkedin.com/" class="social-icon">
                                <i class="fi-xnsuxl-linkedin icon"></i>
                            </a>
                            
                        </div>
                    </form>
                    <form action="#" class="sign-up-form" id="logout">
                        <h2 class="title">Sign up</h2>
                        <div class="input-field">
                            <small id="signUserMsg1"></small>
                            <i class="fi-xnsuxl-user-solid"></i>
                            <input type="text" required placeholder="Username" id="signUser" />
                        </div>
                        <div class="input-field">
                            <small id="signUserMsg2"></small>
                            <i class="fi-xwsuxl-envelope-solid"></i>
                            <input type="email" placeholder="Email" id="signEmail" />
                        </div>
                        <div class="input-field">
                            <small id="signUserMsg3"></small>
                            <i class="fi-xnsuxl-lock-solid"></i>
                            <input type="password" placeholder="Password" id="signPass" />
                        </div>
                        <span id="signupsuccess" class="alert alert-success">hello</span>
                        <button type="button"  onclick="signUp()" class="btn btn-primary">Sign Up </button>

                        <p class="social-text">Or Sign up with social platforms</p>
                        <div class="social-media">
                            <a target="_blank" href="https://www.facebook.com/" class="social-icon">
                                <i class="fi-xnsuxl-facebook icon"></i></
                            </a>
                            <a target="_blank" href="https://twitter.com/?lang=en" class="social-icon">
                                <i class="fi-xnsuxl-twitter icon"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/" class="social-icon">
                                <i class="fi-xnsuxl-instagram icon"></i>
                            </a>
                            <a target="_blank" href="https://in.linkedin.com/" class="social-icon">
                                <i class="fi-xnsuxl-linkedin icon"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
  
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New here ?</h3>
                        <p>
                            Please Sign Up to get register & be a member of Edge Education. &#128512;
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Sign up
                        </button>
                    </div>
                    <img src="img/log.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>One of us ?</h3>
                        <p>
                            Already have a account in Edge Education ,then please Login here. &#128512;
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Log In
                        </button>
                    </div>
                    <img src="img/register.svg" class="image" alt="" />
                </div>
            </div>
      </div>

 -->
<!-- Registration sign up start -->

<!-- Button trigger modal -->
<h2>Student Registeration</h2>
<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
    Get Register
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Student Registeration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="text-align-left" id="stu-register">

                <div class="form-group">
                    <i class="fi-xnsuxl-user-solid"></i>
                    <label for="signUser">Username :</label> <span id="signUserMsg1"></span>
                    <input type="text" class="form-control" id="signUser" placeholder="Enter your User Name">
                </div>

                <div class="form-group">
                    <i class="fi-xwsuxl-envelope-solid"></i>
                    <label for="signEmail">Email address :</label>  <span id="signUserMsg2"></span>
                    <input type="email" class="form-control" id="signEmail" aria-describedby="emailHelp" placeholder="e.g. example@gmail.com">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <i class="fi-xnsuxl-lock-solid"></i>
                    <label for="signPass">Password :</label>  <span id="signUserMsg3"></span>
                    <input type="password" class="form-control" id="signPass" placeholder="Password">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <span id="signupsuccess"></span>
            <button type="button" class="btn btn-primary" onclick="signUp()" id="signup">Sign Up</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Registartion sign up end -->




  <!-- Log in start -->

<!-- Button trigger modal -->
<h2>Student Login</h2>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
    Login
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Student Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="text-align-left" id="stu-login">
                <div class="form-group">
                    <i class="fi-xwsuxl-envelope-solid"></i>
                    <label for="LoginEmail">Email address</label>
                    <input type="email" class="form-control" id="LoginEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <i class="fi-xnsuxl-lock-solid"></i>
                    <label for="LoginPass">Password</label>
                    <input type="password" class="form-control" id="LoginPass" placeholder="Password">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <span id="LoginMsg"></span>
            <button type="button" class="btn btn-primary" onclick="Login()" > StuLogin</button>
            <button type="button" class="btn btn-secondary" onclick="clear()" data-dismiss="modal" id="cancle">Cancle</button>
        </div>
      </div>
    </div>
  </div>

  <!-- login end -->



      <!-- Admin login start -->
    
      <!-- Button trigger modal -->
      <h2>Login as Admin</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3">
        Log In
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="text-align-left" id="admin-login">

                        <!-- <div class="form-group">
                            <i class="fi-xnsuxl-user-solid"></i>
                            <label for="ALoginname">Username</label>
                            <input type="password" class="form-control" id="ALoginname" placeholder="Password">
                        </div> -->

                        <div class="form-group">
                            <i class="fi-xwsuxl-envelope-solid"></i>
                            <label for="ALoginEmail">Email address</label>
                            <input type="email" class="form-control" id="ALoginEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <i class="fi-xnsuxl-lock-solid"></i>
                            <label for="ALoginPass">Password</label>
                            <input type="password" class="form-control" id="ALoginPass" placeholder="Password">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span id="ALoginMsg"></span>
                    <button type="button" class="btn btn-primary" onclick="ALogin()">Adm Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


  <!-- admin login end -->

  <!-- Top button start -->
  <div class="scrolltop float-right">
    <img src="images/icons/up-arrow.png" height="35px" width="35px" alt="" id="top" onclick="topfun()">
    </div>
    <!-- Top button close -->

    <!-- javascript -->
    <script src="js/custom.js"></script>
    <script src="js/data.js"></script>
    <script src="js/admin.js"></script>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>

</body>
</html>
