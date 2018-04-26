

<h1 class="page-header">Quản lý Spa</h1>

<div class="row">
	<div class="col-md-12">
		
		<h3 class="page-header">Thêm bài viết</h3>
		<form action="../admincp/modules/service/function.php" method="post" enctype="multipart/form-data">
			<input type="text" name="title" class="form-control" required="" placeholder="Title"><br>
		
			<textarea  class="ckeditor" name="noidung" required="" placeholder="Nội dung"></textarea>
			<br>

			<input type="number" name="thutu" class="form-control" required="" placeholder="Thứ tự">
			<br>
			<!-- <input type="file" name="hinhanh" class="form-control" required="" /> <br>   -->
			<input id="xImagePath" name="hinhanh" class="form-control" readonly type="text" size="60" placeholder="Hình đại diện" onclick="BrowseServer( 'Images:/', 'xImagePath' );" style="cursor: pointer;" />	<br>
	<div class="control-group">
		<div class="btn-group">
			  
			    <div class="checkbox">
  				<label><input type="checkbox" name="public" required="" value="1">Public</label>
				</div>
			  
			</div>
		</div>
			<br>
			<div class="control-group">
			<div class="btn-group">
			  <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="1">Nổi bật
			    </label>
			    <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="0">None
			    </label>
				</div>
			</div>
			<br><br>
			<input type="submit" name="addsv" class="form-control btn-primary" value="Thêm">

		</form>
		<!-- View blog -->
	<?php include('viewblog.php'); ?>


	</div>
	
</div>