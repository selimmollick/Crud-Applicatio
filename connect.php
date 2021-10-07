<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "crudoperation";

$con = new mysqli($server,$user,$password,$db);

if(!$con){

    echo "connection succesfull";
// }else{

//     die(mysqli_error($con));
}


?>