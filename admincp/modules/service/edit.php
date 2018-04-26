
<h1 class="page-header">Quản lý Spa</h1>
<div class="row">
	<div class="col-md-12">
		<h3 class="page-header">Sửa</h3>
		<?php                   include 'config.php';
                                $sql1 = "select * from sv where id_sv = $_GET[id]";
                                
                                  $run1 = mysql_query($sql1);
                                  $ds1 = mysql_fetch_array($run1);

                             ?>
		<form action="modules/service/function.php?id=<?php echo $ds1['id_sv']?>" method="post" enctype="multipart/form-data">
			<input type="text" name="title" class="form-control" value="<?php echo $ds1['title_sv'] ?>" required="" placeholder="Title"><br>

			<textarea  class="ckeditor" name="noidung" required="" placeholder="Nội dung"><?php echo $ds1['noidung'] ?></textarea><br>

		

			<input type="text" name="thutu" class="form-control" value="<?php echo $ds1['thutu'] ?>" required="" placeholder="Thứ tự">
			<br>
				<label>Hình ảnh</label>
			<!-- <input type="file" name="hinhanh" class="form-control"  /> <br>  --> 
			<input id="xImagePath" name="hinhanh" type="text" size="60" value="<?php echo $ds1['hinhanh'] ?>" onclick="BrowseServer( 'Images:/', 'xImagePath' );" readonly class="form-control" style="cursor: pointer;" />
			<br>

			<div class="control-group">
			
                <?php if($ds1['noibat'] == 1){ ?>
                <div class="btn-group">
			    <label class="radio-inline">
			      <input type="radio" name="noibat" required="" checked="" value="1">Nổi bật
			    </label>
			    <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="0">None
			    </label>
			</div>
			 <?php }else{ ?>
			 <div class="btn-group">
                <label class="radio-inline">
                  <input type="radio" name="noibat" required="" value="1">Nổi bật
                </label>
                <label class="radio-inline">
                  <input type="radio" name="noibat" checked="" required="" value="0">None
                </label>
            </div>
             <?php } ?>
			</div>
	
		
			<div class="control-group">
			
                <?php if($ds1['public'] != 1){ ?>
                <div class="btn-group">
			    <div class="checkbox">
  				<label><input type="checkbox" name="public" value="1">Public</label>
				</div>
			</div>
			 <?php }else{ ?>
			 <div class="btn-group">
                <div class="checkbox">
  				<label><input type="checkbox" name="public" checked="" value="1">Public</label>
				</div>
            </div>
             <?php } ?>
			</div>
		
			<br>
			
			<input style="margin-top:5px" type="submit" name="editsv" class="form-control btn-primary" value="Sửa">
		</form>
		<!-- View blog -->
	<?php include('viewblog.php'); ?>


	</div>

</div>