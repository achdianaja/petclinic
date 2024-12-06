<!-- <?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('auth/form_login_230012.php')</script>";
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic iKi</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Welcome to the clinic</h3>

    <ul>
        <li><a href="pets/read_pet_230012.php">Pet List</a></li>
        <li><a href="doctors/read_doctor_230012.php">Doctor List</a></li>
        <li><a href="users/read_user_230012.php">User List</a></li>
        <!-- <?php if ($_SESSION['usertype'] == 'Manager') { ?>
        <?php } ?>
        <hr>
        <p>Welcome <strong><?= $_SESSION['fullname'] ?></strong>, you are logged in as <strong><?= $_SESSION['usertype'] ?></strong></p>
        <li><a href="auth/change_password_230012.php">Change Password</a></li>
        <li><a href="auth/logout_230012.php">Logout</a></li> -->
    </ul>
</body>

</html>