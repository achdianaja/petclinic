<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

if (isset($_POST['save'])) {
    include '../koneksi.php';

    $query = "INSERT INTO `pets_0012` (pet_name_0012, pet_type_0012, pet_gender_0012, pet_age_0012, pet_owner_0012, pet_address_0012, pet_phone_0012) 
                  VALUES ('$_POST[pet_name_0012]', '$_POST[pet_type_0012]', '$_POST[pet_gender_0012]', '$_POST[pet_age_0012]', '$_POST[pet_owner_0012]', '$_POST[pet_address_0012]', '$_POST[pet_phone_0012]') ";

    $create = mysqli_query($db_con, $query);

    if ($create) {
        echo "<script>alert('Pet Added Successfully !')</script>";
    } else {
        echo "<script>alert('Pet Add Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_pet_0012.php")
</script>