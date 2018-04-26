<!DOCTYPE html>
<html lang="vn">

<?php 
include('admincp/config.php');
$sql2 = "select * from cateblog where id_cateblog = $_GET[id]";                                                           
$run2 = mysql_query($sql2);
$ds2 = mysql_fetch_array($run2);
$title = ''.$ds2['name_cateblog'];
include('includes/header.php');
?>

<body id="home">
<?php include('menu.php'); ?>

<div class="page_title_ctn"> 
		<div class="container-fluid">
          <h2>Nalee's Blog</h2>
          
          	<ol class="breadcrumb">
              <li><a href="#">Trang chủ</a></li>
              <li class="active"><span><?php echo $ds2['name_cateblog'] ?></span></li>
            </ol>
           
    	</div>
    </div>  

 <section class="blogstyle-1">
        <div class="container">
            <div class="row">
                 <?php
                                        $sql = "select * from blog where id_blog != 9 and id_cateblog = $_GET[id] order by thutu asc";
                                                            
                                $run = mysql_query($sql);
                                                              
                                while ( $ds = mysql_fetch_array($run)) {
                                     ?>
                <div class="col-md-4 col-sm-4">
                    <article class="blog-post-container clearfix">
                        <div class="post-thumbnail">
                            <a href="blog-single.php?id=<?php echo $ds['id_blog'] ?>"><img src="<?php echo $ds['hinhanh'] ?>" class="img-responsive " alt="Image"></a>
                        </div><!-- /.post-thumbnail -->
                        
                        <div class="blog-content">
                            <div class="dart-header">
                                <h4 class="dart-title"><a href="blog-single.php?id=<?php echo $ds['id_blog'] ?>"><?php echo $ds['title_blog'] ?></a></h4>
                                <div class="dart-meta">
                                    <ul class="list-unstyled">
                                        <!-- <li><span class="author"> By: <a href="#">Admin</a></span></li> -->
                                        <li><span class="posted-date"><a href="blog-single.php?id=<?php echo $ds['id_blog'] ?>"><?php 
                  $dinh_dang_cu = $ds['ngay'];  
    $dinh_dang_moi = date("d-M-Y", strtotime($dinh_dang_cu));  
 
    echo "" .$dinh_dang_moi;
                
                   ?></a></span></li>
                                    </ul>
                                </div><!-- /.dart-meta -->
                            </div><!-- /.dart-header -->
    
                            <div class="dart-content">
                                <p> ...</p>
                            </div><!-- /.dart-content -->
    
                            <div class="dart-footer">
                                <ul class="dart-meta clearfix list-unstyled">
                             
                                    <li><a class="pull-right" href="blog-single.php?id=<?php echo $ds['id_blog'] ?>"> Xem chi tiết <i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div><!-- /.dart-footer -->
                        </div><!-- /.blog-content -->
                    </article>
                </div>
                <?php } ?>
            </div><!-- /.row -->
           
        </div> 
    </section>  

<?php include('includes/footer.php') ?>
 


</body>

</html>