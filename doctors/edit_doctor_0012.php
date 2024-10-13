<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

include '../koneksi.php';

$query = "SELECT * FROM doctors_0012 WHERE doctor_id_0012='$_GET[id]'";

$doctor = mysqli_query($db_con, $query);

$data = mysqli_fetch_assoc($doctor);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets CLinic Hadi</title>
</head>

<body>
    <h1>Pet Clinic Hadi</h1>
    <hr>
    <h3>Form Edit doctor</h3>

    <form action="update_doctor_0012.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <input type="hidden" name="doctor_id_0012" value="<?= $data['doctor_id_0012'] ?>">
                <td><input type="text" name="doctor_name_0012" id="" required value="<?= $data['doctor_name_0012'] ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_0012" value="Male" required <?php echo ($data['doctor_gender_0012'] == 'Male') ? 'checked' : ''  ?>> Male
                    <input type="radio" name="doctor_gender_0012" value="Female" required <?php echo ($data['doctor_gender_0012'] == 'Female') ? 'checked' : ''  ?>> Female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="doctor_address_0012" id="" required><?= $data['doctor_address_0012'] ?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="doctor_phone_0012" id="" required value="<?= $data['doctor_phone_0012'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="save" required>
                    <input type="reset" value="Reset" required>
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_doctor_0012.php">CANCEL</a></p>
</body>

</html>