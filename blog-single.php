<!DOCTYPE html>
<html lang="vn">

<?php 
include('cvtext.php'); 
include('admincp/config.php');
 $sql = "select * from blog where id_blog = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run);
$title = ''.$ds['title_blog'];
$fbdes = ''.$ds['noidung'];
$fbimg =''.$ds['hinhanh'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include('includes/header.php');
      
 ?>

<body id="home">
<?php include('menu.php'); ?>
                            
<div class="page_title_ctn">
        <div class="container-fluid">
            <h2>Nalee's Post</h2>
    <?php $sql = "select * from blog where id_blog = $_GET[id]";
                                                            
 $run = mysql_query($sql);
                                                              
 $ds = mysql_fetch_array($run); ?>
            <ol class="breadcrumb">
                <li><a href="http://nalee.asia">Trang chủ</a></li>
                <li><a href="#">Blog</a></li>
                <li class="active"><span><?php echo $ds['title_blog'] ?></span></li>
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

                                <h2><a href="#"><?php echo $ds['title_blog'] ?></a></h2>

                                <div class="post-meta">
                                    <!-- span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span> -->

                                    <span><i class="fa fa-tag"></i> 
                                <?php $sql ="Select * from tag,tag_blog where tag.id_tag = tag_blog.id_tag and tag_blog.id_blog = $_GET[id] ";
                                  $run = mysql_query($sql);
                                  while($gender=mysql_fetch_array($run)){

                                  
                                ?>
                                        <a href="#"><?php echo ''.$gender['name_tag'] ?></a>
                                    <?php } ?>
                                    </span>
                                    
                                </div>

                                <?php echo $ds['noidung'] ?>


                                <div class="post-block post-share">
                                    <h3><i class="fa fa-share"></i>Share this post</h3>

                                    <!-- AddThis Button BEGIN -->
                                   <!--  <div class="addthis_toolbox addthis_default_style ">
                                        <a class="addthis_button_facebook_like"></a>
                                        <a class="addthis_button_tweet"></a>
                                        <a class="addthis_button_pinterest_pinit"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                    </div> -->
                                    <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>-->
                                    <!-- AddThis Button END -->
                                 

                                </div>
                                        <div id="fb-root"></div>
                                      <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                                        fjs.parentNode.insertBefore(js, fjs);
                                      }(document, 'script', 'facebook-jssdk'));</script>
                                    <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                      <!-- Your share button code -->
                                      <div class="fb-share-button" 
                                        data-href="<php echo ''.$actual_link ?>" 
                                        data-layout="button_count">
                                      </div>
                               

                                <div class="post-block post-comments clearfix">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=142657149683128";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php  
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
                                    <h3><i class="fa fa-comments"></i>Comments</h3>

                                    <ul class="comments">
                                       <div class="fb-comments" data-href="<?php  echo ''.$actual_link; ?>" data-width="100%" data-numposts="5"></div>
                                    </ul>

                                </div>

                              

                            </div>
                        </article>

                    </div>
                </div>


                <div class="col-md-3 col-sm-4">
                    <aside class="sidebar">

                        <h4 class="blue">Categories</h4>
                        <ul class="nav nav-list primary">
                            <?php 
                                $sql1 = "select DISTINCT cateblog.name_cateblog,blog.id_cateblog from cateblog,blog where blog.id_cateblog = cateblog.id_cateblog and blog.id_blog != 9";
                                                            
                                $run1 = mysql_query($sql1);
                                                                                              
                                while($ds1 = mysql_fetch_array($run1)){
                                    $new_str = utf8tourl(utf8convert($ds1['name_cateblog']));
                            ?>
                            <li><a href="http://localhost/nalee/blog/danh-muc/<?php echo $new_str?>-<?php echo $ds1['id_cateblog'] ?>.html"><?php echo $ds1['name_cateblog'] ?></a></li>
                            <?php } ?>
                        
                        </ul>

                        <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="active" style="width: 100%"><a><i class="fa fa-star"></i> Relate Blog</a></li>
                             
                            </ul>
                            <div class="tab-content">
                                <?php

                                     $sql2 = "
                                     select 
                                     blog.thutu, blog.title_blog,blog.hinhanh,blog.ngay,blog.id_blog,blog.id_cateblog,cateblog.id_cateblog
                                     from blog,cateblog where blog.id_cateblog = cateblog.id_cateblog and 
                                     blog.id_cateblog ='".$ds['id_cateblog']."' and blog.id_blog != '".$ds['id_blog']."' and blog.id_blog != 9 order by blog.thutu asc limit 4";
                                                            
                                     $run2 = mysql_query($sql2);
                                                                                                  
                                     while($ds2 = mysql_fetch_array($run2)){
                                        $new_str = utf8tourl(utf8convert($ds2['title_blog']));
                                 ?>
                                <div class="tab-pane active" id="popularPosts">
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds2['id_blog'] ?>.html">
                                                        <img src="<?php echo $ds2['hinhanh'] ?>" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds2['id_blog'] ?>.html"><?php echo $ds2['title_blog'] ?></a>
                                                <div class="post-meta">
                                                    <?php 
                  $dinh_dang_cu = $ds['ngay'];  
    $dinh_dang_moi = date("d-M-Y", strtotime($dinh_dang_cu));  
 
    echo "" .$dinh_dang_moi;
                
                   ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>

                            </div>
                        </div>

                        <hr class="sep-line" />

            

                    </aside>
                
                    <aside class="widget widget_tag_cloud">
                        <hr class="sep-line" />
                        <h4 class="blue">Popular Tags</h4>
                        <ul class="list-inline clearfix">
                            <?php $sql ="Select distinct name_tag from tag,tag_blog where tag.id_tag = tag_blog.id_tag";
                                  $run = mysql_query($sql);
                                  while($gender=mysql_fetch_array($run)){

                                  
                                ?>
                                        <li><a href="#"><?php echo ''.$gender['name_tag'] ?></a></li>
                                    <?php } ?>
                            
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </section>

<?php include('includes/footer.php') ?>
 


</body>

</html>