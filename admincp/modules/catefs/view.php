<h3 class="page-header">Danh sách danh mục</h3>
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
                            $sql = "select * from catefs order by name_catefs asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                    # code...
                               ?>
      <tr>
      
        <td><?php echo $ds['thutu'] ?></td>
        <td><?php echo $ds['name_catefs'] ?></td>

        <td><a href="index.php?xem=editcatefs&id=<?php echo $ds['id_catefs'] ?>"><button class="form-control btn-primary">Sửa</button></a></td>
        <td><a href="modules/catefs/function.php?id=<?php echo $ds['id_catefs'] ?>"><button name="editcate" class="form-control btn-primary">Xóa</button></a></td>
      </tr>
      <?php   } ?>
     
    </tbody>
  </table>


  <h3 class="page-header">Sơ đồ danh mục</h3>

    <?php
    
    $sql = mysql_query("SELECT * FROM catefs");
    echo '<ul>';
    while($row = mysql_fetch_array($sql)){       
        echo '<li><a href="index.php?xem=editcate&id='.$row['id_catefs'].'">'.$row['name_catefs'].'</a> <a href="modules/catefs/function.php?id='.$row['id_catefs'].'" style="color:red">Xóa</a> </li>';   // Tra lai tat ca cac Menu cha
        getSubcategory($row['id_catefs']);        // neu ton tai cac Menu con thi se duoc hien thi
    }   
    echo '</ul>';
      
    /**
     * Ham nay tra lai tat cac cac Menu con
     */
    function getSubcategory($loaicha){
        $sql = mysql_query("SELECT * FROM cate WHERE parent_id = ".$loaicha);   
        while($row = mysql_fetch_array($sql)){
            echo '<ul>';
            echo '<li><a href="index.php?xem=editcate&id='.$row['id_catefs'].'" >'.$row['name_catefs'].'</a>  <a href="modules/catefs/function.php?id='.$row['id_catefs'].'" style="color:red">Xóa</a></li>';
            getSubcategory($row['id_catefs']);         // *
            echo '</ul>';
        }   
    }
?>




 
