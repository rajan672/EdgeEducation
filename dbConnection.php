<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "edgeeducation";

//create connection

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);

//check connection 
/* if($conn->connnect_error){
    die("connection failed :".$connect->connect_error);
}  */
/* else{
    echo  "connected";
} */

?>