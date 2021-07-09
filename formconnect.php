<?php

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
/* $gender=$_POST['gender'];*/
$enquiry=$_POST['enquiry'];
$admission=$_POST['admission'];
/*
$college=$_POST['college'];
$coladress=$_POST['coladress'];
$alternatecollege=$_POST['alternatecollege']; */
 

//database connection


$connect =new mysqli('localhost', 'root','','edgeeducation');
if($connect->connect_error){
    die('connection Failed :'.$connect->connect_error);
}else{
    $stmt = $connect->prepare("INSERT into formconnect(user,email,mobile,enquiry,admission) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$user,$email,$mobile,$enquiry,$admission);
    $stmt->execute();
    echo "Registration Successfully......";
    $stmt->close();
    $connect->close();
}


?>