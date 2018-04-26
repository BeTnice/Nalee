<?php
	include('../../config.php');

	$id =$_GET['id'];
	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];
	$link = $_POST['link'];
	$thutu = $_POST['thutu'];
	$hinhanh = $_POST['hinhanh'];
	$vitri = $_POST['vitri'];
	if(isset($_POST['addbanner'])){
		$sql = "insert into slide (title,subtitle,link,thutu,img_slide,vitri) 
		values('$title','$subtitle','$link','$thutu','$hinhanh','$vitri')  ";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}elseif(isset($_POST['editbanner'])){
		$sql ="update slide set title='$title',subtitle='$subtitle',link='$link',thutu='$thutu'
		,img_slide = '$hinhanh', vitri ='$vitri' where id_slide ='$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		$sql ="delete from slide where id_slide = '$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>