<h3 class="page-header" style="margin-top: 2em">Danh sách Spa</h3>
<a href="index.php?xem=addsv"><butto type="button" class="btn btn-primary">Thêm Spa</button></a>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Public</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from sv order by thutu asc
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
   <tr onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editsv&id=<?php echo $ds['id_sv'] ?>'">
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['title_sv'] ?></td>
        <td><?php if($ds['noibat']==1){
          echo 'YES';
        }else{echo 'NO';}?></td>
       
        <td><?php if($_SESSION["level"] ==1){ ?><a href="modules/service/function.php?id=<?php echo $ds['id_sv'] ?>"><button class="form-control btn-primary">Xóa</button></a><?php } ?></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>

