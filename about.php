<!DOCTYPE html>
<html lang="vn">

<?php 
$title = 'Giới thiệu';
include('includes/header.php');
      
 ?>

<body id="home">
<?php include('menu.php'); ?>

<div class="page_title_ctn"> 
		<div class="container-fluid">
          <h2>Giới thiệu</h2>
          
          	<ol class="breadcrumb">
              <li><a href="#">Trang chủ</a></li>
               <li class="active"><span>Giới thiệu </span></li>
             
            </ol>
           
    	</div>
    </div>  

 <section class="blogstyle-1">
        <div class="container">
            <div class="row">
                <?php
             $sql = "select * from blog where id_blog = 9 order by thutu asc limit 3";
                                
    $run = mysql_query($sql);
                                  
    $ds = mysql_fetch_array($run); 
    echo $ds['noidung'];
      ?>
            </div><!-- /.row -->
        </div> 
    </section>  

<?php include('includes/footer.php') ?>
 


</body>

</html>