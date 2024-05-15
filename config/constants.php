<?php
    //starting session
    session_start();


    //create constants to store non repeating values
    //constant name has to be capital letter
    define('HOME_URL', 'http://test1.saggarr.com/');
    define('SERVER_NAME', 'localhost:3306');
    define('DB_USERNAME', 'saggarrc_sagar');
    define('DB_PASSWORD', 'saggarrc_sagar-1993');
    define('DB_NAME', 'saggarrc_handcraft');

    $conn = mysqli_connect(SERVER_NAME, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //this is database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //connect to the correspondent database
?>