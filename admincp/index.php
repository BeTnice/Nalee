<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
     include 'config.php';
    include('header.php') ?>
 
  </head>

  <body>
  <script>
 
      CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
      var editor = CKEDITOR.replaceAll( 'ckeditor', {}

  </script>
    <?php include('menu.php') ?>
    <div class="container-fluid">
      <div class="row">

        <?php include('slidemenu.php') ?>
       <?php include('content.php') ?>

      </div>
    </div>
  <?php include('footer.php') ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="/js/jquery.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
  
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
