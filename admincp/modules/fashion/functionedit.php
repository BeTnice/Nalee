<?php

	include('../../config.php');

	$id_fashion =$_GET['id'];

	$tensp = $_POST['tensp'];

	$mota = $_POST['mota'];

	$thongtin = $_POST['thongtin'];

	$cate = $_POST['cate'];

	$thutu = $_POST['thutu'];

	$cate = $_POST['cate'];

	$noibat = $_POST['noibat'];

	$hinhanh1 = $_POST['hinhanh1'];

	$hinhanh = $_FILES['file']['name'];


	

		if(isset($_POST['editfashion'])){

			$sql = "update fashion set name_fashion='$tensp',img='$hinhanh1',mota='$mota',thongtin='$thongtin',thutu ='$thutu',noibat='$noibat',id_catefs='$cate' where id_fashion='$id_fashion'";

			mysql_query($sql);

			

		//add image

		$j = 0; 

    	for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed

        $ext = explode('.', basename($hinhanh[$i]));//explode file name from dot(.) 

        $file_extension = end($ext); //store extensions in the variabl

		$target_path =  md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image

        $j = $j + 1;//increment the number of uploaded images according to the files in array       

            if (move_uploaded_file($_FILES['file']['tmp_name'][$i],'../../../images/images/'.$target_path)) {//if file moved to uploads folder

                $sql1="insert into images(link,id_fashion) values ('".$target_path."','".$id_fashion."') ";

				mysql_query($sql1);

            } 
        }


      
	
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }elseif(isset($_POST['xoaimg'])){
    		$id_images = $_POST['id_images'];
			
    		$link_images =  $_POST['link_images'];
			 echo ''.$id_images;
			$filename  = '../../../images/images/'.$link_images;

			unlink($filename);
    		echo 'File '.$filename.' has been deleted';
			$sql1 = "delete from images where id_images = '".$id_images."' " ;

			

			mysql_query($sql1);

	header('Location: ' . $_SERVER['HTTP_REFERER']);



				//xoa

			}


		

		

			

			

			//xoa

			

?>