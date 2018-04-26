<h1 class="page-header">Quản lý Video</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Thêm Video</h3>
		<form action="../admincp/modules/video/function.php" method="post" accept-charset="utf-8">
			<input type="text" name="title" class="form-control" placeholder="Title" required="">
			<br>
			<input type="text" name="link" class="form-control" required="" placeholder="Liên kết">
			<br>
			<input type="text" name="thutu" class="form-control" required="" placeholder="Thứ tự">
			<br>
		
			<input type="submit" name="addvideo" class="form-control btn-primary" value="Thêm">
		</form>



	</div>
	<div class="col-md-7">
		<?php include('view.php'); ?>
	</div>
</div>