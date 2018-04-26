<h1 class="page-header">Quản lý tài khoản</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Đổi mật khẩu</h3>
		<?php                   include 'config.php';
                                $sql = "select * from admin where id_admin = $_GET[id]";
                                
                                  $run = mysql_query($sql);
                                  $ds = mysql_fetch_array($run);
                                 $cpass = md5($ds['pass']); 	
                             ?>
		<form action="modules/accounts/function.php?id=<?php echo $ds['id_admin']?>" method="post" enctype="multipart/form-data">

		<input type="text" name="user"  readonly  class="form-control" value="<?php echo $ds['user'] ?>" placeholder="Tên thành viên">
		<br>	
			
		<?php if($_SESSION["level"] != 1){ ?>
			<div class="form-group">

			<input id="oldpass" type="password" name="title" class="form-control" placeholder="Mật khẩu cũ" value="" required="">
			<span class="subpass" style="color: red"></span>
		</div>

			<input id="reoldpass" type="hidden" value="<?php echo $ds['pass'] ?>">
	
			<input id="pass" name="pass" placeholder="Mật khẩu mới" class="form-control input-md"  type="password" required="">
			<div class="form-group"><br>
			<input id="repass" name="repass" placeholder="Xác nhận mật khẩu" class="form-control input-md"  type="password" required="">
			<span class="re" style="color: red"></span>
			</div>
			<?php }else{ ?>
			<?php if($ds['user'] == 'admin'){ ?>
				<input id="oldpass" type="password" name="title" class="form-control" placeholder="Mật khẩu cũ" value="" required="">
				<span class="subpass" style="color: red"></span>
				<input id="reoldpass" type="hidden" value="<?php echo $ds['pass'] ?>">
				<br>
			<?php } ?>
			<input name="pass" placeholder="Mật khẩu mới" class="form-control input-md" id="pass" type="password" required="">
			
			<div class="form-group"><br>
			<input id="repass" name="repass" placeholder="Xác nhận mật khẩu" class="form-control input-md"  type="password" required="">
			<span class="re" style="color: red"></span>
			</div>
			<?php } ?>
		<?php if($_SESSION["level"] == 1){ ?>
			<select name="level" class="form-control">
				<?php
				
				 if($ds['level'] ==1){ ?>
          				<option value="1" selected="">Administrator</option>
          				<option value="0">Editor</option>
	          				<?php }else{ ?>
	          				<option value="1">Administrator</option>
	          				<option value="0" selected="">Editor</option>
	          				<?php } ?>
				
          		
			</select>
			<?php } ?>
			<br>
			<input type="submit" name="editadmin" class="form-control btn-primary" value="OK">
		</form>



	</div>
	<!-- <div class="col-md-7">
		<?php include('view.php'); ?>
	</div> -->
</div>

<script>
	$("#oldpass").change(function(){
  var p = $("#reoldpass").val();
  if($(this).val() != p){
  	$(".subpass").text("Nhập mật khẩu không chính xác ! Vui lòng kiểm tra lại");
    $("#oldpass").val("").parent().addClass("has-error");
  } else{
  	$(".subpass").empty();
    $("#oldpass").parent().removeClass("has-error");
  }
})
	//#pass là input chứa Password #repass là input nhập lại password
$("#repass").change(function(){
  var p = $("#pass").val();
  if($(this).val() != p){
  	$(".re").text("Mật khẩu khôngk chính xác ! Vui lòng kiểm tra lại");
    $("#repass").val("").parent().addClass("has-error");
  } else{
  	$(".re").empty();
    $("#repass").parent().removeClass("has-error");
  }
})
</script>