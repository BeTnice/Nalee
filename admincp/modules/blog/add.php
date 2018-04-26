

<h1 class="page-header">Quản lý Blog</h1>

<div class="row">
	<div class="col-md-8">
		
		<h3 class="page-header">Thêm bài viết</h3>
		<form action="../admincp/modules/blog/function.php" method="post" enctype="multipart/form-data">
			<input type="text"  name="title" class="form-control" required="" placeholder="Title"><br>
		
			<textarea class="ckeditor" name="noidung" required="" placeholder="Nội dung"></textarea>
			<br>

			<select name="idcate" class="form-control" >
			  <?php  
                            include 'config.php';
                            $sql = "select * from cateblog order by thutu asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
				<option value="<?php echo $ds['id_cateblog'] ?>"><?php echo $ds['name_cateblog']?></option>
				<?php } ?>
			</select><br>

			<input type="text" name="thutu" class="form-control" required="" placeholder="Thứ tự">
			<br>
				<label>Hình ảnh</label>
			<!-- <input type="file" name="hinhanh" class="form-control" required="" /> <br>   -->
			<input id="xImagePath" name="hinhanh" class="form-control" readonly type="text" size="60" placeholder="Hình ảnh" />	<br>
			<input type="button" value="Chọn hình ảnh"  onclick="BrowseServer( 'Images:/', 'xImagePath' );" /><br>
		<br>
		<div class="btn-group">
			  <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="1">Nổi bật
			    </label>
			    <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="0">None
			    </label>
			  
			</div>
			<br>
			<br>
		<div class="bs-example">
                                <label>Tags</label><br>
                               <input type="text" name="tag" data-role="tagsinput" />
                            </div>
                            <br>
                            
			<input type="submit" name="addblog" class="form-control btn-primary" value="Thêm">

		</form>
		<!-- View blog -->
	<?php include('viewblog.php'); ?>


	</div>
	<div class="col-md-4">
		<?php include('adddanhmuc.php'); ?>
	</div>
</div>