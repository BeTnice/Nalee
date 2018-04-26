
<!-- /map -->
<!-- contact -->
<div class="footer1">
   <hr> 
    <div class="container">
     
      <div class="col-sm-3 col-xs-6 footer-grids"> 
        <h3>Contact Me</h3>
        <?php                  
                      $sql = "select * from giaodien where id_giaodien = 1 ";
                                                  
                      $run = mysql_query($sql);
                                                    
                      $ds = mysql_fetch_array($run); 

                      echo ''.$ds['footer'];
                    ?>
      </div>
     <!--  <div class="col-sm-4 col-xs-3 footer-grids">
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=142657149683128';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
      </div>  -->
      <div class="col-sm-5 col-xs-12 footer-grids">
        <h3>Subscribe</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
        <form action="../includes/sendmail.php" method="post">
          <input type="email" name="email" placeholder="Enter your email" required="">
          <input type="submit" name="sendmail" value="">
        </form> 
      </div>
      <div class="clearfix"> </div> 
    </div>
  </div>
  <!-- Footer -->

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="http://localhost/nalee/js/ie10-viewport-bug-workaround.js"></script>

  <!-- jQuery -->
  <script src="http://localhost/nalee/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="http://localhost/nalee/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Nav JavaScript -->
  <script src="http://localhost/nalee/js/awesomenav.js"></script>

  <!-- jQuery -->

  <!-- owl Slider JavaScript -->
  <script src="http://localhost/nalee/js/smoothscroll.js"></script>
    <script src="http://localhost/nalee/js/index.js"></script>

  <!-- Counter required files -->

<script src="http://localhost/nalee/vendor/lightslider-master/js/lightslider.js"></script>
  <!-- template JavaScript -->
  <script src="http://localhost/nalee/js/template.js"></script>
  <script src="http://localhost/nalee/vendor/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- custom JavaScript -->

  <script src="http://localhost/nalee/vendor/masterslider/masterslider.js"></script>
  <script src="http://localhost/nalee/vendor/masterslider/jquery.easing.min.js"></script>


    <!-- custom JavaScript -->
    <script src="http://localhost/nalee/js/custom.js"></script>

    <!-- owl Slider JavaScript -->

<script type="text/javascript">
 
$(document).ready(function(){
 
        $(".productDescription").hide();
        $(".show_hide").show();
 
    $('.show_hide').click(function(){
    $(".productDescription").slideToggle();
    return false;
    });
 
});
 
</script>



