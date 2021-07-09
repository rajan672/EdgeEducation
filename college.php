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
    <title>Edge-Education||college</title>

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
    height: 100vh;
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
#collegee{
    margin-top: 80px;
}
#collegee>h1{
    font-family: 'Reggae One', cursive;
    padding: 20px;
    display: flex;
    flex-direction: row;
    padding: 10px;
}
#collegee h1:before, #collegee h1:after {
    content: "";
    flex: 0.4 1;
    border-bottom: 3px solid cornflowerblue;
    margin: auto;
}
#collegee>p{
    padding: 20px;
    font-size: 20px;
}
/* About section end */


/* collg section start */

#collg{
    padding: 100px 0px 60px;
}

#collg>h1{
    font-size: 35px;
    font-family: 'Reggae One', cursive;
    font-weight: bold;
    display: flex;
    flex-direction: row;
    padding: 10px;
}

#collg h1:before, #collg h1:after {
    content: "";
    flex: 0.4 1;
    border-bottom: 3px solid cornflowerblue;
    margin: auto;
}
/* .......Title of service page close..... */

/* .......Paragraph for service page....... */
#collg>p{
    font-size: 20px;
    padding-bottom: 15px;
}

/* collg section end */



.card-deck{
    margin-top: 80px;
    padding: 0px;
    margin-bottom: 20px;
    align-items: center;
}

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
                                    <li><a href="college.php" class="active"><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php"><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" class="active" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }

                        ?>
                        <!-- <li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                        <li><a href="college.php" class="active"><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                        <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                        <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
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
                            /* session_start(); */
                            if(isset($_SESSION['is_login'])){
                                echo '<li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" class="active"><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php"><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" class="active" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }
                        ?>
                        <!-- <li><a href="index.php" ><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                        <li><a href="college.php" class="active"><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                        <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                        <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                        <li><a href="login.php"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li> -->
                  </ul>
              </nav>

            </div><!-- Navbar section -->

        </nav><!-- navbar homepage part 1 -->
        <!-- Header Part closed -->
    
        <!-- contact breadcrumbs -->
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper" id="go-home">
                <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">Colleges</span>
            </div>
        </nav>
        <!-- /contact breadcrumbs -->


        <section>
            <div class="container text-center p-3 " id="collegee">

                <h1>COLLEGES</h1>
                <p>At Edge-EducationEdge-Education, we take pride in being a dedicated skill-building 
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
        <div class="container text-center" id="collg">
            <h1>TOP COLLEGES</h1>
            <p>Here, we have mentioned the top colleges which are in our conntect.</p>

            <div class="row rowsetting content-center"><!-- div of row  -->
    
                <?php
                    include_once('dbConnection.php');
                    $sql = "SELECT * FROM college";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while ( $row = $result-> fetch_assoc()){
                            $clg_id = $row['id'];
                            echo ' <div class="col-lg-4 col-md-4 col-sm-4 d-block" id="ser-hover"> <!-- id  service-hover -->
        
                            <div class="imgsetting d-block m-auto">
                
                                <img src=" ' .str_replace('..' , '.', $row['clg_img']).' " alt="">
                
                            </div>
                
                            <h2> ' . $row['clg_name'].'</h2>
                            <p> ' . $row['clg_desc'].' </p>
                
                        </div><!-- id  service-hover closed --> ';
                        }
                    }

                ?>
        
        
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 d-block" id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/college/PanipatInstituteofEngineeringTechnology.jpg" alt="">
        
                    </div>
        
                    <h2>Panipat Institute of Engineering Technology</h2>
                    <p>Panipat Institute of Engineering and Technology (PIET), is a Private College 
                        that was established in the year 2006. It is governed by Vidyapeeth Education 
                        Trust and affiliated to Kurukshetra University, Kurukshetra and approved by AICTE, 
                        Government of India. Sprawling over 20 acres of land space, the institute’s main aim 
                        is to promote academic growth by offering Diploma, Undergraduate and Postgraduate 
                        programs in Engineering, Management, Pharmacy disciplines. The college provides 
                        international internships in countries like the UK, the USA, Sweden, Germany, etc.
                    </p>
        
                </div>
        
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block" id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/college/amity_mumbai1.jpg" alt="">
        
                    </div>
        
                    <h2>Amity University</h2>
                    <p>Amity University is inviting applications for admission to its Dual Degree 
                        Programs in various streams. Admission will be merit-based while the final 
                        selection will be done on the basis of GD/PI. Apply here for Amity University Admission 2021.
                        Amity University is inviting applications for diploma and PG diploma programs in various streams.
                        The admissions to all these programs is based on merit. Interested candidates can visit the official 
                        website to apply. Apply here for Amity University Admission 2021
                    </p>
        
                </div> -->
    
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 d-block " id="ser-hover">
        
                    <div class="imgsetting d-block m-auto">
        
                        <img src="images/college/Achariya College of Engineering Technology Puducherry_Campus-View.jpg" alt="">
        
                    </div>
        
                    <h2>Achariya College of Engineering Technology</h2>
                    <p>Acharya Bangalore B-School (ABBS) is located in Bangalore, Karnataka and is an 
                        affiliation of Bangalore University. ABBS is a part of Samagra Sikshana Samithi 
                        Trust and has 1800+ students and 6 Foreign Collaborations. The institution is a 
                        B-School offering Undergraduate and Postgraduate courses in the streams of Management, 
                        Arts, IT, Commerce and Science.
                    </p>
        
                </div>
        
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block " id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/college/Manipal-University-Collegesearch.jpeg" alt="">
        
                    </div>
        
                    <h2>Manipal University</h2>
                    <p>Recognized as a deemed university since 1993, Manipal Academy of Higher Education (MAHE) 
                        has transformed into a centre of excellence that offers knowledge to about 33000+ students 
                        from 67+ nations. There are 375+ academic programs across 31+ disciplines including medicine, 
                        engineering, dentistry, nursing, allied health sciences, architecture, management, communication, 
                        humanities and many more. Admission is based on MET (Manipal Entrance Test) for a few courses 
                        which are conducted by the institute.
                    </p>
        
                </div>
        
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block " id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/college/RR institute.jpg" alt="">
        
                    </div>
        
                    <h2>RR Institute of Technology (RRIT)</h2>
                    <p>RR Institute of Technology (RRIT), Bangalore is a constituent 
                        of RR Institutions under PKMET. The institute has proved the 
                        capability of placing students after completing their courses 
                        in prestigious organizations across the country and abroad. 
                        RRIT offers undergraduate and doctoral programs in the discipline of Engineering.
                    </p>
        
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 d-block " id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/college/Galgotias_college_entrance.jpg" alt="">
        
                    </div>
        
                    <h2>Galgotias College</h2>
                    <p>Galgotias College of Engineering & Technology is a private engineering 
                        institute established in the year 2000. The institute is accredited by 
                        AICTE and affiliated to Dr. A.P.J. Abdul Kalam Technical University 
                        (APJAKTU), Lucknow. It offers B.Tech under the UG domain and MBA and 
                        MCA under the PG domain. Admission is done either on a merit basis or entrance exam.
                    </p>
        
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 d-block " id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/college/Jain.jpg" alt="">
        
                    </div>
        
                    <h2>Jain University</h2>
                    <p>Jain University Bangalore is ranked 7 for Best Private University 
                        in Bangalore by India Today. The university is known best for its 
                        100% placement offers. The highest salary package offered amounts 
                        to INR 32 LPA. Jain University assures placement opportunities to 
                        students and most of the reputed MNC come for recruitment. 
                        Jain University is famous for its B.E, B.Tech, MBA/ PGDM programs.
                    </p>
        
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 d-block " id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/college/VIT-Business-School-Top-MBA-college-in-Chennai.jpeg" alt="">
        
                    </div>
        
                    <h2>VIT-Vellore Institute of Technology</h2>
                    <p>Vellore Institute of Technology (VIT) University, Vellore is ranked 15th 
                        in the NIRF ranking of Engineering Institutions in 2020. VIT has stellar 
                        placement stats that have been recorded in the Limca book of records for 
                        the highest number of recruitments through placements done from a single 
                        institution by IT sector companies for 7 years. The highest salary package 
                        is offered at INR 44 LPA. The university offers Graduate, Postgraduate, 
                        and Research programs in Engineering, Management, Sciences, Architecture, 
                        Agriculture, Law, and Social Sciences. Admission is done on the basis of 
                        merit and entrance test
                    </p>
        
                </div> -->
        
            </div><!-- div of row close -->
        </div>
    </section>



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