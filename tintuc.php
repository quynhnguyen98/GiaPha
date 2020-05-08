<?php
include "config.php";
$data = $connect->query('select * from tintuc');
$result = $data->fetchAll();
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

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row d-flex">
<!------------------------------------------------------------------------------------------------------------------------------->
        <?php
        foreach ($result as $k => $v) {
        ?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.php" class="block-20" style="background-image: url('images/<?php echo $v['hinhanh'] ?>');">
              </a>
              <div class="text p-4 float-right d-block">
                <div class="topper d-flex align-items-center">
                  <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day"></span>
                  </div>
                  <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr"><?php echo $v['ngaythang'] ?></span>
                    <span class="mos">Năm/Tháng/Ngày</span>
                  </div>
                </div>
                <h3 class="heading mb-0"><a href="#"><?php echo $v['tieude'] ?></a></h3>
                <p id="cont"><?php echo $v['noidung'] ?></p>
                <p><a href="chitiet.php?id=<?php echo $v['tintuc_id'] ?>" class="btn btn-primary">Chi tiết</a></p>
              </div>
            </div>
          </div>

        <?php
        }
        ?>
<!------------------------------------------------------------------------------------------------------------------------------->
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
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
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
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

  <script>
function trimSentence(str, sentenceCount){
		var strArray = str.split('.');
		var subArray = strArray.slice(0, sentenceCount);
    var result = subArray.join(".");
    return result + '...';
}

var str = $('#cont').text();
var result = trimSentence(str, 1);
$('#cont').text(result);
</script>

</body>

</html>