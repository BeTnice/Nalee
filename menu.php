    <div class="loader">
    <div id="awsload-pageloading">
      <div class="awsload-wrap">
        <ul class="awsload-divi">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="top-container">
    <div class="container-fluid">
      <div class="row">
        <div class="top-column-left">
          <ul class="contact-line">
            <li>
              <i class="fa fa-envelope"></i> info@yourdomain.com</li>
            <li>
              <i class="fa fa-phone"></i> (0021)-123-456-789-90</li>
          </ul>
        </div>
        <div class="top-column-right">

          <div class="top-social-network">
            <a data-toggle="modal" data-target="#myModal" href="#" style="font-weight: bold">
              Đăng ký thành viên |
            </a>
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
            <a href="#">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fa fa-pinterest"></i>
            </a>
            <a href="#">
              <i class="fa fa-dribbble"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End top area -->
  <div class="clearfix"></div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Đăng ký thành viên</h4>
        </div>
        <div class="modal-body">
          <form action="includes/sendmail.php" method="post">
            <div class="dktv">
              <input type="text" placeholder="Họ tên" name="hoten" >
              <br><br>
              <input type="email" placeholder="Email" name="email" >
              <br><br>
              <input type="text" placeholder="Số điện thoại" name="sdt" >
            </div>
              <center><input type="submit" class="readmore" name="dangky" value="Đăng ký"></center>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  <nav class="navbar navbar-default navbar-sticky awesomenav">
    <!-- Start Top Search -->
    <!-- <div class="top-search">
      <div class="container-fluid">
        <div class="input-group">
          <span class="input-group-addon">
            <i class="fa fa-search"></i>
          </span>
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-addon close-search">
            <i class="fa fa-times"></i>
          </span>
        </div>
      </div>
    </div> -->
    <!-- End Top Search -->

    <!-- Start Atribute Navigation -->
  <!--   <div class="attr-nav">
      <ul>
        <li class="search">
          <a href="#">
            <i class="fa fa-search"></i>
          </a>
        </li>
        
      </ul>
    </div> -->
    <!-- End Atribute Navigation -->


    <!-- Start Header Navigation -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="index.php">
         <?php                  
                      $sql = "select * from giaodien where id_giaodien = 1 ";
                                                  
                      $run = mysql_query($sql);
                                                    
                      $ds = mysql_fetch_array($run); 
                    ?> 
        <img src="<?php echo $ds['logo'] ?>" class="logo" alt="">
      </a>
    </div>
    <!-- End Header Navigation -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <?php ?>
        <li <?php echo ($title == 'Trang chủ') ? 'class="active"' : '';?> >
          <a href="http://localhost/nalee/">Trang chủ</a>
        </li>
        <li <?php echo ($title == 'Giới thiệu') ? 'class="active"' : '';?>>
          <a href="http://localhost/nalee/gioi-thieu.html">Giới thiệu</a>
        </li>

        <li <?php echo ($title == 'Spa') ? 'class="active"' : '';?>>
          <a href="http://localhost/nalee/spa.html">Spa</a>
        </li>

        <li <?php echo ($title == 'Thời trang') ? 'class="active"' : '';?>>
          <a href="http://localhost/nalee/thoi-trang.html">Thời trang</a>
        </li>
         <li <?php echo ($title == 'Mỹ phẩm') ? 'class="active"' : '';?>>
          <a href="http://localhost/nalee/my-pham.html">Mỹ phẩm</a>
        </li>
        <li <?php echo ($title == 'Blog') ? 'class="active"' : '';?>>
          <a href="http://localhost/nalee/blog.html">Blog</a>
        </li>
        <li <?php echo ($title == 'Liên hệ') ? 'class="active"' : '';?>>
          <a href="http://localhost/nalee/lien-he.html">Liên hệ</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>

  </nav>