<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl ='comestic3';
	$conn = mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('khong ket noi dc may chu');
	mysql_select_db($csdl,$conn);
	mysql_set_charset('utf8',$conn); 
?>