<!DOCTYPE html>
<html lang="vn">

<?php 
include('cvtext.php'); 
$title = "Blog";
include('includes/header.php');
      $result = mysql_query('select count(id_blog) as total from blog where id_blog !=9 and noibat = 1');
        $row = mysql_fetch_assoc($result);
        $total_records = $row['total'];
   // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 6;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;   
 ?>

<body id="home">
<?php include('menu.php'); ?>

<div class="page_title_ctn"> 
		<div class="container-fluid">
          <h2>Blog</h2>
          
          	<ol class="breadcrumb">
              <li><a href="#">Trang chủ</a></li>
              <li class="active"><span>Blog</span></li>
            </ol>
           
    	</div>
    </div>  

 <section class="blogstyle-1">
        <div class="container">
            <div class="row">
                 <?php
                                        $sql = "select * from blog where id_blog != 9 order by thutu asc limit $start, $limit";
                                                            
                                $run = mysql_query($sql);
                                                              
                                while ( $ds = mysql_fetch_array($run)) {
                                    $new_str = utf8tourl(utf8convert($ds['title_blog']));
                                     ?>
                <div class="col-md-4 col-sm-4">
                    <article class="blog-post-container clearfix">
                        <div class="post-thumbnail">
                            <a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds['id_blog'] ?>.html"><img src="<?php echo $ds['hinhanh'] ?>" class="img-responsive " alt="Image"></a>
                        </div><!-- /.post-thumbnail -->
                        
                        <div class="blog-content">
                            <div class="dart-header">
                                <h4 class="dart-title"><a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds['id_blog'] ?>.html"><?php echo $ds['title_blog'] ?></a></h4>
                                <div class="dart-meta">
                                    <ul class="list-unstyled">
                                        <!-- <li><span class="author"> By: <a href="#">Admin</a></span></li> -->
                                        <li><span class="posted-date"><a href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds['id_blog'] ?>.html"><?php 
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
                             
                                    <li><a class="pull-right" href="http://localhost/nalee/blog/<?php echo $new_str?>-<?php echo $ds['id_blog'] ?>.html"> Xem chi tiết <i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div><!-- /.dart-footer -->
                        </div><!-- /.blog-content -->
                    </article>
                </div>
                <?php } ?>
            </div><!-- /.row -->
            <div class="pagination-wrap text-right">
                            <ul>
                                 <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev

            if ($current_page > 1 && $total_page > 1){
              ?>

                <li class="next"><a href="http://localhost/nalee/blog/page/'.($current_page-1).'.html"><span class="fa fa-long-arrow-left"></span></a></li>
              
                <?php } ?>

            <?php 
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<li class="active"><a href="#">'.$i.' <span class="sr-only">(current)</span></a></li>';
                }
                else{
                      echo   '<li><a href="http://localhost/nalee/blog/page/'.$i.'.html">'.$i.'</a></li>';
                    
                }
            }
        
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<li class="next"><a href="http://localhost/nalee/blog/page/'.($current_page+1).'html"><span class="fa fa-long-arrow-right"></span></a> </li>';
            }
           ?>
                            </ul>
                        </div>
        </div> 
    </section>  

<?php include('includes/footer.php') ?>
 


</body>

</html>