<?php

if(!isset($_POST["username"]) || !isset($_POST["password"])){
	exit;
}
//ovdje će doći spajanje na bazu
if($_POST["username"]==="edunova" && $_POST["password"]==="edunova"){
	session_start();
	$_SESSION["authorized"]="Edunova Zaposlenik";
	header("location: private/dashboard.php");
}else{
	header("location: login.php?failure&username=" . $_POST["username"]);
}
