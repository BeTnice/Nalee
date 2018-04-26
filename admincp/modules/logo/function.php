<?php
	include('../../config.php');

	$id =$_GET['id'];
	$title = $_POST['title'];
	$logo = $_POST['logo'];
	$footer = $_POST['footer'];
	// $thutu = $_POST['thutu'];
	// $hinhanh1 = $_FILES['hinhanh']['name'];
	// $hinhanh_tmp1 = $_FILES['hinhanh']['tmp_name'];
	// move_uploaded_file($hinhanh_tmp1,'uploads/'.$hinhanh1);
	// $hinhanh1 = $_FILES['hinhanh']['name'];
	// $fname = md5(uniqid($hinhanh1, true));
	// $fname .= "." . pathinfo($_FILES["hinhanh"]["name"], PATHINFO_EXTENSION);
	// $hinhanh_tmp1 = $_FILES['hinhanh']['tmp_name'];
	// move_uploaded_file($hinhanh_tmp1,'uploads/'.$fname);



	if(isset($_POST['addblog'])){
		$sql = "insert into blog (title_blog,noidung,thutu,id_cateblog,hinhanh) values('$title','$noidung','$thutu','$idcate','$hinhanh1')  ";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}elseif(isset($_POST['editblog'])){
	
		$sql ="update giaodien set title = '$title',logo = '$logo',footer ='$footer' where id_giaodien ='$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	
		
	}else{
		$sql ="delete from blog where id_blog = '$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>