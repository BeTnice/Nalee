<?php
	include('../../config.php');

	$id =$_GET['id'];
	$title = $_POST['title'];
	$link = $_POST['link'];
	$thutu = $_POST['thutu'];

	if(isset($_POST['addvideo'])){
		$sql = "insert into video (title,link,thutu) 
		values('$title','$link','$thutu')";
		mysql_query($sql);
		header('location:../../index.php?xem=addvideo' );
	}elseif(isset($_POST['editvideo'])){
		$sql ="update video set title='$title',link='$link',thutu='$thutu' where id_video ='$id'";
		mysql_query($sql);
		header('location:../../index.php?xem=editvideo&id='.$id );
	}else{
		$sql ="delete from video where id_video = '$id'";
		mysql_query($sql);
		header('location:../../index.php?xem=addvideo');
	}


	
?>