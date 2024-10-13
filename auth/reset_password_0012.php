<?php 
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_0012.php')</script>";
}
if(isset($_GET['id'])){
    include '../koneksi.php';

    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query = "UPDATE users_0012 SET password_0012='$password' WHERE user_id_0012='$_GET[id]';";
    $update = mysqli_query($db_con, $query);
    if($update){
        echo "<script>alert('Reset Passowrd Successfully !')</script>";
    } else {
        echo "<script>alert('Reset Password Failed !')</script>";
    }
}
?>
<script>window.location.replace("read_user_0012.php")</script>
