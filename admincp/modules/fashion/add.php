<?php  
 include 'config.php';
 ?>
<h1 class="page-header">Quản lý Thời Trang</h1>
<div class="row">
	<form role="form" id="form" action="../admincp/modules/fashion/function.php" enctype="multipart/form-data" method="post">
	<div class="col-md-12">
		<h3 class="page-header">Thêm</h3>
		
			<input type="text" name="tensp" class="form-control" placeholder="Title" ><br>
			<!-- <input type="text" name="price" class="form-control" placeholder="Giá" required=""> -->
			<br>
			<label>Mô tả</label>
			<textarea class="ckeditor" name="mota" cols="80" rows="10"></textarea>
			<br>
			<label>Thông tin</label>
			<textarea class="ckeditor" name="thongtin" cols="80" rows="10"></textarea>
			<br>
			<input type="text" name="thutu" class="form-control"  placeholder="Thứ tự">
			<br>
			<!-- <input type="text" name="thutu" class="form-control" required="" placeholder="Keywords"> -->
			<div class="btn-group">
			  <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="1">Public
			    </label>
			    <label class="radio-inline">
			      <input type="radio" name="noibat"  required="" value="0">None
			    </label>
			  
			</div>
		      <br><br>
			<label>Hình ảnh</label>
			<input id="xImagePath" name="hinhanh1" class="form-control" readonly type="text" size="60" placeholder="Hình đại diện" onclick="BrowseServer( 'Images:/', 'xImagePath' );" style="cursor: pointer;" />	<br>
			
			
		    <div id="filediv"><input name="file[]" type="file" class="form-control" id="file"/></div><br/>
                         
                           <input type="button" id="add_more" class="upload btn" value="Thêm hình"/>
			<br>   <br>
	</div>

	   <br>
		<br>
        <div class="form-group">
                                     <?php $sql ="Select * from catefs";
                                  $run = mysql_query($sql);
                             ?>

                                    <label>Danh mục</label>      
                                <select  name="cate" class="form-control" required="">
                                <?php while ($gender=mysql_fetch_array($run)) {
                                
                                 ?>
                                    <option value="<?php echo $gender['id_catefs'] ?>"><?php echo $gender['name_catefs'] ?></option>
                                    <?php } ?>

                                </select>
                                     
                            </div>
		<button name="addfashion" class="form-control btn-primary">Thêm</button><br><br>
</form>
                          

	<div class="col-md-12">
		<?php include('view.php'); ?>
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