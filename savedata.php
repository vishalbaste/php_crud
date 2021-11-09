<?php
include 'config.php';

$name= $_POST['sname'];
$address= $_POST['saddress'];
$class= $_POST['sclass'];
$phone= $_POST['sphone'];

    $qury= "INSERT INTO `php_crud`.`php_cruid_opration` (`e_id`,`name`,`address`,`class`,`phone`) VALUES (null,'$name','$address','$class','$phone');";

    mysqli_query($conn,$qury);

    header("location: index.php");


?>