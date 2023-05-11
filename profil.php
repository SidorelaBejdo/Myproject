<?php
    include("lidhja.php");
    session_start();
    $id = $_GET['id'];
      $q= "select * from udhetimi where id_udhetimi=$id";
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
        <?php include 'header.php';
     
        
               $rekord = mysqli_num_rows($query);
               if ($rekord==0)
                        {
                           printf("<p class='text-danger'> Nuk ka artikuj..</p>");
                        }
                  while ($qq=mysqli_fetch_array($query)) 
                  { 
             ?>
        <div class="container mt-5">
            <!-- top -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center"><?php echo $qq['qyteti']; ?></h1> 
                </div>
            </div>
                <br>
                <hr >
                <br>
                <div class="row div ms-lg-5 ps-lg-5">
                   <img class="div col-lg-3 ms-lg-5 " src="<?php echo 'images/'.$qq['foto1']; ?>">
                   <img class="div col-lg-3 ms-lg-5 " src="<?php echo 'images/'.$qq['foto2']; ?>">
                   <img class="div col-lg-3 ms-lg-5 " src="<?php echo 'images/'.$qq['foto3']; ?>">
               </div>
                <br>
                <hr><br>
                <div id="pershkrimi-udhetimit">
                <h3><b>Përshkrimi i shërbimit</b></h3><br>
                <h4><b>Dita e Pare:</b></h4><br>
                <p><?php echo $qq['pershkrimiDITA1']; ?></p>
                <h4><b>Dita e Dyte:</b></h4><br>
                <p><?php echo $qq['pershkrimiDITA2']; ?></p>

                <br><h3><b>Detajet e udhëtimit</b></h3><br>
                <b>Nga ku nisemi:</b><br>
                <p><?php echo $qq['vendi']; ?></p><br>
                <b>Orari i nisjes:</b><br>
                <p><?php echo $qq['orari']; ?></p><br>
                <b>Cmimi:</b><br>
                <p><?php echo $qq['cmimi']; ?></p><br>
                <b>Perfshihen ne cmim:</b><br>
                <p><?php echo $qq['perfshirja']; ?></p><br><br>
        </div>
    </div>
        <?php
                  }
                include 'footer.php';
            ?>
            
    </body>
</html>