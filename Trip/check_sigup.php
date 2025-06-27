<?php
include 'db.php';

if(isset($_POST['signup_submit'])){

    $user_phone = $_POST['phone'];
    $user_email = $_POST['email'];
    $create_pass = $_POST['create_pass'];
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

    // $real_pass = $row['pass'];

    // if($user_pass == $real_pass){
    //        echo "<script>
    //        console.log('correct pass');
    // </script>";

    // }else{
    //     echo "<script>
    //        console.log('Wrong pass');
    // </script>";
    // }

}


?>