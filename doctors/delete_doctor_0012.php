<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

if (isset($_GET['id'])) {
    include '../koneksi.php';

    $query = "DELETE FROM doctors_0012 WHERE doctor_id_0012 = '$_GET[id]'";

    $update = mysqli_query($db_con, $query);

    if ($update) {
        echo "<script>alert('Doctor Deleted Successfully !')</script>";
    } else {
        echo "<script>alert('Doctor Delete Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_doctor_0012.php")
</script>