<?php
    include("../config/constants.php");
    session_destroy();
    // header("location:". HOME_URL ."admin");
    echo "<script>window.location.href='index.php';</script>";
?>