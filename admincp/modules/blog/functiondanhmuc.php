<?php
	include('../../config.php');

	$id =$_GET['id'];
	$ten = $_POST['namecate'];
	$thutu = $_POST['thutu'];

	if(isset($_POST['addcate'])){
		$sql = "insert into cateblog (name_cateblog,thutu) values('$ten','$thutu')  ";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		$sql ="delete from cateblog where id_cateblog = '$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>