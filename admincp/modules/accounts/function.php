<?php
	include('../../config.php');

	$id =$_GET['id'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$level = $_POST['level'];
	$password = addslashes( $_POST['pass']);
	if(isset($_POST['addadmin'])){
		  //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT user FROM admin WHERE user='$user'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }else{
		$sql = "insert into admin (user,pass,name,level) 
		values('$user','$password','$name','$level')";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	}elseif(isset($_POST['editadmin'])){
		$sql ="update admin set pass='$pass',level='$level' where id_admin ='$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		$sql ="delete from admin where id_admin = '$id'";
		mysql_query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>