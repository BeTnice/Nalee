<h1 class="page-header">Quản lý banner</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Sửa banner</h3>
		<?php                   include 'config.php';
                                $sql = "select * from video where id_video = $_GET[id]";
                                
                                  $run = mysql_query($sql);
                                  $ds = mysql_fetch_array($run);

                             ?>
		<form action="modules/video/function.php?id=<?php echo $ds['id_video']?>" method="post" enctype="multipart/form-data">
			<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $ds['title'] ?>" required=""><br>
			
			<input type="text" name="link" class="form-control" value="<?php echo $ds['link'] ?>" required="" placeholder="Liên kết">
			<br>
			<input type="text" name="thutu" class="form-control" required="" value="<?php echo $ds['thutu'] ?>" placeholder="Thứ tự">
			<br>
			
	
			
			<input type="submit" name="editvideo" class="form-control btn-primary" value="Sửa">
		</form>
<p><?php echo substr($ds['link'] , -11); ?></p>


	</div>
	<div class="col-md-7">
		<?php include('view.php'); ?>
	</div>
</div>