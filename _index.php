<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
     
    // for($i = 1; $i <= 100; $i++){
    //     // if($i % 2 != 0){
    //         echo $i + 2;
    //     // }
    //     echo "<br>";
    // }

function name($num, $total){
echo $num / $total * 100;

}
name(55, 200);

echo "<br>";

// for($a = 1; $a <= 10; $a++){

//     echo $a . ") Hello Raju Prajapati<br>";
// }

for($a = 1; $a <= 100; $a += 10){
    for($b = $a ; $b < $a + 10; $b++){
        echo $b . ", ";
    }
    echo "<br>";
}
                
?>
</body>
</html>