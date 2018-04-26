<?php
	include('../../config.php');

	$id =$_GET['id'];

	// $hinhanh1 = $_FILES['hinhanh']['name'];
	// $hinhanh_tmp1 = $_FILES['hinhanh']['tmp_name'];
	// move_uploaded_file($hinhanh_tmp1,'uploads/'.$hinhanh1);
	// $hinhanh1 = $_FILES['hinhanh']['name'];
	// $fname = md5(uniqid($hinhanh1, true));
	// $fname .= "." . pathinfo($_FILES["hinhanh"]["name"], PATHINFO_EXTENSION);
	// $hinhanh_tmp1 = $_FILES['hinhanh']['tmp_name'];
	// move_uploaded_file($hinhanh_tmp1,'uploads/'.$fname);
// $hinhanh1 = $_POST['hinhanh'];


	if(isset($_POST['addblog'])){
		
	}elseif(isset($_POST['editblog'])){
		
	}else{
		$sql ="delete from member where id_members = '$id'";
		mysql_query($sql);
		header('location:../../index.php?xem=member');
	}


	
?>