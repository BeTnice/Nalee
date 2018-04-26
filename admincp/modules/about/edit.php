
<h1 class="page-header">Quản lý Giới thiệu</h1>
<div class="row">
	<div class="col-md-12">
		<h3 class="page-header">Giới thiệu</h3>
		<?php                   include 'config.php';
                                $sql1 = "select * from blog where id_blog = 9";
                                
                                  $run1 = mysql_query($sql1);
                                  $ds1 = mysql_fetch_array($run1);

                             ?>
		<form action="modules/blog/function.php?id=9" method="post" enctype="multipart/form-data">
		

			<textarea class="ckeditor" name="noidung" placeholder="Nội dung"><?php echo $ds1['noidung'] ?></textarea><br>

			

			
			<input style="margin-top:5px" type="submit" name="editblog" class="form-control btn-primary" value="OK">
		</form>
		<!-- View blog -->



	</div>

</div>