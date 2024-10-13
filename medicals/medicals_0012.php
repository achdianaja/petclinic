<?php
include '../koneksi.php';

$query = "SELECT * FROM pets_0012 WHERE pet_id_0012='$_GET[pet_id]'";

$pet = mysqli_query($db_con, $query);

$data1 = mysqli_fetch_assoc($pet);

// $querymed = "SELECT * FROM medicals_0012 WHERE pet_id_0012='$_GET[pet_id]'";

$querymed = "SELECT * FROM medicals_0012 AS m, doctors_0012 AS d WHERE pet_id_0012='$_GET[pet_id]' AND m.doctor_id_0012 = d.doctor_id_0012";
$medicals = mysqli_query($db_con, $querymed);
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
    <h3>Medical Records</h3>

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

    <p><a href="add_medical_0012.php?pet_id=<?php echo $data1['pet_id_0012'] ?>">Add New Record</a></p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Symptom</th>
            <th>Diagnose</th>
            <th>Treatment</th>
            <th>Cont ($)</th>
        </tr>

        <?php
        if (mysqli_num_rows($medicals) > 0) {
            $i = 1;
            foreach ($medicals as $data2):
        ?>
                <tr>
                    <td><?= $i++?></td>
                    <td><?php echo date('d-F-Y H:i:s', strtotime($data2['mr_date_0012'])) ?></td>
                    <td><?php echo $data2['doctor_name_0012'] ?></td>
                    <td><?php echo $data2['symptom_0012'] ?></td>
                    <td><?php echo $data2['diagnose_0012'] ?></td>
                    <td><?php echo $data2['treatment_0012'] ?></td>
                    <td><?php echo number_format($data2['cost_0012'], 0, ',', '.'); ?></td>
                </tr>
            <?php
            endforeach;
        } else {
            ?>
            <tr>
                <td colspan="7" align="center">Not Found!</td>
            </tr>
        <?php } ?>
    </table>

    <p><a href="../pets/read_pet_0012.php">Back to Pets List</a></p>
</body>

</html>