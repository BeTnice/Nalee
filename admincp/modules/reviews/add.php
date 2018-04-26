<h1 class="page-header">Quản lý Feedback</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Thêm Feedback</h3>
		<form action="../admincp/modules/reviews/function.php" method="post" accept-charset="utf-8">
			<input type="text" name="name" class="form-control" placeholder="Khách hàng" required="">
			<br>
			<input type="text" name="job" class="form-control" required="" placeholder="Nghề nghiệp">
			<br>
			<textarea class="form-control" placeholder="Nội dung" name="noidung"></textarea>
			<br>
			<input id="xImagePath" name="hinhanh" class="form-control" readonly type="text" size="60" placeholder="Hình ảnh" />
				<br>
			<input type="button" class="btn btn-default" value="Ảnh đại diện"  onclick="BrowseServer( 'Images:/', 'xImagePath' );" />
			<br><br>
			<input type="text" name="thutu" class="form-control" required="" placeholder="Thứ tự">
			<br>
			<input type="submit" name="addreviews" class="form-control btn-primary" value="Thêm">
		</form>



	</div>
	<div class="col-md-7">
		<?php include('view.php'); ?>
	</div>
</div>