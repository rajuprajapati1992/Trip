<?php
include 'db.php';

if(isset($_POST['form_submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $remark = $_POST['desc'];


    $full_name = $first_name . " " . $last_name;
    $sql = $con->prepare(" INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `others`, `dt`, `phone`) 
        VALUES (?, ?, ?, ?, ?, current_timestamp(), ?)");

    $sql->bind_param("sisssi", $full_name, $age, $gender, $email, $remark, $phone);

    if($sql->execute()){
        $form_succ = true;
        echo "<script>
            window.location.href = 'index.php';
        </script>";
    }


}

?>