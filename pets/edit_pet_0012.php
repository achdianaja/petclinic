<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

include '../koneksi.php';

$query = "SELECT * FROM pets_0012 WHERE pet_id_0012='$_GET[id]'";

$pet = mysqli_query($db_con, $query);

$data = mysqli_fetch_assoc($pet);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet CLinic Hadi</title>
</head>

<body>
    <h1>Pet Clinic Hadi</h1>
    <hr>
    <h3>Form Edit Pet</h3>

    <form action="update_pet_0012.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <input type="hidden" name="pet_id_0012" value="<?= $data['pet_id_0012'] ?>">
                <td><input type="text" name="pet_name_0012" id="" required value="<?= $data['pet_name_0012'] ?>"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_0012" id="" required>
                        <option value="Cat" <?php echo ($data['pet_type_0012'] == 'Cat') ? 'selected' : ''  ?>>Cat</option>
                        <option value="Dog" <?php echo ($data['pet_type_0012'] == 'Dog') ? 'selected' : ''  ?>>Dog</option>
                        <option value="Bird" <?php echo ($data['pet_type_0012'] == 'Bird') ? 'selected' : ''  ?>>Bird</option>
                        <option value="Kontol" <?php echo ($data['pet_type_0012'] == 'Kontol') ? 'selected' : ''  ?>>Kontol</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_0012" value="Male" required <?php echo ($data['pet_gender_0012'] == 'Male') ? 'checked' : ''  ?>> Male
                    <input type="radio" name="pet_gender_0012" value="Female" required <?php echo ($data['pet_gender_0012'] == 'Female') ? 'checked' : ''  ?>> Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="pet_age_0012" id="" required value="<?= $data['pet_age_0012'] ?>"></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="pet_owner_0012" id="" required value="<?= $data['pet_owner_0012'] ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="pet_address_0012" id="" required><?= $data['pet_address_0012'] ?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="pet_phone_0012" id="" required value="<?= $data['pet_phone_0012'] ?>"></td>
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
    <p><a href="read_pet_0012.php">CANCEL</a></p>
</body>

</html>