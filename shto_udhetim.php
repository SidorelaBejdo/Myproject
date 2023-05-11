<?php
        include("lidhja.php");
         session_start();

         if(ISSET($_POST['ruaj']))
         {
            $qyteti= $_POST['qyteti'];
            $orari=  $_POST['orari'];
            $vendi = $_POST['vendi'];
            $cmimi=  $_POST['cmimi'];
            $perfshirja= $_POST['perfshirja'];
            $pershkrimiDITA1 = $_POST['pershkrimiDITA1'];
            $pershkrimiDITA2 = $_POST['pershkrimiDITA2'];
            $foto1 = $_FILES['foto1']["name"];
            $tempfoto1 = $_FILES["foto1"]["tmp_name"];
            $images1 = "images/".$foto1;
            $foto2 = $_FILES['foto2']["name"];
            $tempfoto2 = $_FILES["foto2"]["tmp_name"];
            $images2 = "images/".$foto2;
            $foto3 = $_FILES['foto3']["name"];
            $tempfoto3 = $_FILES["foto3"]["tmp_name"];
            $images3= "images/".$foto3;
            
        
            $ngarkimi="INSERT INTO udhetimi(qyteti,orari,vendi,cmimi,perfshirja,pershkrimiDITA1,foto1,foto2,foto3,pershkrimiDITA2) 
            VALUES('$qyteti','$orari','$vendi','$cmimi','$perfshirja','$pershkrimiDITA1','$foto1','$foto2','$foto3','$pershkrimiDITA2')";
            move_uploaded_file($tempfoto1,$images1);
            move_uploaded_file($tempfoto2,$images2);
            move_uploaded_file($tempfoto3,$images3);

               mysqli_query($lidhja,$ngarkimi) or die(mysqli_error($lidhja));
               header('location:dashbord.php');
            }
         ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Shto Udhetim</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php include 'menuAdmin.php'?>;

        <div class="container mt-5">
            <h1>Shto Udhetim</h1>
            <form action="shto_udhetim.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Qyteti</label>
                    <input type="text" class="form-control" placeholder="qyteti" name="qyteti"/>
                </div>
                <div class="form-group">
                    <label>Orari i nisjes</label>
                    <input type="date" class="form-control" placeholder="orarii nisjes " name="orari"/>
                </div>
                <div class="form-group">
                    <label>Vendi i nisjes</label>
                    <input type="text" class="form-control" placeholder="Vendi i nisjes" name="vendi"/>
                </div>
                <div class="form-group">
                    <label>Cmimi</label>
                    <input type="number" class="form-control" placeholder="cmimi" name="cmimi"/>
                </div>
                <div class="form-group">
                    <label>Perfshihen ne cmim:</label>
                    <input type="text" class="form-control" placeholder="Perfshihen ne cmim:" name="perfshirja"/>
                </div>
                <div class="form-group">
                    <label>Pershkrimi i Udhetimit/Dita e pare:</label>
                    <input type="text" class="form-control" placeholder="Pershkrimi i Udhetimit:"  name="pershkrimiDITA1"/>
                </div>
                <div class="form-group">
                    <label>Pershkrimi i Udhetimit/Dita e Dyte:</label>
                    <input type="text" class="form-control" placeholder="Pershkrimi i Udhetimit:"  name="pershkrimiDITA2"/>
                </div>
                <div class="form-group">
                    <label>Ngarko foto1</label>
                    <input type="file" class="form-control" placeholder="ngarko imazh"  name="foto1"/>
                </div>
                <div class="form-group">
                    <label>Ngarko foto2</label>
                    <input type="file" class="form-control" placeholder="ngarko imazh"  name="foto2"/>
                </div>
                <div class="form-group">
                    <label>Ngarko foto3</label>
                    <input type="file" class="form-control" placeholder="ngarko imazh"  name="foto3"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Publiko" class="btn btn-secondary" name="ruaj">
                </div>
               
            </form>
           </div>
		   
          <?php include "footer.php"; ?>
    </body> 
</html>
