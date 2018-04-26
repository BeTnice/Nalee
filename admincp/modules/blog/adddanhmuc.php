<h3 class="page-header">Category</h3>
<a href="index.php?xem=addblog"><butto type="button" class="btn btn-primary">Thêm Blog</button></a><br><br>
		<form action="../admincp/modules/blog/functiondanhmuc.php" method="post" accept-charset="utf-8">
			<input type="text" name="namecate" class="form-control" required="" placeholder="Title"><br>
			
			<input type="text" name="thutu" class="form-control" required="" placeholder="Thứ tự">
			<br>
			<input type="submit" name="addcate" class="form-control btn-primary" value="Thêm">
		</form>

		<table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Category</th>
     
        <th ></th>
      </tr>
    </thead>
    <tbody>
                            <?php  
                            include 'config.php';
                            $sql = "select * from cateblog where id_cateblog != 0 order by thutu asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr>
   
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['name_cateblog'] ?></td>
         
        
        <td><a href="modules/blog/functiondanhmuc.php?id=<?php echo $ds['id_cateblog'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>