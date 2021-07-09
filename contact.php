
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
    <title>Edge-Education||contact us</title>

    <!-- link style.css file -->
    <link rel="stylesheet" href="css/style.css">

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

    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
/* home page start */
#home{
    width: 100%;
    position: relative;
}
#home:before{
    content: "";
    position: absolute;
    top: 0%;
    bottom: 0%;
    left: 0;
    right: 0;
    opacity: 0.6;
    z-index: -1;
    background: linear-gradient(200deg, #16c9f6 65%,#fff 0%);
}

/* home page end */

/*......... Logo .........*/
#logo{
    margin-left: 10px;
    height: 90px;
    width: 350px;
}

/* .......nav elements Home, About us ,Contact us...... */
#cnavbar>ul>li>a{
    font-size: 20px;
    font-weight: 400;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 10px;
}
#cnavbar>ul>li>a:after {
    display:block;
    content: '';
    border-bottom: solid 3px #16c9f6;  
    transform: scaleX(0);  
    transition: transform 250ms ease-in-out;
}
#cnavbar>ul>li>a:hover:after { transform: scaleX(1); }
#cnavbar>ul>li>a.fromRight:after{ transform-origin:100% 50%; }
#cnavbar>ul>li>a.fromLeft:after{  transform-origin:  0% 50%; }

/*..... nav elements Home, About us ,Contact us  closed.....*/

/* go home start */

#go-home>a{
    text-decoration: none;
    font-size: 20px;
    font-family: 'Reggae One', cursive;
}
#go-home>span{
    font-size: 20px;
    font-family: 'Reggae One', cursive;
}
/* go home end */

/* contact page start */
.contact{
    width: 100%;
    height: 100hv;
    padding-top: 40px;
    margin-top: 20px;
    position: relative;
}
/* .contact:before{
    content: "";
    position: absolute;
    top: 0%;
    bottom: 0%;
    left: 0;
    right: 0;
    opacity: 0.6;
    z-index: -1;
    background: linear-gradient(160deg, #16c9f6 65%,#fff 0%);
} */
/* .body:hover{
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    transform: translateY(-20px);
} */

.head{
    background-color:#16c9f6;
    border-radius: 5px;
    margin-top: -40px;
    box-shadow: -1px 9px 27px -4px #16c9f6 ;
    -webkit-box-shadow: -1px 9px 27px -4px #16c9f6 ;
    -moz-box-shadow: -1px 9px 27px -4px #16c9f6 ;
}

.effect-1{
    border: 0;
    outline: none;
    width: 100%;
    padding: 7px 0px;
    border-bottom: 1px solid #ccc;
}

.effect-1 ~ .focus-border{  
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color:#16c9f6  ;
    transition: 0.4s;
}

.effect-1:focus ~.focus-border{
    width: 100%;
    transition: 0.4s;
    left: 0;
}



#color{
    position: relative;
}
/* #color:before{
    content: "";
    position: absolute;
    top: 0%;
    bottom: 0%;
    left: 0;
    right: 0;
    opacity: 0.6;
    z-index: -1;
    background: linear-gradient(190deg, #16c9f6 65%,#fff 0%);
} */
/* icons start */
.imgsetting {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    color: #16c9f6;
}
.imgsetting i{
    font-size: 40px;
}

/* icons end */

    </style>

</head>
<body>
    <!-- Home Page -->

    <div  id="home"> <!-- Home Page div -->

        <nav class="navbar navbar-expand-md navbar-light " id="header"> <!-- navbar homepage part 1 -->

            <a href="" class="navbar-brand text-warning"  ><img src="images/logo.png" alt="" id="logo"></a>  <!-- Logo -->

            <div class="container"> <!-- Navbar section -->

                <!-- <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#cnavbar">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>

                <div class="collapse navbar-collapse text-center" id="cnavbar"> --> <!-- div  for navbar elements -->
    
                    <!-- <ul class="navbar-nav" style="margin-left: auto;">
    
                        <li class="nav-item">
                            <a href="index.html" class="nav-link mr-3 h5 "> Home</a>
                        </li>
 
                        <li class="nav-item">
                            <a href="college.html" class="nav-link mr-3 h5">Colleges</a>
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
                            /* session_start();  */
                            if(isset($_SESSION['is_login'])){
                                echo '<li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php"><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" class="active"><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php" ><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" class="active"><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php" ><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }
                        ?>

                        <!-- <li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                        <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                        <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                        <li><a href="contact.php" class="active"><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                        <li><a href="login.php"><i class="fi-xnsuxl-user-solid"></i>Log In</a></li> -->
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
                            /* session_start();  */
                            if(isset($_SESSION['is_login'])){
                                echo '<li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" class="active"><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php" ><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php"><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" class="active"><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php" ><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }
                        ?>

                        <!-- <li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                        <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                        <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                        <li><a href="contact.php" class="active"><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                        <li><a href="login.php"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li> -->
                  </ul>
              </nav>

            </div><!-- Navbar section -->

        </nav><!-- navbar homepage part 1 -->
        <!-- Header Part closed -->
    
        <!-- contact breadcrumbs -->
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper" id="go-home">
                <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">Contact Us</span>
            </div>
        </nav>
        <!-- /contact breadcrumbs -->


        <section class="contact">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card">
                            <form action="contactconnect.php" method="POST" class="card-body body">
                                <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="head text-center text-white py-3">
                                            <h3>Contact Us</h3>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form py-3">
                                    <h1 class="text-center p-3" style="font-family: 'Reggae One', cursive;">Drop us a Message</h1>
                                    <div class="form-row my-3">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <input type="text" class="effect-1" name="firstname" placeholder="First Name">
                                            <span class="focus-border"></span>
                                        </div>
    
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <input type="text" class="effect-1" name="lastname" placeholder="Last Name">
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
    
                                    <div class="form-row py-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="effect-1" name="emailadress" placeholder="Email Adress">
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>

                                    <div class="form-row py-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="effect-1" name="subject" placeholder="Subject">
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
    
                                    <div class="form-row py-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <textarea type="text" class="effect-1" name="message" placeholder="Your Message"></textarea>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
    
                                    <!-- <div class="form-row py-3">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <p><input type="checkbox">I'm not a Robot</p>
                                        </div> -->
    
                                        <div class="offset-2 col-lg-4 col-md-4 col-sm-4">
                                            <input type="submit" name="submit" value="Send Message" class="btn btn-primary" 	autocomplete="off">
                                            <!-- <button class="btn btn-primary">Send Message</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- Get in touch start -->
    <section id="color">
        <div class="container text-center service" id="service"> <!-- Service Page start -->

            <h1>We’re here to help</h1><!-- Title of service page -->
            <p>GET IN TOUCH</p><!-- Paragraph for service page -->
        
            <div class="row rowsetting content-center "><!-- div of row  -->
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block bg-light" id="ser-hover"> <!-- id  service-hover -->
                    <div class="imgsetting d-block m-auto">
                        <i class="fi-xnsuxl-telegram"></i>
                    </div>
                    <h2>Our head office address:</h2>
                    <p>8th-block road, cross avenue,</p>
                    <p>Lorem dolor sit, New York, USA</p>
                    
                </div><!-- id  service-hover closed -->
        
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block bg-light" id="ser-hover">
                    <div class="imgsetting d-block m-auto">
                        <i class="fi-xnsrxl-phone-solid"></i>
                    </div>
                    <h2>Call for help:</h2>
                    <p>+977 989809841</p>
                    <p>+91 998754687</p>
        
                </div>
        
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block bg-light" id="ser-hover">
                    <div class="imgsetting d-block m-auto">
                        <i class="fi-xwluxl-open-envelope-wide"></i>
                    </div>
                    <h2>Mail Us for information:</h2>
                    <p> <a href="">info@example.com</a></p>
                    <p> <a href="">info@example.com</a></p>
        
                </div>
            </div>  
        </div> 
    <!-- Get in touch end -->
    

    <!-- Top button start -->
    <div class="scrolltop float-right">
        <img src="images/icons/up-arrow.png" height="35px" width="35px" alt="" id="top" onclick="topfun()">
    </div>
    <!-- Top button close -->


    <!-- javascript -->
    <script src="js/custom.js"></script>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
</body>
</html>