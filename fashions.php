<!DOCTYPE html>
<html lang="vn">

<?php
include('cvtext.php'); 
$title = 'Mỹ phẩm';
include('includes/header.php');
       $result = mysql_query('select count(id_fashion) as total from fashion where noibat = 1');
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
            <h2>Mỹ phẩm</h2>

            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active"><span>Mỹ phẩm</span></li>
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
                                        $sql = "select * from catefs order by thutu asc";
                                                            
                                $run = mysql_query($sql);
                                                              
                                while ( $ds = mysql_fetch_array($run)) {
                                     $new_str = utf8tourl(utf8convert($ds['name_catefs']));
                                     ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" href="http://localhost/nalee/thoi-trang/danh-muc-thoi-trang/<?php echo $new_str?>-<?php echo $ds['id_catefs'] ?>.html" role="button"  data-parent="#accordion" href="#collapseTwo"><?php echo $ds['name_catefs'] ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </aside>
                        
                          
                        </div>
                    </div>

                    <div class="col-sm-9 col-md-8 col-lg-9 border-lft">
                        <div class="fashion-wrap">
                            <div class="row">
                                <div class="gallery-grids">
                            <?php
                                $sql = "select * from fashion order by thutu asc limit $start, $limit";
                                                            
                                $run = mysql_query($sql);
                                                              
                                while ($ds = mysql_fetch_array($run)) {
                                    $new_str = utf8tourl(utf8convert($ds['name_fashion']));

                            ?><a href="thoi-trang/<?php echo $new_str?>-<?php echo $ds['id_fashion'] ?>.html">
                                <div class="col-sm-4 col-md-4">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="<?php echo $ds['img'] ?>" alt="Nalee's San pham">
                                           
                                           <!--  <span class="block-sticker-tag3"> -->
                                            <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView">
                                                <strong>
                                                   <!--  <a href="fashiondetail.php?id=<?php echo $ds['id_fashion'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                                  </strong>
                                                </span>
                                             <!--  </span> -->
                                        </figure>
                                        <div class="block-caption1">
                                         
                                            <div class="clear"></div>
                                            <h4><?php echo $ds['name_fashion'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                                
                                
                            </div>
                        </div>
                        <div class="pagination-wrap text-right">
                            <ul>
                                 <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev

            if ($current_page > 1 && $total_page > 1){
                 echo '<li class="next"><a href="http://localhost/nalee/thoi-trang/page/'.($current_page-1).'.html"><span class="fa fa-long-arrow-left"></span></a> </li>';
                 }
              ?>

         

            <?php 
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<li class="active"><a href="#">'.$i.' <span class="sr-only">(current)</span></a></li>';
                }
                else{
                      echo   '<li><a href="http://localhost/nalee/thoi-trang/page/'.$i.'.html">'.$i.'</a></li>';
                    
                }
            }
        
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<li class="next"><a href="http://localhost/nalee/thoi-trang/page/'.($current_page+1).'.html"><span class="fa fa-long-arrow-right"></span></a> </li>';
            }
           ?>
                            </ul>
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