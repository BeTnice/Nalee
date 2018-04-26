<?php include('cvtext.php');  ?>
<div class="lazy slide">
    <?php                  
    $sql = "select * from slide where vitri = 'Banner' order by thutu asc";
                                
    $run = mysql_query($sql);
                                  
    while ($ds = mysql_fetch_array($run)) {
                                    # code...  
     ?>
            <div>
               <a href="<?php echo $ds['link'] ?>"><img src="<?php echo $ds['img_slide'] ?>" alt="<?php echo $ds['title'] ?>" width="100%"></a>
            </div>
            <?php }?>
           

      </div>
  

  <div class="clearfix"></div>

 

   

<div class="container">
            <!-- about-section -->
            <div class="about-section">
              <div class="col-md-12 ab-text w3-agileits">
                    <h3 class="agileits-title">Welcome</h3>
                    <?php                  
                      $sql1 = "select * from giaodien where id_giaodien = 1 ";
                                                  
                      $run1 = mysql_query($sql1);
                                                    
                      $ds1 = mysql_fetch_array($run1); 
                    ?> 
                <h6><?php echo $ds1['title'] ?></h6>
               <!--  <p class="wow slideInUp">Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.Lorem Ipsum has been the industry's standard dummy text ever since.</p> -->
                <div class="start wow flipInX">
                  <!-- <a href="single.html" class="hvr-bounce-to-bottom">Get Started</a> -->
                </div> 
              </div>
              <div class="col-md-12 ab-left w3-agileits" style="margin-left: 2%">
                <div class="grid-about">
                  <div class="col-sm-4 abt-w3limg">
                    <a href="http://localhost/nalee/spa.html">
                    <figure class="effect-jazz">
                      <?php                  
                      $sql2 = "select * from slide where vitri = 'Spa' order by thutu asc limit 1";
                                                  
                      $run2 = mysql_query($sql2);
                                                    
                      $ds2 = mysql_fetch_array($run2); 
                    ?>
                      <img src="<?php echo $ds2['img_slide'] ?>" class="img-responsive center-block" alt=""/>
                      <figcaption>
                        <h4>Good<span>Spa</span></h4>

                        <p><?php echo $ds2['subtitle'] ?></p> 
                      </figcaption>     
                    </figure> 
                    </a>
                  </div>
                  <div class="col-sm-4 abt-w3limg">
                     <a href="http://localhost/nalee/thoi-trang.html">
                    <figure class="effect-jazz">
                       <?php                  
                      $sql3 = "select * from slide where vitri = 'Fashion' order by thutu asc limit 1";
                                                  
                      $run3 = mysql_query($sql3);
                                                    
                      $ds3 = mysql_fetch_array($run3); 
                    ?>
                      <img src="<?php echo $ds3['img_slide'] ?>" class="img-responsive center-block"   alt=""/>
                      <figcaption>
                        <h4>Fashion<span>Center</span></h4>
                        <p><?php echo $ds3['subtitle'] ?></p> 
                      </figcaption>     
                    </figure> 
                  </a>
                  </div>
                  <div class="col-sm-4 abt-w3limg">
                     <a href="http://localhost/nalee/my-pham.html">
              <figure class="effect-jazz">
                <?php                  
                      $sql4 = "select * from slide where vitri = 'Cosmetic' order by thutu asc limit 1";
                                                  
                      $run4 = mysql_query($sql4);
                                                    
                      $ds4 = mysql_fetch_array($run4); 
                    ?>
                <img src="<?php echo $ds4['img_slide'] ?>" class="img-responsive center-block"  alt=""/>
                <figcaption>
                  <h4>Best<span>Cosmetic</span></h4>  
                  <p><?php echo $ds4['subtitle'] ?></p> 
                </figcaption>     
              </figure>
              </a> 
            </div>
                  <div class="clearfix"> </div>
                </div>
               </div>
               
              <div class="clearfix"> </div>
            </div>

      
        </div>

 

  <!-- blog -->
  <div class="csblog">
  <div class="dart-headingstyle-one dart-mb-60 text-center">
    <!--Style 1-->
    <h2 class="dart-heading">Nalee's Blog</h2>
    <img src="images/Icon-sep.png" alt="Nalee's Blog">
  </div>
  <div class="container">
    <div class="row">
       <?php
             $sql = "select * from blog where id_blog != 9 order by thutu asc limit 3";
                                
    $run = mysql_query($sql);
                                  
    while ( $ds = mysql_fetch_array($run)) {
      $new_str = utf8tourl(utf8convert($ds['title_blog']));
      ?>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="item-col">
          <div class="post-wrapper">
            <div class="post-thumb">
              <a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds['id_blog'] ?>.html">
                <figure class="figure">
                  <img class="figure-img img-fluid rounded" alt="<?php echo $ds['title_blog'] ?>" src="<?php echo $ds['hinhanh'] ?>">
                </figure>
              </a>
            </div>
            <div class="post-info">
              <div class="post-date">
                <div class="post-date-inner">
                  <span class="day"><?php 
                  $dinh_dang_cu = $ds['ngay'];  
    $dinh_dang_moi = date("d", strtotime($dinh_dang_cu));  
 
    echo "" .$dinh_dang_moi;
                
                   ?></span>
                  <span class="month"><?php 
                  $dinh_dang_cu = $ds['ngay'];  
    $dinh_dang_moi = date("M", strtotime($dinh_dang_cu));  
 
    echo "" .$dinh_dang_moi;
                
                   ?></span>
                  <span class="year"><?php 
                  $dinh_dang_cu = $ds['ngay'];  
    $dinh_dang_moi = date("Y", strtotime($dinh_dang_cu));  
 
    echo "" .$dinh_dang_moi;
                
                   ?></span>
                </div>
              </div>
              <div class="post-meta">
               <!--  <p class="post-author">Post by
                  <a href="#">admin</a>
                </p> -->
              </div>
              <h3 class="post-title">
                <a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds['id_blog'] ?>.html"><?php echo $ds['title_blog'] ?></a>
              </h3>
              <div class="post-excerpt">
  <p>...</p>
                <?php 
                // $str = htmlentities($ds['noidung']); 
               ?>

              </div>
              <a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds['id_blog'] ?>.html" class="readmore" href="#">
                <span>Read more</span>
              </a>
            </div>
          </div>
        </div>
      </div>
<?php } ?>
      

    </div>
  </div>
</div>