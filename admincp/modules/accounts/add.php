<h1 class="page-header">Quản lý tài khoản</h1>
<div class="row">
	<div class="col-md-5">
		<h3 class="page-header">Thêm tài khoản</h3>
		<form action="../admincp/modules/accounts/function.php" method="post" accept-charset="utf-8">
			<input type="text" name="user" class="form-control" placeholder="Tên tài khoản" required="">
			<br>
			 <input id="pass" name="pass" placeholder="Mật khẩu" class="form-control input-md" required="" type="password">
			<br>
			<div class="form-group">
			<input id="repass" name="repass" placeholder="Xác nhận mật khẩu" class="form-control input-md" required="" type="password">
			<span style="color: red"></span>
			</div>
			
			<input type="text" name="name" class="form-control" required="" placeholder="Tên thành viên">
			<br>
		<select name="level" class="form-control">
          				<option value="1">Administrator</option>
          				<option value="0">Editor</option>
          			</select>
          			<br>
			<input type="submit" name="addadmin" class="form-control btn-primary" value="Thêm">


		</form>
	
  


	</div>
	<div class="col-md-7">
		<?php include('view.php'); ?>
	</div>
</div>
<script>
	//#pass là input chứa Password #repass là input nhập lại password
$("#repass").change(function(){
  var p = $("#pass").val();
  if($(this).val() != p){
  	$("span").text("Nhập lại mật khẩu không chính xác ! Vui lòng kiểm tra lại");
    $("#repass").val("").parent().addClass("has-error");
  } else{
  	$("span").empty();
    $("#repass").parent().removeClass("has-error");
  }
})
</script>