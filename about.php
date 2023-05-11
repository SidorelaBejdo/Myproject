<?php
    include("lidhja.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    </style>
</head>

<body>
<?php
include "header.php";
?>
 
<div class="container">

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
    <img src="about2.png"  class="d-block"style="width:100%" >
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
  

<div id="pershkrim" class="row  mt-5" >
    <div class="col-lg-5 ">
       <img src="tur.png" >
    </div>
    <div class="col-lg-6 ">
        <h3><b><i>Explor Travel Agency</i></b></h3>
      <p>Explor Travel Agency eshte nje agjensi e mirenjohur e cila 
      operon prej vitesh ne kryeqytetin e Shqiperise.Kompania jonë
       ju mundëson të vizitoni çdo bukuri të Shqipërisë  si: zonat 
       arkeologjike, kalatë, alpet, bregdetin dhe shumë të tjera.
       Turet që organizojmë do tju shëtisin në  shumë atraksione 
       turistike pergjate Shqiperis,duke iu mundesuar udhetim te  
       qete, komod dhe te sigurte.<br>
       Ne jemi nje agjensi qe vazhdimisht po rritet falë preferences
       se klienteve tane qe tregojne besim ne pervojen tone shumevjeçare
       dhe na motivojne qe te behemi me mire çdo dite, duke degjuar
       nevojat e tyre.<br> Ne e duam ate qe bejme dhe jemi mirenjohes
       te gjithe klientet tane.
      </p>
    </div>
</div>
</div>
<?php
   include "footer.php";
   ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>