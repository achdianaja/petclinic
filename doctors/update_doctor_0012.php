<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

if (isset($_POST['save'])) {
    include '../koneksi.php';

    $query = "UPDATE `doctors_0012` SET 
        doctor_name_0012 = '$_POST[doctor_name_0012]',
        doctor_gender_0012 = '$_POST[doctor_gender_0012]',
        doctor_address_0012 = '$_POST[doctor_address_0012]',
        doctor_phone_0012 = '$_POST[doctor_phone_0012]'
        WHERE doctor_id_0012 = '$_POST[doctor_id_0012]'";

    $update = mysqli_query($db_con, $query);

    if ($update) {
        echo "<script>alert('doctor Updated Successfully !')</script>";
    } else {
        echo "<script>alert('doctor Update Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_doctor_0012.php")
</script>