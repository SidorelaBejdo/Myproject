<?php
include "lidhja.php";
    if(isset($_POST['btn'])){

        $emri = $_POST['emri'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO kontakt (emri,email,mesazhi) 
        VALUES ('$emri','$email','$message') ";
        mysqli_query($lidhja,$query);
        header ("location:kontaktsuccess.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    </style>
  
</head>
<body>
  <?php    include "header.php"; ?>
<div class="container "> 
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="about5.png" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>Udheto me Ne</h3>
      <p>Per nje eksperience te pa harruar!</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="about2.png"  class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>Udheto me Ne</h3>
      <p>Per nje eksperience te pa harruar!</p>
    </div> 
  </div>
</div>
<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div >


  <div class="row  mt-5">
    <div class="main col-lg-6 pt-lg-5">
        <div>
            <h5>Adresa</h5>
            <p>Sheshi Nene-Tereza</p>
        </div>
        <div>
            <h5>Email</h5>
            <p>sidorelabejdo2001@gmail.com</p>
        </div>
        <div>
            <h5>Telefon</h5>
            <p>Nr: +355 68 34 48 593</p>
        </div>
    </div>

    <div class="main col-lg-5" style="width:50%;" >
        <div id="msg" class="alert"> </div>
        <form  method="POST" action="kontakt.php">
            <h1>Dergo nje E-mail</h1><br>
            <div>
            <input type="text" class="form-control" name="emri" placeholder="Your*  Name"  id="emri" required><br>
            <p id="emrierror"></p>
            </div>
            <div>
                <input type="email" class="form-control"  name="email" placeholder=" Your* Email Address" id="email"  required><br>
                <p id="emailerror"></p>
            </div>
            <div>
                <input type="text" class="form-control" name="message" placeholder="Message" id="mssg" required><br>
                <p id="mesazherror"></p>
            </div><br>
            <button id="btn" name="btn" type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>
</div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php
include "footer.php";
?>

</body>
</html>

