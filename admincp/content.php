<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php
				if(isset($_GET['xem'])){
					$tam = $_GET['xem'];
					}else{
						$tam ='';
					}if($tam == 'tatcasp'){
						include('array/product/allproduct.php');
					}elseif($tam == 'addcate'){
						include('modules/cate/add.php');				
					}elseif($tam == 'editcate'){
						include('modules/cate/edit.php');
					}elseif($tam == 'addblog'){
						include('modules/blog/add.php');
					}elseif($tam == 'editblog'){
						include('modules/blog/edit.php');
					}elseif($tam == 'viewblog'){
						include('modules/blog/viewblog.php');
					}elseif($tam == 'addbanner'){
						include('modules/banner/add.php');
					}elseif($tam == 'editbanner'){
						include('modules/banner/edit.php');
					}elseif($tam == 'library'){
						include('modules/library/fcfinder.php');
					}elseif($tam == 'mail'){
						include('modules/mail/mail.php');
					}elseif($tam == 'member'){
						include('modules/member/mail.php');
					}elseif($tam == 'addvideo'){
						include('modules/video/add.php');
					}elseif($tam == 'editvideo'){
						include('modules/video/edit.php');
					}elseif($tam == 'viewproduct'){
						include('modules/product/view.php');
					}elseif($tam == 'addproduct'){
						include('modules/product/add.php');
					}elseif($tam == 'editproduct'){
						include('modules/product/edit.php');
					}elseif($tam == 'addaccounts'){
						include('modules/accounts/add.php');
					}elseif($tam == 'editaccounts'){
						include('modules/accounts/edit.php');
					}elseif($tam == 'viewaccounts'){
						include('modules/accounts/view.php');
					}elseif($tam == 'addreviews'){
						include('modules/reviews/add.php');
					}elseif($tam == 'editreviews'){
						include('modules/reviews/edit.php');
					}elseif($tam == 'viewsv'){
						include('modules/service/viewblog.php');
					}elseif($tam == 'addsv'){
						include('modules/service/add.php');
					}elseif($tam == 'editsv'){
						include('modules/service/edit.php');
					}elseif($tam == 'about'){
						include('modules/about/edit.php');
					}elseif($tam == 'addfashion'){
						include('modules/fashion/add.php');
					}elseif($tam == 'editfashion'){
						include('modules/fashion/edit.php');
					}elseif($tam == 'viewfashion'){
						include('modules/fashion/view.php');
					}elseif($tam == 'giaodien'){
						include('modules/logo/edit.php');
					}elseif($tam == 'addcatefs'){
						include('modules/catefs/add.php');				
					}elseif($tam == 'editcatefs'){
						include('modules/catefs/edit.php');
					}else{
						include('dashboard.php');}
						
			?>
			 
        </div>