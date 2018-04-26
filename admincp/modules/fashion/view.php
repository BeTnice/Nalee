<h3 class="page-header">Danh sách Thời trang</h3>
<a href="index.php?xem=addfashion"><butto type="button" class="btn btn-primary">Thêm</button></a>
  <a href="index.php?xem=addcatefs"><butto type="button" class="btn btn-primary">Quản lý Danh mục</button></a>
		<table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Public</th>
        <th>Hình ảnh</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from fashion order by thutu asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr  onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editfashion&id=<?php echo $ds['id_fashion'] ?>'">
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['name_fashion'] ?></td>
        <td><?php if($ds['noibat']==1){
          echo 'YES';
        }else{echo 'NO';}?></td>
        <td><img src="<?php echo $ds['img'] ?>" width="60"></td>
        
        <td><?php if($_SESSION["level"] ==1){ ?><a href="modules/fashion/function.php?id=<?php echo $ds['id_fashion'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a><?php } ?></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>

