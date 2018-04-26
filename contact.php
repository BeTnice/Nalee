<!DOCTYPE html>
<html lang="vn">

<?php 
$title = 'Liên hệ';
include('includes/header.php');
      
 ?>

<body id="home">
<?php include('menu.php'); ?>


    <div class="page_title_ctn">
        <div class="container-fluid">
            <h2>Liện hệ</h2>

            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active"><span>Liên hệ</span></li>
            </ol>

        </div>
    </div>

    <!-- Contact Section -->

    <section class="contactus-one" id="contactus">
        <!-- Section id-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                     <div class="map1">
                        <iframe class="map2" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d979.9186621279272!2d106.68545396485126!3d10.759538518567467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a9001db326c96b2!2sNALEE+Spa+by+Diep+Bao+Ngoc!5e0!3m2!1sen!2s!4v1509944164049" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class=" col-md-5 col-sm-6">
                    <div class="contact-block">
                        <div class="dart-headingstyle-one dart-mb-20">
                            <!--Style 1-->
                            <h2 class="dart-heading">Contact US</h2>
                        </div>

                        <div class="contact-form">
                            <!-- contact form -->
                            <form class="row" action="includes/sendmail.php" id="contact" name="contact" method="post">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control a" name="inname" id="InputName" placeholder="Họ tên" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control b" name="inmail" id="InputEmail" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control c" name="intitle" id="InputWeb" placeholder="Tiêu đề" required="">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="inmes" id="InputMessage" rows="4" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button name="sendmes" type="submit" class="btn normal-btn dart-btn-xs">SEND MESSAGE</button>
                                </div>
                            </form>
                        </div>

                        <hr>

                        <div class=" row contact-info">
                            <div class="col-md-12 col-sm-12">
                                <p class="addre"><i class="fa fa-map-marker"></i>10, Lorem Ipsum, Dummy Road, NY 487954, USA</p>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <p class="phone-call"><i class="fa fa-phone"></i> <a href="tel:+10484579845">+12 345 789 1234</a></p>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <p class="mail-id"><i class="fa fa-envelope"></i> info@yourdomain.com</p>
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