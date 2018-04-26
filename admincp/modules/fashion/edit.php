<?php  
 include 'config.php'; ?>
<h1 class="page-header">Quản lý Sản phẩm</h1>
<div class="row">
    <?php
                                $sql = "select * from fashion where id_fashion = $_GET[id]";
                                
                                  $run = mysql_query($sql);
                                  $ds = mysql_fetch_array($run);
                             ?>  
	<form role="form" id="form" action="../admincp/modules/fashion/functionedit.php?id=<?php echo $ds['id_fashion'] ?>" enctype="multipart/form-data" method="post">
	<div class="col-md-12">
		<h3 class="page-header">Sửa sản phẩm</h3>
		
			<input type="text" name="tensp" class="form-control" value="<?php echo $ds['name_fashion'] ?>" placeholder="Tên sản phẩm" ><br>
			<!-- <input type="text" name="price" class="form-control" placeholder="Giá" required=""> -->
			<br>
			<label>Mô tả</label>
			<textarea class="ckeditor" name="mota"  class="summernote" ><?php echo $ds['mota'] ?></textarea>
			<br>
			<label>Thông tin</label>
			<textarea class="ckeditor" name="thongtin" class="summernote"><?php echo $ds['thongtin'] ?></textarea>
			<br>
			<input type="text" name="thutu" class="form-control"  placeholder="Thứ tự" value="<?php echo $ds['thutu'] ?>">
			<br>
			<!-- <input type="text" name="thutu" class="form-control" required="" placeholder="Keywords"> -->
	<div class="btn-group">
                <?php if($ds['noibat'] == 1){ ?>
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
                  <input type="radio" name="noibat" checked="" required="" value="0">None
                </label>
             <?php } ?>
			</div> 
		  <br>
      <br>
			<label>Hình ảnh</label>
			<input id="xImagePath" name="hinhanh1" class="form-control" readonly type="text" size="60"  placeholder="Hình đại diện" value="<?php echo $ds['img'] ?>" onclick="BrowseServer( 'Images:/', 'xImagePath' );" style="cursor: pointer;"/> 	<br>
			
			<br>	
		                          <?php $sql= "select * from images where id_fashion= $_GET[id]";
                                    $run = mysql_query($sql);
                                    
                               ?>
                      
                                
                                <?php while ( $img = mysql_fetch_array($run)) {
                                #.
                            ?>
                            <input type="hidden" value="<?php echo $img['id_images']  ?>" name="id_images">
                            <input type="hidden" value="<?php echo $img['link']  ?>" name="link_images">
                            <?php if($img['link'] != ''){ ?>
                            <img src="../images/images/<?php echo $img['link']  ?>" width="100" height="100">
                            <?php } ?>   
                             <button name ="xoaimg"  type="submit" class="btn btn-primary">Xóa</button>

                             <?php } ?>
                          <br>
                          <br>
                            
                             <input type="button" id="add_more" class="upload btn" value="Thêm hình"/>
                            <br>
                                 
                         
	   
	   
			<br>

	</div>


		<br>
    <div class="form-group">
                                     <?php $sql ="Select * from catefs";
                                  $run = mysql_query($sql);
                             ?>

                                
                                <select name="cate" class="form-control" required="">
                                <?php while ($gender=mysql_fetch_array($run)) {
                                if($ds['id_catefs'] ==  $gender['id_catefs']){
                                 ?>
                                    <option selected="seclected" value="<?php echo $gender['id_catefs'] ?>"><?php echo $gender['name_catefs'] ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $gender['id_catefs'] ?>"><?php echo $gender['name_catefs'] ?></option>
                                    <?php }} ?>

                                </select>
                                     
                            </div>
		<button name="editfashion" class="form-control btn-primary">Sửa</button><br><br>

</form>

	<div class="col-md-12">
	<?php 
		include('view.php'); ?>
	</div>
</div>
            <style>
            #filediv input{
                top:0px;
            }
    .abcd{
    text-align: left;
}

.abcd img{
    height:150px;
    width:150px;
    padding: 5px;
    border: 1px solid rgb(232, 222, 189);
}
</style>
    <script>
    var abc = 0; //Declaring and defining global increement variable

$(document).ready(function() {

//To add new input file field dynamically, on click of "Add More Files" button below function will be executed
    $('#add_more').click(function() {
        $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {class:'form-control',name: 'file[]', type: 'file', id: 'file'}),        
                $("<br/>")
                ));
    });

//following function will executes on change event of file input to select different file   
$('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                 abc += 1; //increementing global variable by 1
                
                var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
               
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
               
                $(this).hide();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: 'x.png', alt: 'delete'}).click(function() {
                $(this).parent().parent().remove();
                }));
            }
        });

//To preview image     
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

   /* $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name)
        {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });*/
});
</script>