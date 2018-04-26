<?php
	include('../../config.php');

	$id =$_GET['id'];
	$ten = $_POST['namecate'];
	$thutu = $_POST['thutu'];
	$parent_id = $_POST['parent_id'];
	if(isset($_POST['addcate'])){
		$sql = "insert into catefs (name_catefs,thutu) values('$ten','$thutu')  ";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}if(isset($_POST['addsubcate'])){
		$sql = "insert into catefs (name_catefs,thutu,parent_id) values('$ten','$thutu','$parent_id')  ";
		mysql_query($sql);
		header('location:../../index.php?xem=addcate' );
	}elseif(isset($_POST['editcate'])){
		$sql ="update catefs set name_catefs ='$ten',thutu = '$thutu' where id_catefs ='$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		$sql ="delete from catefs where id_catefs = '$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>