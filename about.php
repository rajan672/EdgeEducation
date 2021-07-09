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
    <title>Edge-Education||about us</title>

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
    max-height: 100%;
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
    background: linear-gradient(160deg, #16c9f6 65%,#fff 0%);
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

/* About section start */
#about{
    margin-top: 80px;
}
#about>h1{
    font-family: 'Reggae One', cursive;
    padding: 20px;
}
#about>p{
    padding: 20px;
    font-size: 20px;
}
/* About section end */


/* Vision section start */
#vision{
    width: 100%;
    padding-top: 10px;
}
#our-vision{
    padding-top: 40px;
}
#our-vision>h1{
    font-family: 'Reggae One', cursive;
    padding: 20px;
    display: flex;
    flex-direction: row;
    padding: 10px;
}
#our-vision h1:before, #our-vision h1:after {
    content: "";
    flex: 0.4 1;
    border-bottom: 3px solid cornflowerblue;
    margin: auto;
}
#our-vision>p{
    padding: 20px;
    font-size: 20px;
}


/* vision section end */


/* Mission section start */
#mission{
    width: 100%;
    height: 100vh;
}
#mission>h1{
    font-family: 'Reggae One', cursive;
    padding: 20px;
    display: flex;
    flex-direction: row;
    padding: 10px;
}
#mission h1:before, #mission h1:after {
    content: "";
    flex: 0.4 1;
    border-bottom: 3px solid cornflowerblue;
    margin: auto;
}


/* icons */
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


/* Mission section end */
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
                </button> -->

                <!-- <div class="collapse navbar-collapse text-center" id="cnavbar"> <!-- div  for navbar elements -->
    
                    <!--<ul class="navbar-nav" style="margin-left: auto;">
    
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
                                    <li><a href="about.php" class="active"><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php" ><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" class="active"><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php" ><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
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
                                    <li><a href="about.php" class="active"><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php" ><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" class="active"><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php" ><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }
                        ?>
                  </ul>
              </nav>
            </div><!-- Navbar section -->

        </nav><!-- navbar homepage part 1 -->
        <!-- Header Part closed -->

        <!-- contact breadcrumbs -->
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper" id="go-home">
                <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">About Us</span>
            </div>
        </nav>
        <!-- /contact breadcrumbs -->

        <!-- About Us start -->

        <section>
            <div class="container text-center p-3 " id="about">

                <h1>WHO WE ARE</h1>
                <p>At Edge Education, we take pride in being a dedicated skill-building 
                and education consulting firm that aims to provide excellence 
                in the field of distance education as well as regular education. 
                Right since the inception of our company in 2016, we have single-mindedly 
                focused on meeting the dynamic industry demands of creating highly educated,
                well trained and skilled professionals, at all times. Our team consists of 
                young enthusiasts guided by industry veterans & intellectuals. This helps us
                deliver to you the best there is in education.
                </p>
            </div>
        </section>
    </div>

  <section>
    <div class="container text-center " id="vision">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 d-block m-auto text-center" id="our-vision">
                <h1>Our Vision</h1>
                <p>To become the most respected web application development 
                    & solutions company in the world through world-class quality 
                    result oriented products and services with a focus on emerging 
                    technologies where the best in the industry want to work for the 
                    job-satisfaction and professional growth it provides.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 d-block m-auto" >
                <img src="images/student4.png"  alt="">
            </div>
        </div>
    </div>
  </section>


  <section>
      <div class="container text-center service" id="mission">

        <h1>Our Mission</h1>
        <div class="row rowsetting content-center">
            <div class="col-lg-4 col-md-4 col-sm-4 d-block m-auto bg-light" id="ser-hover">
                <div class="imgsetting d-block m-auto">
                    <i class="fi-xnsuxl-edit-solid"></i>
                </div>
                <h2>Create and deliver world-class web and mobile solutions</h2>
                <p>To create and provide world-class high-quality web applications 
                    and online solutions services with a special focus on emerging technologies.
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 d-block m-auto bg-light" id="ser-hover">
                <div class="imgsetting d-block m-auto">
                    <i class="fi-xwluxl-balance-wide"></i>
                </div>
                <h2>Provide ethical and cost effective services</h2>
                <p>To hold the customer’s interests paramount and provide ethical and cost-effective 
                    services in the most transparent manner possible.
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 d-block m-auto bg-light" id="ser-hover">
                <div class="imgsetting d-block m-auto">
                    
                    <i class="fi-xnsuxl-user-tie-circle"></i>
                </div>
                <h2>Employ people who love their job</h2>
                <p>To employ people who love the job, possess a zeal to learn and innovate, pride 
                    themselves on their quality, believe in teamwork and mutual growth.
                </p>
            </div>
        </div>

      </div>
  </section>
  <!-- About Us end -->

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
