<h3 class="page-header">Danh sách Video</h3>
<a href="index.php?xem=addvideo"><butto type="button" class="btn btn-primary">Thêm Video</button></a>
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
                            $sql = "select * from video order by thutu asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr  onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editvideo&id=<?php echo $ds['id_video'] ?>'">
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['title'] ?></td>
      
        
        <td><a href="modules/video/function.php?id=<?php echo $ds['id_video'] ?>"><button name="" class="form-control btn-primary">Xóa</button></a></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>

