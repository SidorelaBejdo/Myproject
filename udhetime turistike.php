<?php
    include("lidhja.php");
    session_start();
    
      $q= "select * from udhetimi";
      $query=mysqli_query($lidhja,$q);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Shiko listen e udhetimeve</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'?>;
        <div class="container mt-5">
            <!--carusel-->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
       
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="1.png" class="d-block" >
        </div>
        <div class="carousel-item">
          <img src="3.png" class="d-block" >
        </div>
        <div class="carousel-item">
          <img src="2.png" class="d-block" >
        </div>
       
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

              <!-- top -->
            <div class="row  mt-5">
                <div class="col-lg-12">
                    <h1 class="text-center">Udhetime Turistike</h1>
                    
                </div>
            </div>

            <!-- Kartat e produktve -->
            <div class="row mt-4">
                
             <?php
               $rekord = mysqli_num_rows($query);
               if ($rekord==0)
                        {
                           printf("<p class='text-danger'> Nuk ka postime..</p>");
                        }
         
                
                  while ($qq=mysqli_fetch_array($query)) 
                  {
                  
             ?>

                <div class="col-lg-4">
                    <div class="card">
                    <img src="<?php echo 'images/'.$qq['foto1']; ?>" class="card-img-top" >
                        <div class="card-body">
                          <h5 class="card-title"><?php echo substr($qq['qyteti'],0,20); ?>..</h5>
                          <h7 class="card-text text-justify "><?php echo substr($qq['pershkrimiDITA1'],0,100); ?>...</h7>
                          
                          <a href="profil.php?id=<?php echo $qq['id_udhetimi']; ?>" class="card-link  btn btn-secondary">Me teper</a>
    					   
                        </div>

                      </div><br>
                </div>

                <?php
                  }
                ?>
                </div>
            </div>
            <?php
                  include 'footer.php';
                ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
