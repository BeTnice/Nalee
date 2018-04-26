
<h1 class="page-header">Quản lý Giới thiệu</h1>
<div class="row">
	<div class="col-md-12">
		<h3 class="page-header">Giới thiệu</h3>
		<?php                   include 'config.php';
                                $sql1 = "select * from giaodien where id_giaodien = 1";
                                
                                  $run1 = mysql_query($sql1);
                                  $ds1 = mysql_fetch_array($run1);

                             ?>
		<form action="modules/logo/function.php?id=1" method="post" enctype="multipart/form-data">
			<label>Logo</label>
			<input id="xImagePath" name="logo" type="text" size="60" value="<?php echo $ds1['logo'] ?>" readonly class="form-control" onclick="BrowseServer( 'Images:/', 'xImagePath' );" style="cursor: pointer;" /><br>
			<input name="title" placeholder="Title Welcome" value="<?php echo $ds1['title'] ?>" class="form-control"><br>
			<label>Footer 1</label>
			<textarea class="ckeditor" name="footer" placeholder="Nội dung"><?php echo $ds1['footer'] ?></textarea><br>
			

			
			<input style="margin-top:5px" type="submit" name="editblog" class="form-control btn-primary" value="OK">
		</form>
		<!-- View blog -->



	</div>

</div>