<?php
require 'config.php';
$id= $_GET['e_id'];
$qury= "DELETE FROM `php_crud`.`php_cruid_opration` WHERE `e_id`= {$id};";
mysqli_query($conn,$qury);
header("Location: index.php");
?>