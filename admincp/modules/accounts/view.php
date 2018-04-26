<h3 class="page-header">Danh sách Accounts</h3>
      
		<table class="table table-hover">
    <thead>
      <tr>
        <th>Tài khoản</th>
        <th>Tên thành viên</th>
        <th>Cấp độ</th>
      </tr>
    </thead>
    <tbody><?php if($_SESSION["level"] == 1){ ?>
      <a href="index.php?xem=addaccounts"><butto type="button" class="btn btn-primary">Thêm Account</button></a>
                            <?php  
                            include 'config.php';
                            $sql = "select * from admin order by user asc;
                            ";
                                  $run = mysql_query($sql);
                             
                           
                                 while($ds=mysql_fetch_array($run)){
                                  
                               ?>


      <tr  onmouseover="this.style.cursor='pointer'"  onclick="window.location= 'index.php?xem=editaccounts&id=<?php echo $ds['id_admin'] ?>'">
      

        <td><?php echo $ds['user'] ?></td>
        <td><?php echo $ds['name'] ?></td>
        <td>
                <?php
                    if ($ds["level"] == 1) {
                      echo "Administrator";
                    }else{
                      echo "Editor";
                    }
                ?>
              </td>
        <?php if($ds['user'] != 'admin'){ ?>
        <td><a href="modules/accounts/function.php?id=<?php echo $ds['id_admin'] ?>"><button name="" class="form-control btn-primary">Xóa</button></a>
            <?php } ?>
        </td>
      </tr>

        <?php } }else{ 
          $sql2 = "select * from admin where id_admin = '".$_SESSION["id_user"]."'";
          $run2 = mysql_query($sql2);
          $ds2=mysql_fetch_array($run2);
          $id_user = $_SESSION["id_user"];
  
          ?>
          <tr>
          <td><?php echo $ds2['user'] ?></td>
        <td><?php echo $ds2['name'] ?></td>
        <td>
                <?php
                    if ($ds2["level"] == 1) {
                      echo "Administrator";
                    }else{
                      echo "Editor";
                    }
                ?>
              </td>
        
        <td><a href="index.php?xem=editaccounts&id=<?php echo ''.$id_user; ?> "><button name="" class="form-control btn-primary">Đổi mật khẩu</button></a>

        </td>
        <?php } ?>
      </tr>
      
     
    </tbody>
  </table>

