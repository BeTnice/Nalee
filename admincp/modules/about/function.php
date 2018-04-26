<?php
	include('../../config.php');

	$id =$_GET['id'];
	$title = $_POST['title'];
	$noidung = $_POST['noidung'];
	$idcate = $_POST['idcate'];
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


	if(isset($_POST['addblog'])){
		$sql = "insert into blog (title_blog,noidung,thutu,id_cateblog,hinhanh) values('$title','$noidung','$thutu','$idcate','$hinhanh1')  ";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}elseif(isset($_POST['editblog'])){
		if($hinhanh1 != ''){
		$sql ="update blog set title_blog = '$title',noidung = '$noidung',thutu ='$thutu',id_cateblog ='$idcate',
		hinhanh = '$hinhanh1' where id_blog ='$id'";
		mysql_query($sql);
		}else{
		$sql ="update blog set title_blog = '$title',noidung = '$noidung',thutu ='$thutu',id_cateblog ='$idcate' where id_blog ='$id'";
		mysql_query($sql);
	}
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		$sql ="delete from blog where id_blog = '$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>