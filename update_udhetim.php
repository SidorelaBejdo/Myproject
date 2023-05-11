<?php
session_start();
    include("lidhja.php");
    
    if(isset($_POST['btn']))
    {
        $qyeti= $_POST['qyteti'];
        $orari= $_POST['orari'];
        $vendi =  $_POST['vendi'];
        $cmimi= $_POST['cmimi'];
        $perfshirja = $_POST['perfshirja'];
        $pershkrimi = $_POST['pershkrimi'];

        $id = $_GET['id'];
        $q= "update udhetimi set qyteti='$qyeti',orari='$orari',vendi='$vendi',cmimi='$cmimi',perfshirja=' $perfshirja',pershkrimiDITA1='$pershkrimiDITA1'
        where id_udhetimi='$id'";
        $query=mysqli_query($lidhja,$q);
        header('location:dashbord.php');
    } 
	else if(isset($_GET['id'])) 
	{
        $q = "SELECT * FROM udhetimi WHERE id_udhetimi='".$_GET['id']."'";
        $query=mysqli_query($lidhja,$q);
        $res= mysqli_fetch_array($query);
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ndrysho udhetim</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php include 'menuAdmin.php'?>;
        <div class="container mt-5">
            <h1>Ndrysho Udhetim</h1>
            
            <form  method="POST" >
                <div class="form-group">
                    <label>Qyteti</label>
                    <input type="text" class="form-control" placeholder="qyteti" name="qyteti" value="<?php echo $res['qyteti']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Orari i nisjes</label>
                    <input type="text" class="form-control" placeholder="orarii nisjes " name="orari" value="<?php echo $res['orari']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Vendi i nisjes</label>
                    <input type="text" class="form-control" placeholder="Vendi i nisjes" name="vendi" value="<?php echo $res['vendi']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Cmimi</label>
                    <input type="text" class="form-control" placeholder="cmimi" name="cmimi" value="<?php echo $res['cmimi']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Perfshihen ne cmim:</label>
                    <input type="text" class="form-control" placeholder="Perfshihen ne cmim:" name="perfshirja" value="<?php echo $res['perfshirja']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Pershkrimi i Udhetimit:</label>
                    <input type="text" class="form-control" placeholder="Pershkrimi i Udhetimit:"  name="pershkrimiDITA1"
                    value="<?php echo $res['pershkrimiDITA1']; ?>"/>
                </div> 
                <div class="form-group">
                    <input type="submit" value="Ndrysho" name="btn" class="btn btn-secondary">
                </div>
            </form>
        </div>
    </body> 
</html>
