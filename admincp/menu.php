<?php include'config.php' ?>
<!--  Header menu -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Nalee's Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="index.php?xem=giaodien">Giao diện</a></li>

            <li> 
              <a style="cursor: pointer;" data-toggle="dropdown">Quản lý <span class="caret"> </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1"  href="index.php?xem=addcate">Quản lý danh mục SP</a></li> -->
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=viewproduct">Quản lý Mỹ phẩm</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=addbanner">Quản lý Banner</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=addblog">Quản lý Blog</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=addsv">Quản lý Spa</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=mail">Quản lý Mail</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=member">Quản lý Thành viên</a></li>
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=library">Quản lý thư viện hình ảnh</a></li> -->
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=about">Giới thiệu</a></li>  
              </ul>
          </li>
            <li> 
              <a style="cursor: pointer;" data-toggle="dropdown"><?php echo  ''.$_SESSION['name'] ?> <span class="caret"> </a>
        
              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">

                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?xem=viewaccounts">Quản lý tài khoản</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Log out</a></li>
                 
              </ul>
          </li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
        </div>
      </div>
    </nav>
    <!--  Header menu -->