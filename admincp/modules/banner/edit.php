<h1 class="page-header">Quản lý banner</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Sửa banner</h3>
		<?php                   include 'config.php';
                                $sql = "select * from slide where id_slide = $_GET[id]";
                                
                                  $run = mysql_query($sql);
                                  $ds = mysql_fetch_array($run);

                             ?>
		<form action="modules/banner/function.php?id=<?php echo $ds['id_slide']?>" method="post" enctype="multipart/form-data">
			<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $ds['title'] ?>" ><br>
			<input type="text" name="subtitle" class="form-control" value="<?php echo $ds['subtitle'] ?>" placeholder="Sub title" >
			<br>
			<input type="text" name="link" class="form-control" value="<?php echo $ds['link'] ?>" placeholder="Liên kết">
			<br>
			<input type="text" name="thutu" required="" class="form-control"  value="<?php echo $ds['thutu'] ?>" placeholder="Thứ tự">
			<br>
			<input id="xImagePath" name="hinhanh" class="form-control" value="<?php echo $ds['img_slide'] ?>" readonly type="text" size="60" placeholder="Hình ảnh" />
				<br>
				<img src="<?php echo $ds['img_slide'] ?>" width="60">
		<input type="button" value="Chọn hình ảnh"  onclick="BrowseServer( 'Images:/', 'xImagePath' );" /><br>
	
			<br>
			<select name="vitri" class="form-control" >
			  <?php 
                                $sql1= "select * from slide";
                                
                                  $run1 = mysql_query($sql1);
                                $ds1=mysql_fetch_array($run1);
                                if($ds['vitri'] ==  $ds1['vitri']){
                                 ?>
                                    <option style="background-color: grey" selected="seclected"  value="<?php echo $ds1['vitri'] ?>">Banner</option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $ds1['vitri'] ?>"><?php echo $ds1['vitri'] ?></option>
                                    <?php } ?>
                                    <option value="Banner">Banner</option>
									<option value="Spa">Spa</option>
									<option value="Fashion">Fashion</option>
									<option value="Cosmetic">Cosmetic</option>
								
			</select><br>
			<input type="submit" name="editbanner" class="form-control btn-primary" value="Sửa">
		</form>



	</div>
	<div class="col-md-7">
		<?php include('view.php'); ?>
	</div>
</div>