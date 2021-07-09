
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="describe">

    <!-- Title tage use to show the sentence in blue color -->
    <title>Edge-Education the no.1 education consultant||Home page</title>

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


</head>
<body onload="myfun()">

<!-- loading page start -->
<section id="loading">
    <div class="main">
        <div class="load">
            <div class="move"></div>
            <h2>loading...</h2>
        </div>
    </div>
</section>

<!-- loading page end -->

    <!-- Home Page -->

    <div class="mydiv" id="home"> <!-- Home Page div -->

        <nav class="navbar navbar-expand-md navbar-light " id="header"> <!-- navbar homepage part 1 -->

            <a href="" class="navbar-brand text-warning"  ><img src="images/logo.png" alt="" id="logo"></a>  <!-- Logo -->

            <div class="container"> <!-- Navbar section -->

                <!-- <button type="button" class="navbar-toggler align-item-center" data-toggle="collapse" data-target="#cnavbar">
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
                </div>  --><!-- div  for navbar elements -->


                <nav class="nav-1">
                    <ul>

                        <?php  
                            session_start();
                            if(isset($_SESSION['is_login'])){
                                echo '<li><a href="index.php" class="active"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php"><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php" class="active"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
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
                                echo '<li><a href="index.php" class="active"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="studentdata/studentProfile.php"><i class="fi-xnsuxl-user-solid"></i>My Profile</a></li> ';
                            }else{
                                echo '<li><a href="index.php" class="active"><i class="fi-xnsuxl-home-solid"></i>Home</a></li>
                                    <li><a href="college.php" ><i class="fi-xnsuxl-diploma-solid"></i>Colleges</a></li>
                                    <li><a href="about.php" ><i class="fi-xnsuxl-team-solid"></i>About Us</a></li>
                                    <li><a href="contact.php" ><i class="fi-xnsuxl-open-envelope-alt-solid"></i>Contact Us</a></li>
                                    <li><a href="login.php"><i class="fi-xwsuxl-sign-in-solid"></i>Log In</a></li>';
                            }

                        ?>
                  </ul>
              </nav>


            </div><!-- Navbar section -->

        </nav><!-- navbar homepage part 1 -->

        <div class="row"> <!--Home page part 2  -->

            <div class="col-lg-6 col-md-6 col-sm-6 d-block" id="txts"> <!-- div for texts -->

                <h1>Give your Study <br> a new way !</h1>

                <p>succes is not  always about greatness</p>

                        <?php  
                            /* session_start(); */
                            if(isset($_SESSION['is_login'])){
                                echo '<a id="bttn" href="studentdata/studentProfile.php">My profile &#8594;</a> ';
                            }else{
                                echo '<a id="bttn" href="login.php">Explore now &#8594;</a> ';
                            }
                        ?>

            </div><!-- div for texts -->

            <div class="col-lg-6 col-md-6 col-sm-6 d-block" id="imag"> <!-- div for images -->

                <img src="images/student.png" width="" alt="">

            </div><!-- div for images -->

        </div><!--Home page part 2  -->

    </div><!-- Home Page div -->  
    <!-- Home page closed -->





<!-- Floating  social media start -->

    <div class="icon-bar">
        <a href='#' class='facebook' target='_blank'>
            click here to visit <i class="fi-xnsuxl-facebook"></i>
        </a>
        <a href='#' class='twitter' target='_blank'>
            click here to visit <i class="fi-xnsuxl-twitter"></i>
        </a>
        
        <a href="" class='instagram' target='_blank'>
            click here to visit <i class="fi-xnsuxl-instagram"></i>
        </a>
        <a href='' class='linkedin' target='_blank'>
            click here to visit <i class="fi-xnsuxl-linkedin"></i>
        </a>
    </div>


<!-- Floating  social media start -->


<form action="formconnect.php" onsubmit="return validation()" method="POST" id="form">
     
    <div class="all" id="all">
        <div class="apply" id="apply">
            A <br>
            P <br>
            P <br>
            L <br>
            Y <br>

            N <br>
            O <br>
            W <br>
            <i class="fi-xwsuxl-envelope-solid" id="mail" onclick="mail()"></i>
            <i class="fi-xwluxl-times-wide" id="cross" onclick="cross()"></i>
        </div>

        <div class="form-group bg-danger" id="form-group">
            <label for="user" class="font-weight-bold"> Name: </label>
            <input type="text" name="user" class="form-control" id="user" placeholder="Enter Full name" required autocomplete="on">
            <!-- <span id="username" class="text-danger font-weight-bold"> </span> -->

        
            <label class="font-weight-bold"> Email: </label>
            <input type="text" required name="email" class="form-control" id="emails" placeholder="Enter Your E-mail address" autocomplete="on">
            <!-- <span id="emailids" class="text-danger font-weight-bold"> </span> -->
        

            <label class="font-weight-bold"> Mobile Number: </label>
            <input type="text" required name="mobile" class="form-control" id="mobileNumber" placeholder="e.g. 9827345644" autocomplete="on">
            <!-- <span id="mobileno" class="text-danger font-weight-bold"> </span> -->

            <label for="enquiry" class="font-weight-bold">Enquiry For :</label>
            <input type="text" required name="enquiry" class="form-control" id="enquiry" placeholder="Searching for the course">
            <!-- <span id="enquryfor" class="text-danger font-weight-bold"></span> -->
                    
            <label for="admission" class="font-weight-bold">Admission In:</label>
            <input type="text" required name="admission" id="admission" class="form-control" placeholder="wana take admission in">
            <!-- <span id="admissionin" class="text-danger font-weight-bold"></span> -->
            
<!--             <label for="college" class="font-weight-bold">Your preferred college:</label>
            <input type="text" required name="college" id="college" class="form-control" placeholder="The college you like to take admission">
            <span id="mycollege" class="text-danger font-weight-bold"></span> -->
                    
            <!-- <label for="col-adress" class="font-weight-bold">Your preferred college adress:</label>
            <input type="text" required name="coladress" id="col-adress" class="form-control" placeholder="Location of the that college"> -->
            <!-- <span id="college-adress" class="text-danger font-weight-bold"></span> -->
                    
 <!---      <label for="alternatecollege" class="font-weight-bold">Alternate college with adress:</label>
            <input type="text" required name="alternatecollege" id="alternatecollege" class="form-control" placeholder="Another college you like">
        -->
            <!-- <span id="alt-college" class="text-danger font-weight-bold"></span> -->


            <input type="submit" name="submit" value="submit" class="btn btn-primary" 	autocomplete="off">

        </div>

        
    </div>
    
</form>







    <!-- SERVICE Section Start -->
   <div class="container text-center service" id="service"> <!-- Service Page start -->

        <h1>Edge Eduction</h1><!-- Title of service page -->
        <p>Leading the way in skill building & education consulting</p><!-- Paragraph for service page -->
    
        <div class="row rowsetting content-center"><!-- div of row  -->
            
                <?php
                    include('dbConnection.php');
                    $sql = "SELECT * FROM course";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while ( $row = $result-> fetch_assoc()){
                            $course_id = $row['course_id'];
                            echo ' <div class="col-lg-4 col-md-4 col-sm-4 d-block" id="ser-hover"> <!-- id  service-hover -->
        
                            <div class="imgsetting d-block m-auto">
                
                                <img src=" ' .str_replace('..' , '.', $row['course_img']).' " alt="">
                
                            </div>
                
                            <h2> ' . $row['course_name'].'</h2>
                            <p> ' . $row['course_desc'].' </p>
                
                        </div><!-- id  service-hover closed --> ';
                        }
                    }

                ?>
    
        </div><!-- div of row close -->

        <div class="row rowset " id="service2"> <!--div for service part 2 -->

            <div class="col-lg-10 col-md-10 col-sm-10 d-block m-auto" id="serv2" > <!--id for serv2  -->

                <h2>We Provide complete assistance & counselling</h2>
                <p>At Edge Education, we believe that the most important
                    thing a student needs early on in his/her journey is a 
                    clear direction. This is why we focus on providing 
                    you with complete assistance to choose the most suitable
                    Education University, Professional Training, Distance 
                    Learning Courses and everything beginning from the form 
                    filling to placements and degrees. We’ve got a set of 
                    experienced career counsellors and industry veterans 
                    to take you through the dynamic rigours of each & every 
                    industry, all with a practical & tangible approach.
                </p>
            </div><!--id for serv2  -->

        </div><!--div for service part 2 -->
    
    </div><!-- Service Page start -->
    <!-- SERVICE Section Close -->


    <!-- Colleges Section start -->
    <section class="servic-2" >
        <div class="container text-center service" id="service"> <!-- Service Page start -->

            <h1>OUR POPULAR COURSES</h1><!-- Title of service page -->
            <p>Have a look through our popular MBA courses</p><!-- Paragraph for service page -->
        
            <div class="row rowsetting content-center "><!-- div of row  -->
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block bg-light" id="ser-hover"> <!-- id  service-hover -->
        
                    <div class="imgsetting d-block m-auto">
        
                        <img src="images/popular/Marketing.jpg" alt="">
        
                    </div>
        
                    <h2>MBA Marketing Management</h2>
                    <button type="button" class="btn btn-outline-info" id="ser-btn">Learn More</button>
        
                </div><!-- id  service-hover closed -->
        
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block bg-light" id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/popular/human-resource-hiring-recruiter-select-career-concept.jpg" alt="">
        
                    </div>
        
                    <h2>MBA Human Resource</h2>
                    <button type="button" class="btn btn-outline-info" id="ser-btn">Learn More</button>
        
                </div>
        
        
                <div class="col-lg-4 col-md-4 col-sm-4 d-block bg-light" id="ser-hover">
        
                    <div class="imgsetting d-block m-auto ">
        
                        <img src="images/popular/operation.jpg" alt="">
        
                    </div>
        
                    <h2>MBA Operation Management</h2>
                    <button type="button" class="btn btn-outline-info" id="ser-btn">Learn More</button>
        
                </div>
            </div>  
        </div>     

        <div class="diagonal">

            <div class="container text-center">

                <h1>Why Choose Us</h1>
                <p>The global industrial landscape is on a course of vertical 
                    growth. Edge education carefully identifies the gap between individual 
                    skills and emerging organisational requirements to craft extensive 
                    solutions to bridge that rift. Quality and Relevance are our two 
                    primary virtues; our ‘Customer First’ ideology helps us to model 
                    certifications by keeping your requirements under prime focus.
                </p>
    
            </div>
    
            <div class="container d-flex justify-content-around align-item-center text-center">
    
                <div class="project">
                    <h2 class="counter" data-count="150">0</h2>
                    <p>Faculty / Trainers</p>
                </div>
    
                <div class="project">
                    <h2 class="counter" data-count="1000">0</h2>
                    <p>Students Learning</p>
                </div>
    
                <div class="project">
                    <h2 class="counter" data-count="10">0</h2>
                    <p>Executive Courses</p>
                </div>
    
                <div class="project">
                    <h2 class="counter" data-count="20">0</h2>
                    <p>No. of hours</p>
                </div>
            </div>
        </div>
    </section>
    <!-- College Section Close -->


    <!-- FAQ Section start -->
    <section class="accordion d-flex m-auto">
        <div class="container text-center FAQ">
            <h1>F. A. Q.'s</h1>
            <p>Frequently Asked Questions</p>  

            <div class="contentBx">
                <div class="label">
                    What is the role of Edge Education?
                </div>
                <div class="content">
                    <p>Edge Education is technology partner 
                        with Premium Institutes like DY 
                        Patil Pune. We take admissions after the procedure 
                        of profile screening and provide online platform to 
                        institutes to conduct classes. The course curriculum, 
                        class schedules and certification is provided by the 
                        respective institute and Edge Education has no role to play in the same.
                    </p>
                </div>
            </div>

            <div class="contentBx">
                <div class="label">
                    What if I am confused to pick the right course for my career growth?
                </div>
                <div class="content">
                    <p>We have a team of counsellors that help you pick the right course and 
                        grow in your respective fields.
                    </p>
                </div>
            </div>

            <div class="contentBx">
                <div class="label">
                    What if I miss a class in between the course?
                </div>
                <div class="content">
                    <p>Don’t worry! Our in-house Learning Management System will 
                        provide you with recordings of each lecture.
                    </p>
                </div>
            </div>

            <div class="contentBx">
                <div class="label">
                    Is it an online course or offline?
                </div>
                <div class="content">
                    <p>We offer blended learning experience for our enrolled 
                        professionals which includes campus visits and online 
                        weekend classes to help them balance their work and studies.
                    </p>
                </div>
            </div>

            <div class="contentBx">
                <div class="label">
                    Is there any extra added benefit of joining Edge Education?
                </div>
                <div class="content">
                    <p>Yes, of course. We have come up with a slew of Edge Education , 
                        wherein one can take part in online public speaking platform and 
                        share their experiences with our audience. Also, special scholarships 
                        are provided to children who have great academic background or have 
                        represented India at any National or International level. 
                        We provide one-on-one counselling sessions to women on sabbatical 
                        help them get back in the game. Special discounts are provided to 
                        ex-servicemen or physically disabled professionals.
                    </p>
                </div>
            </div>

            <div class="contentBx">
                <div class="label">
                    How do I refer my friend for any program listed on Edge Education website?
                </div>
                <div class="content">
                    <p>A referral shall be valid only if you refer your friend either by 
                        filling refer & earn form listed on our website or email their 
                        referral details to Edge Education Team and the referred one successfully 
                        enroll in any program.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- FAQ Section close -->


    <!-- students testimonial start -->
    <!-- <div class="container-fluid mt-5" style="background-color: #4B7289" id="feedback">
        <h1 class="text-center p-4 testyheading"> student's feedback</h1>
    </div> -->

<?php
    include('testimonial.php');
?>


    <!-- students testimonial start -->








    <!-- Top button start -->
    <div class="scrolltop float-right">
       <!--  <i class="fi-cnsuxl-chevron-solid" id="top" onclick="topfun()"></i> -->

       <img src="images/icons/up-arrow.png" height="35px" width="35px" alt="" id="top" onclick="topfun()">
    </div>
    <!-- Top button close -->

    <!-- FOOTER Section Start -->
    <section class="footer bg-dark pt-5 pb-4 sticky-bottom" id="footer">

        <div class="container text-white text-center">

            <div class="row">

                <div class=" fott col-lr-3 col-md-3 col-sm-10 ">
                    <h3>Edge Education</h3>
                    <p>Edge Education was founded
                    in 2021 with one clear
                    objective – to provide
                    excellence & distinction to students in this ever-evolving world.
                    </p>
                </div>

                <div class=" fott col-lr-3 col-md-3 col-sm-10 ">
                    <h3>Know More</h3>
                    <p><a href="" style="color: #fff; text-decoration: none;">Colleges</a></p>
                    <p><a href="registration.html" style="color: #fff; text-decoration: none;">Registration</a> </p>
                    <p><a href="about.html" style="color: #fff; text-decoration: none;">About Us</a>  </p>
                    <p><a href="contact.html" style="color: #fff; text-decoration: none;">Contact Us</a>  </p>
                </div>

                <div class=" fott col-lr-3 col-md-3 col-sm-10 " style="height: 220px;">
                    <h3>Follow Us</h3>
                    <!-- <p><a href="" style="color: #fff; text-decoration: none;"><i class="fi-cnsuxl-facebook-circle" style="font-size: 19px; padding: 5px;"></i>Facebook</a></p>
                    <p><a href="" style="color: #fff; text-decoration: none;" ><i class="fi-xnsuxl-twitter" style="font-size: 19px; padding: 5px;"></i>Twitter</a></p>    
                    <p><a href="" style="color: #fff; text-decoration: none;"><i class="fi-cnsuxl-linkedin" style="font-size: 19px; padding: 5px;">LinkedIn</i>LinkedIn</a></p>
                    <p><a href="" style="color: #fff; text-decoration: none;"><i class="fi-xnsuxl-instagram" style="font-size: 19px; padding: 5px;"></i>Instagram</a></p> -->
                    
                    <!-- <i class="fi-xnsuxl-facebook"></i>
                        <i class="fi-xnsuxl-instagram"></i>
                    <i class="fi-xnsuxl-linkedin"></i> -->
                    <ul>
                        <li>
                            <a href="#"><i class="fi-xnsuxl-facebook icon"></i></a>
                        </li>

                        <li>
                          <a href="#"><i class="fi-xnsuxl-twitter icon"></i></a>
                        </li>

                        <li>
                          <a href="#"><i class="fi-xnsuxl-linkedin icon"></i></a>
                        </li>

                        <li>
                          <a href="#"><i class="fi-xnsuxl-instagram icon"></i></a>
                        </li>

                    </ul>
                </div>

                <div class=" fott col-lr-3 col-md-3 col-sm-10 ">
                    <h3>Contact Info</h3>
                    <p><i class="fi-xnsuhl-house-solid mr-3 "></i>  New York, NY 2333,US</p>
                    <p><i class="fi-xwsuxl-envelope-solid mr-3 "></i>  theprovider98@gmail.com</p>
                    <p><i class="fi-xnsuxl-phone-solid mr-3"></i>  +91 9874845467</p>
                    <p><i class="fi-xnsuxl-user-solid mr-3 "></i>   +01 998 774 88</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lr-10 col-md-10 col-sm-10 mt-3 ">
                    <h5> copyright &#169; 04/24/2021 All reserved by : <strong style="color: #16c9f6; font-family: 'Reggae One', cursive;"> Edge-Education</strong>   </h5>
                </div>
            </div>

        </div>
    </section>
    <!-- FOOTER Section Close -->



    <!-- javascript -->
    <script src="js/custom.js"></script>
    <script src="js/data.js"></script>
    <script src="js/admin.js"></script>

    <!-- JQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 

</body>
</html>