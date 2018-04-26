<?php

	include('../../config.php');

	$id_product =$_GET['id'];

	$tensp = $_POST['tensp'];

	$mota = $_POST['mota'];

	$thongtin = $_POST['thongtin'];

	$cate = $_POST['cate'];

	$thutu = $_POST['thutu'];

	$noibat = $_POST['noibat'];

	$hinhanh1 = $_POST['hinhanh1'];

	$hinhanh = $_FILES['file']['name'];

		if(isset($_POST['addproduct'])){


			$sql="insert into product (name_product,img,mota,thongtin,id_cate,thutu,noibat) values ('$tensp','$hinhanh1','$mota','$thongtin','$cate','$thutu','$noibat') ";

			mysql_query($sql);

			$product_id = mysql_insert_id();

			//addproduct

	//add image

		$j = 0; 

    	for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed

        $ext = explode('.', basename($hinhanh[$i]));//explode file name from dot(.) 

        $file_extension = end($ext); //store extensions in the variabl

		$target_path =  md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image

        $j = $j + 1;//increment the number of uploaded images according to the files in array       

            if (move_uploaded_file($_FILES['file']['tmp_name'][$i],'../../../images/images/'.$target_path)) {//if file moved to uploads folder

                $sql1="insert into images(link,id_product) values ('".$target_path."','".$product_id."') ";

				mysql_query($sql1);

            } 
        }





//Cắt chuổi tags đưa vào mảng
$arrTags = explode(",", $_POST['tag']);

//Duyệt từng phần tử của Tags

foreach ($arrTags as $tag)
{
    $tag = trim($tag);

   //Lấy id của tag có tên là $tag, nếu ko có thì thêm mới
   $result = mysql_query("select id_tag from tag where name= '$tag' limit 0,1 ");
   if (mysql_num_rows($result) > 0)
   {
        $idTag = mysql_result($result, 0, 0);
   }
   else
   {
         mysql_query("insert into tag(name_tag) values ($tag)");
        $idTag = mysql_insert_id();
   }

  //Insert dữ liệu vào table Articles_Tags
  mysql_query("insert into tag_product value ($idTag, $product_id)");

}

   

    

//addimage


    //add pro
		header('Location: ' . $_SERVER['HTTP_REFERER']);
   // header('location:../../index.php?xem=addproduct');

    } else{

			$sql = "delete from product where id_product='$id_product'";

			mysql_query($sql);

			$sql1 = "delete from images where id_product='$id_product'";

			mysql_query($sql1);

			$sql2 = "delete from tag where id_product='$id_product'";

			mysql_query($sql2);

			$sql3 = "delete from tag_product where id_product='$id_product'";

			mysql_query($sql3);

			

			 header('Location: ' . $_SERVER['HTTP_REFERER']);

			//xoa

			}
	

?>