<?php include('admincp/config.php');?>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Nalee's Company">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/nalee/images/logo2.png">
  <link href="http://localhost/nalee/css/feature.css" rel="stylesheet">
  <title><?php echo $title ?></title>
<!--   Facebook -->
  <meta property="og:url"           content="<?php echo $actual_link ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $title ?>" />
  <meta property="og:description"   content="<?php echo $fbdes ?>" />
  <meta property="og:image"         content="<?php echo $fbimg ?>" />
<!--   Facebook -->
  <!-- Bootstrap core CSS -->
  <link href="http://localhost/nalee/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="http://localhost/nalee/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="http://localhost/nalee/js/jquery.js"></script>
  <!-- Custom Fonts -->
  <link href="http://localhost/nalee/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- template CSS -->
  <link href="http://localhost/nalee/css/style.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="http://localhost/nalee/css/custom.css" rel="stylesheet">

  <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="http://localhost/nalee/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/nalee/vendor/slick/slick-theme.css">



   <link rel="stylesheet" href="http://localhost/nalee/vendor/masterslider/style/masterslider.css" />
    
    <!-- Master Slider Skin -->
    <link href="http://localhost/nalee/vendor/lightslider-master/css/lightslider.css" rel="stylesheet" type="text/css" />

    <!-- masterSlider Template Style -->
 

    <!-- Master Slider Skin -->
    <link href="http://localhost/nalee/vendor/masterslider/skins/default/style.css" rel="stylesheet" type="text/css" />

    <!-- masterSlider Template Style -->
    <link href="http://localhost/nalee/vendor/masterslider/style/ms-layers-style.css" rel="stylesheet" type="text/css">

    <!-- owl Slider Style -->
    <script>
       $(document).ready(function() {
      $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
        gallery:true,
      item:1,
      // vertical:true,
      // verticalHeight:295,
      mode:'fade',
      vThumbWidth:50,
      thumbItem:8,
      thumbMargin:4,
      slideMargin:0,
   
    controls:false,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
    });
    </script>
  
</head>