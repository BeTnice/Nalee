<?php

	include('../../config.php');

	$id_fashion =$_GET['id'];

	$tensp = $_POST['tensp'];

	$mota = $_POST['mota'];

	$thongtin = $_POST['thongtin'];

	$cate = $_POST['cate'];

	$thutu = $_POST['thutu'];

	$noibat = $_POST['noibat'];

	$cate = $_POST['cate'];

	$hinhanh1 = $_POST['hinhanh1'];

	$hinhanh = $_FILES['file']['name'];

		if(isset($_POST['addfashion'])){


			$sql="insert into fashion (name_fashion,img,mota,thongtin,thutu,noibat,id_catefs) values ('$tensp','$hinhanh1','$mota','$thongtin','$thutu','$noibat','$cate') ";

			mysql_query($sql);

			$fashion_id = mysql_insert_id();

			//addfashion

	//add image

		$j = 0; 

    	for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed

        $ext = explode('.', basename($hinhanh[$i]));//explode file name from dot(.) 

        $file_extension = end($ext); //store extensions in the variabl

		$target_path =  md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image

        $j = $j + 1;//increment the number of uploaded images according to the files in array       

            if (move_uploaded_file($_FILES['file']['tmp_name'][$i],'../../../images/images/'.$target_path)) {//if file moved to uploads folder

                $sql1="insert into images(link,id_fashion) values ('".$target_path."','".$fashion_id."') ";

				mysql_query($sql1);

            } 
        }






   

    

//addimage


    //add pro
		// header('Location: ' . $_SERVER['HTTP_REFERER']);
   header('location:../../index.php?xem=addfashion');

    } else{

			$sql = "delete from fashion where id_fashion='$id_fashion'";

			mysql_query($sql);

			$sql1 = "delete from images where id_fashion='$id_fashion'";

			mysql_query($sql1);

			
			

			 header('Location: ' . $_SERVER['HTTP_REFERER']);

			//xoa

			}
	

?>