<?php
include 'db.php';

if (isset($_POST['login_submit'])) {

    $user_email = $_POST['email'];
    $user_pass = $_POST['user_pass'];

    $stmt = $con->prepare("SELECT password FROM user WHERE email = ?");
    $stmt->bind_param("s", $user_email);
    $stmt->execute();

    $row = $stmt->get_result()->fetch_assoc();

    // $real_pass = $row['password'];
    

    if (password_verify($user_pass, $row['password'])) {
        echo "<script>
           window.location.href = 'index.php';
    </script>";
        
    } else {
        echo "<script>
           window.location.href = 'login.php';
    </script>";
    }
}
?>
