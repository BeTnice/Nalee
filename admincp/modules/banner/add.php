<h1 class="page-header">Quản lý banner</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Thêm banner</h3>
		<form action="../admincp/modules/banner/function.php" method="post" accept-charset="utf-8">
			<input type="text" name="title" class="form-control" placeholder="Title" ><br>
			<input type="text" name="subtitle" class="form-control" placeholder="Sub title" >
			<br>
			<input type="text" name="link" class="form-control" placeholder="Liên kết">
			<br>
			<input type="text" name="thutu" required="" class="form-control"  placeholder="Thứ tự">
			<br>
			<input id="xImagePath" name="hinhanh" class="form-control" readonly type="text" size="60" placeholder="Hình ảnh" />	<br>
			<input type="button" value="Chọn hình ảnh" class="btn btn-default"  onclick="BrowseServer( 'Images:/', 'xImagePath' );" /><br>
	
			<br>
			<select name="vitri" class="form-control">
				<option value="Banner">Banner</option>
				<option value="Spa">Spa</option>
				<option value="Fashion">Fashion</option>
				<option value="Cosmetic">Cosmetic</option>
			
			</select>
			<br>
			<input type="submit" name="addbanner" class="form-control btn-primary" value="Thêm">
		</form>



	</div>
	<div class="col-md-7">
		<?php include('view.php'); ?>
	</div>
</div>