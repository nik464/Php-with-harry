<?php
$insert = false;
if (isset($_POST['name'])) {
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trip";

    //create connection
    $con = mysqli_connect($server, $username, $password, $dbname);

    //check for connection
    if (!$con)
        die("connection failed due to " . mysqli_connect_error());
 
    //collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `trip` ( `Name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone','$desc',current_timestamp() )";

    // echo $sql;
    
    // execute quey
    if ($con->query($sql) == TRUE) {
        // echo("Successfully inserted");
        $insert = true;
    } else {
        echo "error:$sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input,
        textarea {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <img class="bg" src="image2.jpg" alt="IIT kharagpur">
    <div class="container">
        <h1>Welcome to IIT kharagpur</h1>
        <p>Enter your details and submit form for the trip </p>
        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining for US trip</p>";
        }

        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="name" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone">
            <textarea name="desc" id="desc" columns="30" rows="10" placeholder="enter your information here"></textarea>

            <button class="btn">Submit</button>


        </form>
    </div>
    <script src="index.js"></script>

</body>

</html>