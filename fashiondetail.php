
<!DOCTYPE html>
<html lang="vn">

<?php 
include('admincp/config.php');
 $sql = "select * from fashion where id_fashion = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run);
$title = ''.$ds['name_fashion'];
$fbdes = ''.$ds['mota'];
$fbimg =''.$ds['img'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include('includes/header.php');
      
 ?>


<body id="home">
<?php include('menu.php'); ?>

 <!--Page Title-->
    
  <div class="page_title_ctn"> 
    <div class="container-fluid">
      <?php 
      $sql = "select * from fashion where id_fashion = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run);
      ?>
          <h2><?php echo $ds['name_fashion'] ?></h2>
          
            <ol class="breadcrumb">
              <li><a href="http://nalee.asia">Trang chủ</a></li>
              <li class="active"><span><?php echo $ds['name_fashion'] ?></span></li>
            </ol>
           
      </div>
    </div>  
    
    
    <!--Shoping with Sidebar Section-->
    <div class="shop-pages">
        <section class="product-single-wrap section-padding">
            <div class="container">
                <div class="product-content-wrap">
                    <div class="row">                        
                        <div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-0">
                            
                            <!-- template -->
                            <div class="ms-showcase2-template ms-showcase2-vertical">
                                        <!-- masterslider -->
                                        <div class="master-slider ms-skin-default" id="masterslidershop">
                                            <div class="ms-slide">
                                                <img src="<?php echo $ds['img'] ?>" alt="lorem ipsum dolor sit"/> 
                                                <img class="ms-thumb" src="<?php echo $ds['img'] ?>" alt="<?php echo $ds['name_fashion'] ?>" />
                                            </div>
                                            <?php 
                                           
                                             $sql1 = "select * from images where id_fashion = $_GET[id]";
                                                                                                        
                                             $run1 = mysql_query($sql1);
                                                                                                          
                                             while($ds1 = mysql_fetch_array($run1)){
                                             ?>

                                            <div class="ms-slide">
                                                <img src="vendor/masterslider/style/blank.gif" data-src="http://localhost/nalee/images/images/<?php echo $ds1['link'] ?>" alt="<?php echo $ds['name_fashion'] ?>"/>    
                                                 <img class="ms-thumb" src="http://localhost/nalee/images/images/<?php echo $ds1['link'] ?>" alt="<?php echo $ds['name_fashion'] ?>" />
                                            </div>
                                          <?php } ?>

                                          
                                        </div>
                                        <!-- end of masterslider -->
                            </div>
                            <!-- end of template --> 
                            
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="product-content dart-mt-30">                                     
                                <div class="product-title">
                                    <h2><?php echo $ds['name_fashion'] ?></h2> 
                                                                                    
                                </div>
                              
                                <div class="product-description">
                                    
                                        <?php echo $ds['mota'] ?>
                                    
                                    
                                    
                                    <!-- <ul class="list-unstyled">
                                        <li>SKU: LK-R65</li>
                                        <li>Category: Shirts</li>
                                        <li>Tags: Polo, T-shirts, Sleeve</li>
                                    </ul> -->
                                    <div class="social-media">
                                        <span class="black-color">Share with friends</span>
                                        <ul class="social-icons list-unstyled">

                                            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=142657149683128';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="fb-share-button" data-href="<?php  echo ''.$actual_link; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fperfecta.com.vn%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
                                            <li> <a href="#"> <span class="fa fa-facebook"></span> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-twitter"></span> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-pinterest"></span> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-instagram"></span> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-skype"></span> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-dribbble"></span> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>        
    </section>

    </div>             
                   
 <div class="container tabproduct">

  <ul class="nav nav-pills">
 
    <li class="active"><a data-toggle="pill" href="#menu1">Thông tin</a></li>
    <li><a data-toggle="pill" href="#menu2">Reviews</a></li>

  </ul>
 
  <div class="tab-content">
  
    <div id="menu1" class="tab-pane fade in active">
      <?php echo $ds['thongtin'] ?>
    </div>
    <div id="menu2" class="tab-pane fade">
            
    </div>
  </div>
</div>


<?php include('includes/footer.php') ?>
 


</body>

</html>