<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "gymusersid";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, 
                               $db_user, 
                               $db_password, 
                               $db_name);
    }
    catch (mysqli_sql_exception) {
        echo "Failed to Connect to the DB! <br>";
    }

    /*if($conn) {
        echo "You've successfully connected to the DB! <br>";
    }*/

?>