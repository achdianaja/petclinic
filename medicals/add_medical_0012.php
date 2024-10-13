<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

include '../koneksi.php';

$query = "SELECT * FROM pets_0012 WHERE pet_id_0012='$_GET[pet_id]'";

$pet = mysqli_query($db_con, $query);

$data1 = mysqli_fetch_assoc($pet);

$querymed = "SELECT * FROM medicals_0012 WHERE pet_id_0012='$_GET[pet_id]'";
$medicals = mysqli_query($db_con, $querymed);

$querydoc = "SELECT * FROM doctors_0012";
$doctors = mysqli_query($db_con, $querydoc);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Hadi</title>
</head>

<body>
    <h1>Pet Clinic Hadi</h1>
    <hr>
    <h3>Form Add Medical</h3>

    <table>
        <tr>
            <td>PetId/Name</td>
            <td>:</td>
            <td><?= $data1['pet_id_0012'] ?> / <?= $data1['pet_name_0012'] ?></td>
        </tr>
        <tr>
            <td>PetType/Gender/Age</td>
            <td>:</td>
            <td><?= $data1['pet_type_0012'] ?> / <?= $data1['pet_gender_0012'] ?> / <?= $data1['pet_age_0012'] ?> month(s)</td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>:</td>
            <td><?= $data1['pet_owner_0012'] ?> / <?= $data1['pet_address_0012'] ?> / <?= $data1['pet_phone_0012'] ?></td>
        </tr>
    </table>
    <hr>

    <form action="create_medical_0012.php">
        <table>
            <tr>
                <td>Doctor</td>
                <td>
                    <select name="doctor_id_0012" id="">
                        <option value="" disabled selected>Choose</option>
                        <?php foreach ($doctors as $doc): ?>
                            <option value="<?= $doc['doctor_id_0012'] ?>"><?= $doc['doctor_name_0012'] ?></option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Sympton</td>
                <td><textarea name="symptom_0012" id=""></textarea></td>
            </tr>
            <tr>
                <td>Diagnose</td>
                <td><textarea name="diagnose_0012" id=""></textarea></td>
            </tr>
            <tr>
                <td>Treatment</td>
                <td><textarea name="treatment_0012" id=""></textarea></td>
            </tr>
            <tr>
                <td>Cost ($)</td>
                <td><input type="number" name="cost_0012"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="save" required>
                    <input type="reset" value="Reset" required>
                    <input type="hidden" name="pet_id_0012" value="<?= $data1['pet_id_0012'] ?>">
                </td>
            </tr>
        </table>

        <br>
        <a href="medicals_0012.php?pet_id=<?= $data1['pet_id_0012'] ?>">CANCEL</a>
    </form>
</body>

</html>