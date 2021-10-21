<?php
    $patientid = $_POST['patientid'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $blood_type = $_POST['blood_type'];
    $created_on = $_POST['created_on'];
    $modified_on = $_POST['modified_on'];

    include './CSE_K61_KTGK_1951061070/config.php';

    $sql = "INSERT INTO patient 
    VALUES ('$patientid','$lastname','$firstname','$dateofbirth','$gender', '$mobile', '$height', '$weight', '$blood_type', '$created_on', '$modified_on')";

    echo $sql;
    $result = mysqli_query($conn,$sql);

    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }

    mysqli_close($conn);
?>