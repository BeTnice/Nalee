<h3 class="page-header">Danh sách Blog</h3>
<a href="index.php?xem=addcate"><butto type="button" class="btn btn-primary">Thêm danh mục</button></a>
		<table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Danh mục</th>
     
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from cate order by name_cate asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr>
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['name_cate'] ?></td>

        <td><a href="index.php?xem=editcate&id=<?php echo $ds['id_cate'] ?>"><button class="form-control btn-primary">Sửa</button></a></td>
        <td><a href="modules/cate/function.php?id=<?php echo $ds['id_cate'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>


  <h3 class="page-header">Danh sách danh mục con</h3>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>Danh mục con</th>
        <th>Danh mục </th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from cate,subcate where cate.id_cate = subcate.id_cate order by name_cate asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr>
      
        <td><?php echo $ds['name_subcate'] ?></td>
        <td><?php echo $ds['name_cate'] ?></td>
        <td><a href="index.php?xem=editcate&id=<?php echo $ds['id_subcate'] ?>"><button class="form-control btn-primary">Sửa</button></a></td>
        <td><a href="modules/cate/functionsubcate.php?id=<?php echo $ds['id_subcate'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>