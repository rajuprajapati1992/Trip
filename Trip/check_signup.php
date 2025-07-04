<?php
include 'db.php';

if (isset($_POST['signup_submit'])) {

    // Sanitize & collect data
    $user_phone = $_POST['phone'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_gender = $_POST['gender'];
    // $user_img = $_POST['image']; // If you're uploading, use $_FILES instead
    $user_email = $_POST['email'];
    $user_address = $_POST['address'];
    $create_pass = password_hash($_POST['password'], PASSWORD_DEFAULT); //  Secure password

    $user_name = $first_name . " " . $last_name;

    // Check if user already exists
    $check_query = "SELECT * FROM user WHERE email = ?";
    $stmt = $con->prepare($check_query);
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        echo "<script>window.location.href = 'exersize/exist.php'</script>";
    } else {
        // Insert into DB
        $insert_query = "INSERT INTO `user` (`phone`, `name`, `gender`, `email`, `password`, `address`) 
                         VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($insert_query);
        $stmt->bind_param("ssssss", $user_phone, $user_name, $user_gender, $user_email, $create_pass, $user_address);

        if ($stmt->execute()) {
            // echo "Signup successful!";
            // header("Location: login.php");
            // exit();

            echo "<script>
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    // Clean up
    $stmt->close();
    $con->close();
}
?>
