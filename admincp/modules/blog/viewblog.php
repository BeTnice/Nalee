<h3 class="page-header" style="margin-top: 2em">Danh sách Blog</h3>
<a href="index.php?xem=addblog"><butto type="button" class="btn btn-primary">Thêm Blog</button></a>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Danh mục</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from blog where id_blog !=9 order by thutu asc";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                     $sql1 = "select * from cateblog where id_cateblog = '".$ds['id_cateblog']."' ";
                                  $run1 = mysql_query($sql1);
                             
                           
                                 $ds1=mysql_fetch_array($run1);
                               ?>
   <tr onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editblog&id=<?php echo $ds['id_blog'] ?>'">
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['title_blog'] ?></td>
       <td><?php echo $ds1['name_cateblog'] ?></td>
       
        <td><?php if($_SESSION["level"] ==1){ ?><a href="modules/blog/function.php?id=<?php echo $ds['id_blog'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a><?php } ?></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>

