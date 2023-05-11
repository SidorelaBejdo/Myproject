<?php
	include("lidhja.php");
	session_start();
	$id = $_GET['id'];
	$q = "delete from udhetimi where id_udhetimi = $id ";
	mysqli_query($lidhja,$q);
    header("location:dashbord.php");
	
?>