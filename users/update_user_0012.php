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

    $query = "UPDATE `users_0012` SET 
        username_0012 = '$_POST[username_0012]',
        user_type_0012 = '$_POST[user_type_0012]',
        fullname_0012 = '$_POST[fullname_0012]'
        WHERE user_id_0012 = '$_POST[user_id_0012]'";

    $update = mysqli_query($db_con, $query);

    if ($update) {
        echo "<script>alert('User Updated Successfully !')</script>";
    } else {
        echo "<script>alert('User Update Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_user_0012.php")
</script>