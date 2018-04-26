<h3 class="page-header">Danh sách Banner</h3>
<a href="index.php?xem=addbanner"><butto type="button" class="btn btn-primary">Thêm banner</button></a>
		<table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Vị trí</th>
        <th>Hình ảnh</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from slide order by vitri asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr  onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editbanner&id=<?php echo $ds['id_slide'] ?>'">
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['title'] ?></td>
        <td><?php echo $ds['vitri'] ?></td>
        <td><img src="<?php echo $ds['img_slide'] ?>" width="60"></td>
        
        <td><?php if($_SESSION["level"] ==1){ ?><a href="modules/banner/function.php?id=<?php echo $ds['id_slide'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a><?php } ?></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>

