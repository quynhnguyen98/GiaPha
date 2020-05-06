<?php 
     include "config.php";
     $data=$connect->query('select * from sukien');
     
     $result=$data->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Đây là trang web gia phả</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container pt-5 pb-4">
        <?php
        include "minifile/head-footer/head.php"
        ?>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <?php
     include "minifile/head-footer/menu.php"
     ?>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('images/hinhnen.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h2 class="subheading">Gia Phả Họ Nguyễn</h2>
                    <h1>Giới Thiệu </h1>
                    <p class="mb-4"></p>
                    <p><a href="gioithieu.php" class="btn btn-primary mr-md-4 py-2 px-4">Xem Thêm <span
                                class="ion-ios-arrow-forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-3 py-5 order-md-last">
                    <div class="heading-section ftco-animate">
                        <span class="subheading">Services</span>
                        <h2 class="mb-4">Lawn Services</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Get a Quote</a></p>
                    </div>
                </div>
                <div class="col-lg-9 services-wrap px-4 pt-5">
                    <div class="row pt-md-3">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-fence"></span>
                                </div>
                                <div class="text">
                                    <h3></h3>
                                    <p></p>
                                </div>
                                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
                        style="background-image:url(images/gp.jpg);">
                        <a href="https://vimeo.com/45830194"
                            class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="icon-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Gia Phả Họ Nguyễn</span>
                            <h2 class="mb-4">Thông tin mới</h2>
                            <p>Gia phả là nơi để theo dõi sự hình thành của dòng họ, hãy cập nhật tin tức hằng ngày !!
                            </p>
                            <div class="services-wrap">
                                <a href="#ng" class="services-list">Nguồn góc Gia Phả họ Nguyễn
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="lichdo/lich.php" class="services-list">Lịch Các ngày dỗ trong năm
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                                <a href="#sk" class="services-list">Sự kiện đám dỗ
                                    <div class="btn-custom d-flex align-items-center justify-content-center"><span
                                            class="ion-ios-arrow-round-forward"></span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section ftco-animate">
                    <span class="subheading" id="sk">Hình Ảnh &amp; Sự Kiện</span>
                    <h2 class="mb-4">Sự kiện và các hình ảnh lưu niệm</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-seasonal owl-carousel ftco-owl">
<!-- -------------------------------------------------------------------------------------------------------- -->
<?php
        foreach ($result as $k => $v) {
        ?>
                        <div class="item">
                            <div class="wrap">
                                <div class="seasonal img d-flex align-items-center justify-content-center"
                                    style="background-image: url(images/<?php echo $v['hinhanh'] ?>);">
                                </div>
                                <div class="text text-center px-4">
                                    <h3><a href="#"><?php echo $v['ngaydo'] ?></a></h3>
                                    <p><?php echo $v['noidung_sukien'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
        }
        ?>
 <!-- -------------------------------------------------------------------------------------------------------- -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro bg-primary py-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <h2>Contact with us</h2>
                    <p>Do you have any comments or questions about the products then contact us.</p>
                </div>
                <div class="col-md-5 text-md-right">
                    <span class="contact-number">+00(123) 456-78-09</span>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading" id="ng">Nguồn Góc</span>
                    <h2 class="mb-4">Nguồn Góc nhà họ Nguyễn</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
<!-- -------------------------------------------------------------------------------------------------------- -->
<?php
$data_dongho=$connect->query('select * from dongho limit 0,4');
$kq=$data_dongho->fetchAll();
        foreach ($kq as $k => $v) {
        ?>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4"><?php echo $v['tieusu'] ?></p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/<?php echo $v['hinhanh'] ?>)"></div>
                                        <div class="pl-3">
                                            <p class="name"><?php echo $v['hoten'] ?></p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
        }
        ?>
<!-- -------------------------------------------------------------------------------------------------------- -->
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">24</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">2020</span>
                                    <span class="mos">January</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- start footer -->
    <?php
        include "minifile/head-footer/footer.php"
        ?>
    <!-- end footer -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>