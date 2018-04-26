<?php
	include('../../config.php');

	$id =$_GET['id'];
	$name = $_POST['name'];
	$job = $_POST['job'];
	$noidung = $_POST['noidung'];
	$hinhanh = $_POST['hinhanh'];
	$thutu = $_POST['thutu'];

	if(isset($_POST['addreviews'])){
		$sql = "insert into reviews (name,job,noidung,hinhanh,thutu) 
		values('$name','$job','$noidung','$hinhanh','$thutu')";
		mysql_query($sql);
		header('location:../../index.php?xem=addreviews' );
	}elseif(isset($_POST['editreviews'])){
		$sql ="update reviews set name='$name',job='$job',noidung='$noidung',hinhanh='$hinhanh',thutu='$thutu' where id_reviews ='$id'";
		mysql_query($sql);
		header('location:../../index.php?xem=editreviews&id='.$id );
	}else{
		$sql ="delete from reviews where id_reviews = '$id'";
		mysql_query($sql);
		header('location:../../index.php?xem=addreviews');
	}


	
?>