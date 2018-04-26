<h1 class="page-header">Quản lý danh mục</h1>
<div class="row">
	<div class="col-md-4">
		<h3 class="page-header">Thêm danh mục</h3>
		<form action="../admincp/modules/cate/function.php" method="post" accept-charset="utf-8">
			<input type="text" name="namecate" placeholder="Tên" class="form-control" required=""><br>
			<input type="text" name="thutu" placeholder="Thứ tự" class="form-control" required="">
			<br>
			<input type="submit" name="addcate" class="form-control btn-primary" value="Thêm">
		</form>

	<div class="clearfix"></div>
				
		
	</div>
	<div class="col-md-8">
		<?php include('view.php'); ?>
	</div>
</div>
