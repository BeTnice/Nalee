<h1 class="page-header">Quản lý Review</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Sửa Review</h3>
		<?php                   include 'config.php';
                                $sql = "select * from reviews where id_reviews = $_GET[id]";
                                
                                  $run = mysql_query($sql);
                                  $ds = mysql_fetch_array($run);

                             ?>
		<form action="modules/reviews/function.php?id=<?php echo $ds['id_reviews']?>" method="post" enctype="multipart/form-data">
			<input type="text" name="name" class="form-control" placeholder="Khách hàng" value="<?php echo $ds['name']?>" required="">
			<br>
			<input type="text" name="job" class="form-control" value="<?php echo $ds['job']?>" required="" placeholder="Nghề nghiệp">
			<br>
			<textarea class="form-control"  placeholder="Nội dung" name="noidung"><?php echo $ds['noidung']?></textarea>
			<br>
			<input id="xImagePath" name="hinhanh" type="text" size="60" value="<?php echo $ds['hinhanh'] ?>" readonly class="form-control" /><br>
		<img src="<?php echo $ds['hinhanh'] ?>" width="100" height="100">
			<input type="button" value="Chọn hình ảnh"  onclick="BrowseServer( 'Images:/', 'xImagePath' );" /><br>
			<br><br>
			<input type="text" name="thutu" value="<?php echo $ds['thutu']?>" class="form-control" required="" placeholder="Thứ tự">
			<br>
			
			<input type="submit" name="editreviews" class="form-control btn-primary" value="Sửa">
		</form>



	</div>
	<div class="col-md-7">
		<?php include('view.php'); ?>
	</div>
</div>