
<h1 class="page-header">Quản lý Blog</h1>
<div class="row">
	<div class="col-md-8">
		<h3 class="page-header">Sửa bài viết</h3>
		<?php                   include 'config.php';
                                $sql1 = "select * from blog where id_blog = $_GET[id]";
                                
                                  $run1 = mysql_query($sql1);
                                  $ds1 = mysql_fetch_array($run1);

                             ?>
		<form action="modules/blog/function.php?id=<?php echo $ds1['id_blog']?>" method="post" enctype="multipart/form-data">
			<input type="text" name="title" class="form-control" value="<?php echo $ds1['title_blog'] ?>" required="" placeholder="Title"><br>

			<textarea  class="ckeditor" name="noidung" required="" placeholder="Nội dung"><?php echo $ds1['noidung'] ?></textarea><br>

			<select name="idcate" class="form-control" >
			  <?php 
                                $sql= "select * from cateblog";
                                
                                  $run = mysql_query($sql);
                                while ($ds=mysql_fetch_array($run)) {
                                if($ds['id_cateblog'] ==  $ds1['id_cateblog']){
                                 ?>
                                    <option selected="seclected" value="<?php echo $ds['id_cateblog'] ?>"><?php echo $ds['name_cateblog'] ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $ds['id_cateblog'] ?>"><?php echo $ds['name_cateblog'] ?></option>
                                    <?php }} ?>
			</select><br>

			<input type="text" name="thutu" class="form-control" value="<?php echo $ds1['thutu'] ?>" required="" placeholder="Thứ tự">
			<br>
			<div class="btn-group">
		
                <?php if($ds1['noibat'] == 1){ ?>
			    <label class="radio-inline">
			      <input type="radio" name="noibat" required="" checked="" value="1">Public
			    </label>
			    <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="0">None
			    </label>
			 <?php }else{ ?>
                <label class="radio-inline">
                  <input type="radio" name="noibat" required="" value="1">Public
                </label>
                <label class="radio-inline">
                  <input type="radio" name="noibat" required="" checked="" value="0">None
                </label>
             <?php } ?>
			</div>
			<br><br>
				<label>Hình ảnh</label>
			<!-- <input type="file" name="hinhanh" class="form-control"  /> <br>  --> 
			<input id="xImagePath" name="hinhanh" type="text" size="60" value="<?php echo $ds1['hinhanh'] ?>" readonly class="form-control" onclick="BrowseServer( 'Images:/', 'xImagePath' );" style="cursor: pointer;" />
		<img src="<?php echo $ds1['hinhanh'] ?>" width="100" height="100">
	
			
			<br><br>

			<div class="bs-example">
                                <label>Tags</label><br>
                               <input type="text" value=" <?php $sql ="Select * from tag,tag_blog where tag.id_tag = tag_blog.id_tag and tag_blog.id_blog = $_GET[id] ";
                                  $run = mysql_query($sql);
                                  while($gender=mysql_fetch_array($run)){

                                  echo ','.$gender['name_tag'];}
                                ?>" name="tag" data-role="tagsinput" />
                            </div><br>
			<input style="margin-top:5px" type="submit" name="editblog" class="form-control btn-primary" value="Sửa">
		</form>
		<!-- View blog -->
	<?php include('viewblog.php'); ?>


	</div>
	<div class="col-md-4">
		<?php include('adddanhmuc.php'); ?>
	</div>
</div>