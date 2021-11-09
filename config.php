<?php

define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_NAME',"php_crud");

    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($conn==true){
        // die("<h2 style='text-align:center;color:green;'>Database Connection Sucessful :)</h2>");
    }else{
        die("<h2 style='text-align:center;color:red;'>Database Connection Fail...</h2>");
    }

?>