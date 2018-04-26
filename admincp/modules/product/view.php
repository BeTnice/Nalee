<h3 class="page-header">Danh sách Mỹ phẩm</h3>
<a href="index.php?xem=addproduct"><butto type="button" class="btn btn-primary">Thêm Mỹ phẩm</button></a>
  <a href="index.php?xem=addcate"><butto type="button" class="btn btn-primary">Quản lý Danh mục</button></a>
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
                            $sql = "select * from product order by thutu asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr  onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editproduct&id=<?php echo $ds['id_product'] ?>'">
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['name_product'] ?></td>
        <td><?php if($ds['noibat']==1){
          echo 'YES';
        }else{echo 'NO';}?></td>
        <td><img src="<?php echo $ds['img'] ?>" width="60"></td>
        
        <td><?php if($_SESSION["level"] ==1){ ?><a href="modules/product/function.php?id=<?php echo $ds['id_product'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a><?php } ?></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>

