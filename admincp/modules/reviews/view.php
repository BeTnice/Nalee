<h3 class="page-header">Danh sách FB</h3>
<a href="index.php?xem=addreviews"><butto type="button" class="btn btn-primary">Thêm FB</button></a>
		<table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Title</th>
        
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from reviews order by thutu asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr  onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editreviews&id=<?php echo $ds['id_reviews'] ?>'">
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['name'] ?></td>
      
        
        <td><a href="modules/reviews/function.php?id=<?php echo $ds['id_reviews'] ?>"><button name="" class="form-control btn-primary">Xóa</button></a></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>

