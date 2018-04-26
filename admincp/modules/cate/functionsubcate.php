<?php 
include('../../config.php');
	$id =$_GET['id'];
	$namesubcate = $_POST['namesubcate'];
	$idcate = $_POST['idcate'];

	if(isset($_POST['addsubcate'])){
		$sql = "insert into subcate (name_subcate,id_cate) values('$namesubcate','$idcate')  ";
		mysql_query($sql);
		header('location:../../index.php?xem=addcate' );
	}elseif(isset($_POST['editsubcate'])){
		$sql ="update subcate set name_subcate ='$namesubcate',id_cate = '$idcate' where id_subcate ='$id'";
		mysql_query($sql);
		header('location:../../index.php?xem=editcate&id='.$id );
	}else{
		$sql ="delete from subcate where id_subcate = '$id'";
		mysql_query($sql);
		header('location:../../index.php?xem=addcate');
	}
	


?>