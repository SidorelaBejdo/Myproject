<?php
session_start();
    if(isset($_POST['btn'])){
        include "lidhja.php";

        $emri = $_POST['emri'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO kontakt (emri,email, mesazhi) 
        VALUES ('$emri','$email','$message') ";
        mysqli_query($lidhja,$query);
        header("location:kontaktsuccess.php");
    }

 ?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Shiko listen</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'?>;
         <div class="container mt-5">
        <h1 style="color: green">Faleminderit qe na kontaktuat!</h1>
        <h3>Do ju kthejm pergjigje se shpejti!</h3>
     </div>
    </div>

            <?php
                  include 'footer.php';
                ?>
    </body>
</html>