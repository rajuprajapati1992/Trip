<?php
include 'db.php';

if (isset($_POST['signup_submit'])) {

    $user_phone = $_POST['phone'];
    $first_name = $_POST['name'];
    $user_name = $_POST['user'];
    $user_gender = $_POST['gender'];
     $user_img = $_POST['img'];
    $user_email = $_POST['email'];
    $create_pass = $_POST['password'];
    // $reenter_pass = $_POST['reenter_pass'];

    // echo "<script>
    //     console.log({$user_phone});
    //     console.log({$user_pass});
    //      console.loge({})
    // </script>";

    $stmt = $con->prepare("SELECT pass, role FROM login WHERE mobile = ?");
    $stmt->bind_param("i", $user_phone);
    $stmt->execute();

    $row = $stmt->get_result()->fetch_assoc();

    $real_pass = $row['pass'];

    if ($create_pass == $re_pass) {
        echo "<script>
           console.log('pass create successfully');
    </script>";

        header("Location: http://localhost/practice/Trip/login.php");
    } else {
        echo "<script>
           console.log('not create successfully');
    </script>";
    }
}
