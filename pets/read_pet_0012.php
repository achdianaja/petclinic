<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}

include '../koneksi.php';
$i = 1;
$data = mysqli_query($db_con, "SELECT * FROM pets_0012")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet clinic Hadi </title>
</head>

<body>
    <h1>Pet Clinic Hadi</h1>
    <hr>
    <h3>Pet List</h3>

    <p><a href="add_pet_0012.php">Add New Pet</a></p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age (month) </th>
            <th>Owner</th>
            <th>Address</th>
            <th>Phone</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><a href="../medicals/medicals_0012.php?pet_id=<?php echo $item['pet_id_0012'] ?>"><?php echo $item['pet_name_0012'] ?></a></td>
                <td><?php echo $item['pet_type_0012'] ?></td>
                <td><?php echo $item['pet_gender_0012'] ?></td>
                <td><?php echo $item['pet_age_0012'] ?></td>
                <td><?= $item['pet_owner_0012'] ?></td>
                <td><?= $item['pet_address_0012'] ?></td>
                <td><?= $item['pet_phone_0012'] ?></td>
                <td>
                    <a href="edit_pet_0012.php?id=<?= $item['pet_id_0012'] ?>">Edit Pet</a>
                </td>
                <td>
                    <a href="delete_pet_0012.php?id=<?= $item['pet_id_0012'] ?>" onclick="return confirm('Are you sure Delete this Pet?')">Delete Pet</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <p><a href="../index.php">BACK TO HOME</a></p>
</body>

</html>