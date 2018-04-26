<!DOCTYPE html>
<html lang="vn">

<?php 
include('cvtext.php'); 
$title = "Spa";
include('includes/header.php');
 


// BƯỚC 2: TÌM TỔNG SỐ RECORDS
  $result = mysql_query('select count(id_sv) as total from sv where public = 1');
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
            <h2>Dịch vụ Spa</h2>

            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active"><span>Dịch vụ Spa</span></li>
            </ol>

        </div>
    </div>

<div class="container-fluid">
  <div class="gallery">
 
      <div class="gallery-grids">
        <?php
             $sql = "select * from sv where public = 1 order by thutu asc limit $start, $limit";
                                
    $run = mysql_query($sql);
     if($run){                            
    while ( $ds = mysql_fetch_array($run)) {
       $new_str = utf8tourl(utf8convert($ds['title_sv']));
      ?>
        <div class="col-xs-6 gallery-grid">
          <div class="grid">
            <figure class="effect-roxy">
              <a class="example-image-link" href="spa/<?php echo $new_str?>-<?php echo $ds['id_sv'] ?>.html" data-lightbox="example-set" data-title="">
                <img src="<?php echo $ds['hinhanh'] ?>">
                <figcaption>
                  <h3><?php echo $ds['title_sv'] ?></h3>
                 
                </figcaption> 
              </a>
            </figure>
          </div>
        </div>
<?php }}?>
       
      
        <div class="clearfix"> </div>
      </div>
    
  </div>
</div>
              <div class="pagination-wrap text-right" style="padding-right: 5em">
                 <ul>
                <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev

            if ($current_page > 1 && $total_page > 1){
              ?>

                <li class="next"><a href="http://localhost/nalee/spa/page/'.($current_page-1).'.html"><span class="fa fa-long-arrow-left"></span></a></li>
              
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
                      echo   '<li><a href="http://localhost/nalee/spa/page/'.$i.'.html">'.$i.'</a></li>';
                    
                }
            }
        
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<li class="next"><a href="http://localhost/nalee/spa/page/'.($current_page+1).'html"><span class="fa fa-long-arrow-right"></span></a> </li>';
            }
           ?>
         </ul>
            </div>                

<?php include('includes/footer.php') ?>
 


</body>

</html>