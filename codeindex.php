<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Traval Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <img class="bg" src="bg3.jpg" alt="tvs solution">
    <div class="container">
        <h1>Welcome To TVS Luckhnow Staff Mahakaleshwar Trip Form</h1>
        <p>Enter your Details and submit this form to conform your participation in the trip</p>
        <p class="submitMsg">Thank you for submiting you form. We are happy to see you joining us for the Mahakaleshwar
            trip </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information is here"></textarea>
            <button class="btn">Submit</button>



        </form>

    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`snn`, `name`, `age`, `gender`, `email`, `others`, `dt`, `phone`) VALUES ('1', 'raju', '32',
    'male', 'hello@tis.com', 'this is a mahakaleshwar trip form', current_timestamp(), '88888888888'); -->


    <?php
    //  goto 
    // echo "Hello Raju Prajapati<br>";
    // echo "Hello Raju Prajapati<br>";
    // echo "Hello Raju Prajapati<br>";
    // goto abc;
    // echo "Hello Raju Prajapati<br>";
    // echo "Hello Raju Prajapati<br>";
    // echo "Hello Raju Prajapati<br>";

    // abc:

    // echo "Hello Raju Prajapati this is label for abc";
    //function

    // function hello(){
    //     echo "Hellos Everybody.<br>";
    // }

    // function yahoo(){
    //     echo "Hello Everyone.<br>";
    // }

    // hello();
    // hello();
    // yahoo();
     
    // echo "Hey This is an example.";
    // hello();
    // hello();
    // function parameter
    //  function hello($fname,$lname){
    //     echo "Hello $fname $lname.<br>";

    //  }

    //  function sum($a,$b){
    //     echo $a + $b;
    //  }

    //  $one = 10;
    //  $two = 30.55;

    //  sum($one,$two);
    // hello("Yahoo"," baba");

    // hello("Raju"," Prajapati");

    // function nwith return

    function sum($math, $eng, $sc){

        $s = $math + $eng + $sc;

        return $s;
    } 
    function percentage($st){
        $per = $st / 3;

        echo $per . "%";
    }

    $total = sum(98,98,99);

    percentage($total);




    ?>


</body>

</html>