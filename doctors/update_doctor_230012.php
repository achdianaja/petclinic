<?php
// session_start();
// if (!isset($_SESSION['login'])) {
//     echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
// }

if (isset($_POST['save'])) {
    include '../koneksi.php';

    $query = "UPDATE `doctors_230012` SET 
        doctor_name_230012 = '$_POST[doctor_name_230012]',
        doctor_gender_230012 = '$_POST[doctor_gender_230012]',
        doctor_address_230012 = '$_POST[doctor_address_230012]',
        doctor_phone_230012 = '$_POST[doctor_phone_230012]'
        WHERE doctor_id_230012 = '$_POST[doctor_id_230012]'";

    $update = mysqli_query($db_con, $query);

    if ($update) {
        echo "<script>alert('doctor Updated Successfully !')</script>";
    } else {
        echo "<script>alert('doctor Update Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_doctor_230012.php")
</script>