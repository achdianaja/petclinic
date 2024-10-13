<?php
session_start();
if (isset($_POST['login'])) {
    include '../koneksi.php';

    $query = "SELECT * FROM users_0012 WHERE username_0012='$_POST[username_0012]'";

    $login = mysqli_query($db_con, $query);

    if (mysqli_num_rows($login) > 0) {
        $user = mysqli_fetch_assoc($login);
        if (password_verify($_POST['password_0012'], $user['password_0012'])) {
            $_SESSION['login'] = TRUE;
            $_SESSION['userid'] = $user['user_id_0012'];
            $_SESSION['username'] = $user['username_0012'];
            $_SESSION['password'] = $user['password_0012'];
            $_SESSION['usertype'] = $user['user_type_0012'];
            $_SESSION['fullname'] = $user['fullname_0012'];

            echo "<script>alert('Login Success !');window.location.replace('../index.php')</script>";
        } else {
            echo "<script>alert('Login Failed, Wrong Password !');window.location.replace('form_login_0012.php')</script>";
        }
    } else {
        echo "<script>alert('Login Failed, User not found !');window.location.replace('form_login_0012.php')</script>";
    }
}
