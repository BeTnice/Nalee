 <?php include('config.php') ?>
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><a href="index.php?xem=viewproduct">Mỹ phẩm</a></h4>
              <span class="text-muted">
                <?php 
                             $result=mysql_query("SELECT count(*) as total from product");
                             $data=mysql_fetch_assoc($result);
                             echo $data['total'];
                               
               ?>
                 
               </span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><a href="index.php?xem=addsv">Dịch vụ</a></h4>
              <span class="text-muted">
                <?php 
                             $result=mysql_query("SELECT count(*) as total from sv");
                             $data=mysql_fetch_assoc($result);
                             echo $data['total'];
                               
               ?>
              </span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><a href="index.php?xem=viewfashion">Thời trang</a></h4>
              <span class="text-muted">
                <?php 
                             $result=mysql_query("SELECT count(*) as total from fashion");
                             $data=mysql_fetch_assoc($result);
                             echo $data['total'];
                               
               ?>
              </span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><a href="index.php?xem=addblog">Blog</a></h4>
              <span class="text-muted">
              <?php 
                             $result=mysql_query("SELECT count(*) as total from blog where id_blog != 9");
                             $data=mysql_fetch_assoc($result);
                             echo $data['total'];
                               
               ?>

              </span>
            </div>
          </div>

   
     