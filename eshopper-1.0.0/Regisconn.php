<?php

$FName = $_POST['FName'];
$LName = $_POST['LName'];
$MobileNo = $_POST['MobileNo'];
$mailid = $_POST['mailid'];


$con = new mysqli('localhost', 'root','','ecom');

if($con->connect_error){
   die("Connection Failed :" $con->connect_error);
 }
    else{  


    $stmt -> $con->prepare("insert into id(FName, LName, Mobileno, mailid)
        values(?,?,?,?)");
    $stmt -> bind_param("ssis",$FName,$LName,$MobileNo,$emailid);

    $stmt -> execute();
    echo "Thank You For Registration";
    $stmt -> close();
    $con -> close();



}

?>







