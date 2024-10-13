<?php 
    if(isset($_POST['save'])){
        include '../koneksi.php';
    
        $query = "INSERT INTO `medicals_0012` SET 
        pet_id_0012 = '$_POST[pet_id_0012]',
        doctor_id_0012 = '$_POST[doctor_id_0012]',
        symptom_0012 = '$_POST[symptom_0012]',
        diagnose_012 = '$_POST[diagnose_012]',
        treatment_0012 = '$_POST[treatment_0012]',
        cost_0012 = '$_POST[cost_0012]'";
    
        $create = mysqli_query($db_con, $query);

        if($create){
            echo "<script>alert('Medical Updated Successfully !')</script>";
        } else {
            echo "<script>alert('Medical Update Failed !')</script>";
        }
    }
?>

<script>window.location.replace("medical_0012.php?pet_id<?= $_POST['pet_id_0012']; ?>");</script>