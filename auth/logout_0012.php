<?php
    session_start();
    session_destroy();
    session_unset();
    echo "<script>alert('Logout Success !');window.location.replace('form_login_0012.php')</script>";
?>
