<?php
	include('../../config.php');

	$id =$_GET['id'];
	$title = $_POST['title'];
	$noidung = $_POST['noidung'];
	$noibat = $_POST['noibat'];
	$public = $_POST['public'];
	$thutu = $_POST['thutu'];
	// $hinhanh1 = $_FILES['hinhanh']['name'];
	// $hinhanh_tmp1 = $_FILES['hinhanh']['tmp_name'];
	// move_uploaded_file($hinhanh_tmp1,'uploads/'.$hinhanh1);
	// $hinhanh1 = $_FILES['hinhanh']['name'];
	// $fname = md5(uniqid($hinhanh1, true));
	// $fname .= "." . pathinfo($_FILES["hinhanh"]["name"], PATHINFO_EXTENSION);
	// $hinhanh_tmp1 = $_FILES['hinhanh']['tmp_name'];
	// move_uploaded_file($hinhanh_tmp1,'uploads/'.$fname);
$hinhanh1 = $_POST['hinhanh'];


	if(isset($_POST['addsv'])){
		$sql = "insert into sv (title_sv,noidung,thutu,noibat,hinhanh,public) values('$title','$noidung','$thutu','$noibat','$hinhanh1','$public')  ";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}elseif(isset($_POST['editsv'])){
		$sql ="update sv set title_sv = '$title',noidung = '$noidung',thutu ='$thutu',noibat ='$noibat',
		hinhanh = '$hinhanh1',public = '$public' where id_sv ='$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		$sql ="delete from sv where id_sv = '$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>