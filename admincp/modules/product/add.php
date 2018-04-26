<?php  
 include 'config.php';
  $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>
<h1 class="page-header">Quản lý Mỹ phẩm</h1>

<div class="row">
	<form role="form" id="form" action="../admincp/modules/product/function.php" enctype="multipart/form-data" method="post">
	<div class="col-md-9">
		<h3 class="page-header">Thêm Mỹ phẩm</h3>
		
			<input type="text" name="tensp" class="form-control" placeholder="Tên Mỹ phẩm" ><br>
			<!-- <input type="text" name="price" class="form-control" placeholder="Giá" required=""> -->
			<br>
			<label>Mô tả</label>
			<textarea class="ckeditor" name="mota" cols="80" rows="10"></textarea>
			<br>
			<label>Thông tin</label>
			<textarea class="ckeditor" name="thongtin" cols="80" rows="10"></textarea>
			<br>
			<input type="text" name="thutu" class="form-control" required=""  placeholder="Thứ tự">
			<br>
			<!-- <input type="text" name="thutu" class="form-control" required="" placeholder="Keywords"> -->
			<div class="btn-group">
			  <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="1">Public
			    </label>
			    <label class="radio-inline">
			      <input type="radio" name="noibat" required="" value="0">None
			    </label>
			  
			</div>
			<br>
			<br>
			<label>Hình ảnh</label>
			<input id="xImagePath" name="hinhanh1" class="form-control" readonly type="text" size="60" placeholder="Hình đại diện" onclick="BrowseServer( 'Images:/', 'xImagePath' );" style="cursor: pointer;" />	<br>
			
			
		    <div id="filediv"><input name="file[]" type="file" class="form-control" id="file"/></div><br/>
                            
                           <input type="button" id="add_more" class="upload btn" value="Thêm hình"/>
	   
	   
			<br>

	</div>
	<div class="col-md-3">
         <a href="index.php?xem=addcate"><butto type="button" class="btn btn-primary">Thêm Danh mục</button></a>
		<h3 class="page-header">Danh mục</h3>
		<?php
 
// $sql = 'SELECT * FROM cate';
 
// $result = mysql_query($sql);
 
// $categories = array();
 
// while ($row = mysql_fetch_assoc($result)){
//     $categories[] = $row;
// }
 
// // BƯỚC 2: HÀM ĐỆ QUY HIỂN THỊ CATEGORIES
// function showCategories($categories, $parent_id = 0, $char = '')
// {
//     foreach ($categories as $key => $item)
//     {
//         // Nếu là chuyên mục con thì hiển thị
//         if ($item['parent_id'] == $parent_id)
//         {
//             echo '<option value="'.$item['id_cate'].'">';
//                 echo $char . $item['name_cate'];
//             echo '</option>';
             
//             // Xóa chuyên mục đã lặp
//             unset($categories[$key]);
             
//             // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
//             showCategories($categories, $item['id_cate'], $char.'|---');
//         }
//     }
// }
 ?>
<!-- <select multiple="" name="cate" class="form-control" style="height: 250px"> -->
    <?php 
    // showCategories($categories);
     ?>
<!-- </select> -->

            <div class="form-group">
                                     <?php $sql ="Select * from cate";
                                  $run = mysql_query($sql);
                             ?>

                                    <label>Danh mục</label>      
                                <select multiple="" name="cate" class="form-control" required="" style="height: 250px">
                                <?php while ($gender=mysql_fetch_array($run)) {
                                
                                 ?>
                                    <option value="<?php echo $gender['id_cate'] ?>"><?php echo $gender['name_cate'] ?></option>
                                    <?php } ?>

                                </select>
                                     
                            </div>
                            <!-- <div class="bs-example">
                                <label>Tags</label><br>
                               <input type="text" name="tag" data-role="tagsinput" />
                            </div> -->
	</div>
	<div class="col-md-9">
		<br>
		<button name="addproduct" class="form-control btn-primary">Thêm</button><br><br>
	</div>
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