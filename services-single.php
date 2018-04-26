<!DOCTYPE html>
<html lang="vn">

<?php 
include('cvtext.php'); 
include('admincp/config.php');
 $sql = "select * from sv where id_sv = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run);
$title = ''.$ds['title_sv'];
$fbdes = ''.$ds['noidung'];
$fbimg =''.$ds['hinhanh'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include('includes/header.php');
      
 ?>

<body id="home">
<?php include('menu.php'); ?>

 <div class="page_title_ctn">
        <div class="container-fluid">
            <?php 
                 $sql = "select * from sv where id_sv = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run);
            ?>
            <h2><?php echo $ds['title_sv'] ?></h2>

            <ol class="breadcrumb">
                <li><a href="http://nalee.asia">Trang chủ</a></li>
                <li><a href="#">Spa</a></li>
                <li class="active"><span><?php echo $ds['title_sv'] ?></span></li>
            </ol>

        </div>
    </div>

    <!-- Blog Post Style 1 -->

    <section class="blog-single" id="blog_s_post">
        <!-- Section id-->
        <div class="container">

            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="blog-posts single-post">
                   
                        <article class="post post-large blog-single-post">
                            <div class="post-image">
                                <img class="img-responsive" src="<?php echo $ds['hinhanh'] ?>" alt="">
                            </div>

                            <div class="post-date">
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
                            </div>
                            <div class="post-content">

                                <h2><a href="#"><?php echo $ds['title_sv'] ?></a></h2>

                                <!-- <div class="post-meta">
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    
                                </div> -->
                        
                                <?php echo $ds['noidung'] ?>


                                <div class="post-block post-share">
                                    <h3><i class="fa fa-share"></i>Share this post</h3>

                                    <!-- AddThis Button BEGIN -->
                                  
                                    <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>-->
                                    <!-- AddThis Button END -->

                                </div>

                               

                                <div class="post-block post-comments clearfix">
                                    <h3><i class="fa fa-comments"></i>Comments</h3>

                                    <ul class="comments">
                                       
                                    </ul>

                                </div>

                              

                            </div>
                        </article>

                    </div>
                </div>


                <div class="col-md-3 col-sm-4">
                    <aside class="sidebar">
                        <div class="datlich">
                            <img src="http://via.placeholder.com/350x350" width="100%">
                        </div>

                        <h4 class="blue">Dịch vụ nổi bật</h4>
                        <ul class="nav nav-list primary">
                            <?php 
                                $sql1 = "select * from sv where noibat = 1 and id_sv != '".$ds['id_sv']."'";
                                                            
                                $run1 = mysql_query($sql1);
                                                                                              
                                while ($ds1 = mysql_fetch_array($run1)) {
                                    $new_str = utf8tourl(utf8convert($ds1['title_sv']));
                            ?>
                            <li><a href="http://localhost/nalee/spa/<?php echo $new_str?>-<?php echo $ds1['id_sv'] ?>.html"><?php echo $ds1['title_sv'] ?></a></li>
                            <?php } ?>
                           
                        </ul>

            

                    </aside>
                
                    <!-- <aside class="widget widget_tag_cloud">
                        <hr class="sep-line" />
                        <h4 class="blue">Popular Tags</h4>
                        <ul class="list-inline clearfix">
                            <li><a href="#">Amazing</a></li>
                            <li><a href="#">Envato</a></li>
                            <li><a href="#">Themes</a></li>
                            <li><a href="#">Clean</a></li>
                            <li><a href="#">Responsiveness</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">IOS</a></li>
                            <li><a href="#">Flat</a></li>
                            <li><a href="#">Design</a></li>
                        </ul>
                    </aside> -->
                </div>
            </div>
        </div>
    </section>

 

<?php include('includes/footer.php') ?>
 


</body>

</html>