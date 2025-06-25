<?php
include 'db.php';
$insert = false;
$bad = false;
if(isset($_POST['name'])){
    //set connections variabales


// collect post variabales
$name =$_POST['name'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$email =$_POST['email'];
$desc =$_POST['desc'];
$phone =$_POST['phone'];

$sql = $con->prepare(" INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `others`, `dt`, `phone`) 
        VALUES (?, ?, ?, ?, ?, current_timestamp(), ?)");

$sql->bind_param("sisssi", $name, $age, $gender, $email, $desc, $phone);
    // echo $sql;
// Execute the query
    if($sql->execute()){

        // echo "Successfully inserted";
        // Flag for succesfull insertion
        $insert = true;
    }
    else{

       $bad = true;
    }

    // Close the database connection
    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Traval Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="hero">
        <h1 class="heading"><i>Welcome To TVS Luckhnow Staff Mahakaleshwar Trip Form</i></h1>
        <p>Enter your Details and submit this form to conform your participation in the trip</p>
        <?php
        if($insert == true){
            echo "<p class='submitMsg'>Thank you for submiting you form. We are happy to see you joining us for the Mahakaleshwar
            trip... </p>";
        }        
        if($bad == true){
            echo "<p class='submitMsg'> There  was and error. </p>";
        }        
        ?>
        <div class="container">
            <div class="img-cont">
                <img class="bg" src="mahakalji1.jpg" alt="tvs solution">
            </div>

            <div class="form-div">
                <h1 style="font-size:35px"> Fill This Form for the Trip. </h1>
                <form action="index1.php" method="post">
                    <label for="name">Name: </label>
                    <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name"><br>

                    <label for="age">Age: </label>
                    <input class="form-input" type="text" name="age" id="age" placeholder="Enter your age"><br>

                    <label for="gender">Gender: </label>
                    <!-- <input type="text" name="gender" id="gender" placeholder="Enter your gender"> -->
                    <select class="form-input" name="gender" id="gender">
                        <option value=""> Choose Gender </option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Others</option>
                    </select><br>

                    
                    
                    <label for="email">Email: </label>
                    <input class="form-input" type="text" name="email" id="email" placeholder="Enter your email"><br>

                    <label for="phone">Phone:</label>
                    <input class="form-input" type="phone" name="phone" id="phone" placeholder="Enter your phone"><br>

                    <label for="remark">Remark: </label>
                    
                    <input class="form-input" type="text" name="desc" id="desc" placeholder="Enter your remark"><br>
                    <button class="btn">Submit</button>



                </form>
            </div>
        </div>
        

    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`snn`, `name`, `age`, `gender`, `email`, `others`, `dt`, `phone`) VALUES ('1', 'raju', '32',
    'male', 'hello@tis.com', 'this is a mahakaleshwar trip form', current_timestamp(), '88888888888'); -->


</body>

</html>