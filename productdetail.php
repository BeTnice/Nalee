
<!DOCTYPE html>
<html lang="vn">

<?php 
include('admincp/config.php');
 $sql = "select * from product where id_product = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run);
$title = ''.$ds['name_product'];
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
            <?php $sql = "select * from product where id_product = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run); ?>
          <h2><?php echo $ds['name_product'] ?></h2>
          
          	<ol class="breadcrumb">
              <li><a href="http://nalee.asia">Trang chủ</a></li>
              <li class="active"><span><?php echo $ds['name_product'] ?></span></li>
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
                           <div class="item">            
            <div class="clearfix" style="max-width:474px;">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <li data-thumb="http://localhost/nalee/img/thumb/cS-1.jpg"> 
                        <img src="http://localhost/nalee/img/cS-1.jpg" width="100%" />
                         </li>
                    <li data-thumb="http://localhost/nalee/img/thumb/cS-2.jpg"> 
                        <img src="http://localhost/nalee/img/cS-2.jpg" width="100%" />
                         </li>
                    
                </ul>
            </div>
        </div>
                            <!-- end of template --> 
                            
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="product-content dart-mt-30">                                     
                                <div class="product-title">
                                    <h2><?php echo $ds['name_product'] ?></h2> 
                                                                                    
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
    <!-- <li><a data-toggle="pill" href="#menu2">Reviews</a></li> -->

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