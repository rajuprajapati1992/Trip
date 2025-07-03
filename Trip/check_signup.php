<?php
include 'db.php';

if (isset($_POST['signup_submit'])) {

    
    $user_phone = $_POST['phone'];
    $first_name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $user_gender = $_POST['gender'];
    $user_img = $_POST['image']; 
    $user_email = $_POST['email'];
    $create_pass = $_POST['password']; 

   
    $check_query = "SELECT * FROM user WHERE email = '$user_email'";
    $result = mysqli_query($conn, $check_query);
     $sql = $conn->prepare(" INSERT INTO `user` ( `name`, `age`, `gender`, `email`, `address`,  `phone`, `dt`, `img`) 
        VALUES (?, ?, ?, ?, ?, current_timestamp(), ?)");

    $sql->bind_param("sisssis", $name, $age, $gender, $email, $address, $phone, $img);



    if (mysqli_num_rows($result) > 0) {
        echo "User Already Exists";
    } else {
       
        $insert_query = "INSERT INTO user (phone, name, last_name, image, gender, email, password) 
                         VALUES ('$user_phone', '$first_name', '$last_name', '$user_img', '$user_gender', '$user_email', '$create_pass')";

        if (mysqli_query($conn, $insert_query)) {
            echo "Signup successful!";
            header("Location: http://localhost/practice/Trip/login.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
