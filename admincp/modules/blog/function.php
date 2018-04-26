<?php
	include('../../config.php');

	$id =$_GET['id'];
	$title = $_POST['title'];
	$noidung = $_POST['noidung'];
	$idcate = $_POST['idcate'];
	$thutu = $_POST['thutu'];
	$noibat = $_POST['noibat'];
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
		$sql = "insert into blog (title_blog,noidung,thutu,id_cateblog,hinhanh,noibat) values('$title','$noidung','$thutu','$idcate','$hinhanh1','$noibat')  ";
		mysql_query($sql);
		$blog_id = mysql_insert_id();

		//Cắt chuổi tags đưa vào mảng
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
         mysql_query("insert into tag(name_tag) values ('$tag')");
        $idTag = mysql_insert_id();
   }

  //Insert dữ liệu vào table Articles_Tags
  mysql_query("insert into tag_blog value ($idTag, $blog_id)");

}



		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}elseif(isset($_POST['editblog'])){
		$sql ="update blog set title_blog = '$title',noidung = '$noidung',thutu ='$thutu',id_cateblog ='$idcate',
		hinhanh = '$hinhanh1',noibat = '$noibat' where id_blog ='$id'";
		mysql_query($sql);
		
//Delete dữ liệu bên table Articles_Tags
mysql_query("DELETE FROM tag_blog where id_blog = $id");

//Update bài viết


//Cắt chuổi tags đưa vào mảng
$arrTags = explode(",", $_POST['tag']);

//Duyệt từng phần tử của Tags

foreach ($arrTags as $tag)
{
    $tag = trim($tag);

   //Lấy id của tag có tên là $tag, nếu ko có thì thêm mới
   $result = mysql_query("select id_tag from tag where name_tag= '$tag' limit 0,1 ");
   if (mysql_num_rows($result) > 0)
   {
        $idTag = mysql_result($result, 0, 0);
   }
   else
   {
         mysql_query("insert into tag(name_tag) values ('$tag')");
        $idTag = mysql_insert_id();
   }

  //Insert dữ liệu vào table Articles_Tags
  mysql_query("insert into tag_blog value ($idTag, $id)");

}	
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		$sql ="delete from blog where id_blog = '$id'";
		mysql_query($sql);
		$sql1 ="delete from tag_blog where id_blog = '$id'";
		mysql_query($sql1);
		$sql ="Select * from tag,tag_blog where tag.id_tag = tag_blog.id_tag and tag_blog.id_blog = $_GET[id] ";
                                  $run = mysql_query($sql);
                                  $gender=mysql_fetch_array($run);
		$sql2 ="delete from tag where id_tag = '".$gender['id_tag']."'";
		mysql_query($sql2);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}


	
?>