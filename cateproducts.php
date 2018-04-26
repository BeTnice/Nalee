<!DOCTYPE html>
<html lang="vn">

<?php 
include('admincp/config.php');
include('cvtext.php');
$sql2 = "select * from cate where id_cate = $_GET[id] ";                                                           
$run2 = mysql_query($sql2);
$ds2 = mysql_fetch_array($run2);
$title = ''.$ds2['name_cate'];
include('includes/header.php');
     
 ?>
<body id="home">
<?php include('menu.php'); ?>


    <div class="page_title_ctn">
        <div class="container-fluid">
            <h2><?php echo $ds2['name_cate'] ?></h2>

            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active"><span><?php echo $ds2['name_cate'] ?></span></li>
            </ol>

        </div>
    </div>

    <!--Shoping with Sidebar Section-->

    <section class="sidebar-shop shop-pages dart-pt-20">
        <div class="container">
            <div class="content-wrap ">
               
                <div class="row">
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <div class="shop-sidebar mt-20">
                            <aside class="widget">
                                <h2 class="widget-title">Danh mục</h2>
                                <div class="panel-group shop-links-widget" id="accordion" role="tablist" aria-multiselectable="true">
                                    <?php
                                        $sql = "select * from cate order by thutu asc";
                                                            
                                $run = mysql_query($sql);
                                                              
                                while ( $ds = mysql_fetch_array($run)) {
                                     $new_str = utf8tourl(utf8convert($ds['name_cate']));
                                     ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" href="http://localhost/nalee/my-pham/danh-muc/<?php echo $new_str?>-<?php echo $ds['id_cate'] ?>.html" role="button"  data-parent="#accordion" href="#collapseTwo"><?php echo $ds['name_cate'] ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </aside>
                        
                          
                        </div>
                    </div>

                    <div class="col-sm-9 col-md-8 col-lg-9 border-lft">
                        <div class="product-wrap">
                            <div class="row">
                                <div class="gallery-grids">
                            <?php
                                $sql = "select * from product where id_cate = $_GET[id] order by thutu asc";
                                                            
                                $run = mysql_query($sql);
                                                              
                                while ( $ds = mysql_fetch_array($run)) {
                                    $new_str = utf8tourl(utf8convert($ds['name_product']));
                            ?><a href="http://localhost/nalee/my-pham/<?php echo $new_str?>-<?php echo $ds['id_product'] ?>.html">
                                <div class="col-sm-4 col-md-4">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="<?php echo $ds['img'] ?>" alt="Nalee's San pham">
                                           
                                           <!--  <span class="block-sticker-tag3"> -->
                                            <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView">
                                                <strong>
                                                   <!--  <a href="productdetail.php?id=<?php echo $ds['id_product'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                                  </strong>
                                                </span>
                                             <!--  </span> -->
                                        </figure>
                                        <div class="block-caption1">
                                         
                                            <div class="clear"></div>
                                            <h4><?php echo $ds['name_product'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                                
                                
                            </div>
                        </div>
                      
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>  

<?php include('includes/footer.php') ?>
 


</body>

</html>