<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Access Forbidden !');window.location.replace('../index.php')</script>";
}

if (isset($_POST['save'])) {
    include '../koneksi.php';

    $password = password_hash($_POST['user_type_0012'], PASSWORD_DEFAULT);

    $query = "INSERT INTO `users_0012` (username_0012, password_0012, user_type_0012, fullname_0012) 
                  VALUES ('$_POST[username_0012]', '$password', '$_POST[user_type_0012]', '$_POST[fullname_0012]') ";

    $create = mysqli_query($db_con, $query);

    if ($create) {
        echo "<script>alert('User Added Successfully !')</script>";
    } else {
        echo "<script>alert('User Add Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_user_0012.php")
</script>