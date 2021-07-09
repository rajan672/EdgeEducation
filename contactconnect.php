<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailadress = $_POST['emailadress'];
$subject = $_POST['subject'];
$message = $_POST['message'];


//database connection


$connect =new mysqli('localhost', 'root','','edgeeducation');
if($connect->connect_error){
    die('connection Failed :'.$connect->connect_error);
}else{
    $stmt = $connect->prepare("INSERT into contactconnect(FirstName,LastName,EmailAdress,Subjectt,Messagee) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$emailAdress,$subject,$message);
    $stmt->execute();
    echo "Message Successfully Send......";
    $stmt->close();
    $connect->close();
}







?>