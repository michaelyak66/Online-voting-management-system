<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['redirect'])){

	header('location: signup.php');
    }

?>