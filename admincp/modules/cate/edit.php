<h1 class="page-header">Quản lý danh mục</h1>
<div class="row">
	<div class="col-md-4">
		<?php                   include 'config.php';
                                $sql = "select * from cate where id_cate = $_GET[id]";
                                
                                  $run = mysql_query($sql);
                                  
                                  $ds = mysql_fetch_array($run);
                                 
                                  
                                
                             ?>
		<h3 class="page-header">Sửa danh mục</h3>
		<form action="modules/cate/function.php?id=<?php echo $ds['id_cate']?>" method="post" accept-charset="utf-8">
			<input type="text" name="namecate" placeholder="Tên" class="form-control" required="" value="<?php echo $ds['name_cate'] ?>">
			<br>
			<input type="text" name="thutu" placeholder="Thứ tự" class="form-control" required="" value="<?php echo $ds['thutu'] ?>">
			<br>
		
			<input type="submit" name="editcate" class="form-control btn-primary" value="Sửa">
		</form>

	<div class="clearfix"></div>

		<!-- 	danh mục con -->
			


	</div>

	<div class="col-md-8">
		<?php include('view.php'); ?>
	</div>
</div>
