<?php
$nicks = file_get_contents(''); // API KEY
$sourceNickGeneratorBg = rand(1, 2); // random video bg
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Генератор ников</title>
  <meta content="" name="Генератор ников - Более 150 тысяч уникальных игровых ников для игр Counter strike 1.6/CSS/GO. Наша база собирает ники реальных игроков с реальных серверови ежедневно обновляется">
  <meta content="" name="генератор ников, генератор никнеймов, игровые ники, генератор ников онлайн,">

   <link rel="icon" href="/img/favicon.ico"/>
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <!-- ======= Header ======= -->
  <header id="header" class="header-transparent d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div id="logo" class="pull-left">
        <a class="navbar-brand" href="#">
					<img src="img/logo.png" height="30" alt="Nick Generator">
				</a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Главная</a></li>
          <li><a href="#nickgenerator">Сгенерировать ник</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
     <div class="fullscreen-bg bg-dark">
				<div class="overlay">
						<div class="container h-100 d-flex justify-content-center align-items-center">
								<div>
										<h2 class="m-3 white-text text-center" data-aos="fade-up">
										Онлайн генератор игровых ников
										</h2>
										<div class="d-flex text-center justify-content-center">
											<p class="text-light">Генератор ников - Более 150 тысяч уникальных игровых ников для игр Counter strike 1.6/CSS/GO.<br>
												Наша база собирает ники реальных игроков с реальных серверов и ежедневно обновляется.</p>
										</div>
										<a href="#nickgenerator" class="btn btn-outline-warning waves-effect mt-5 rounded f-js-enabled sf-arrows" style="touch-action: pan-y;">Сгенерировать ник</a>
								</div>
						</div>
				</div>
				<video loop muted autoplay poster="img/preview_<?=$sourceNickGeneratorBg?>.png"
				class="fullscreen-bg__video">
					<source src="video/bg.mp4" type="video/mp4">
				</video>
			</div>
    </div>
  </section>
	<section id="nickgenerator">
		<div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
     <div class="fullscreen-bg bg-dark">
				<div class="overlay">
					<div class="container h-100 d-flex justify-content-center align-items-center">
					<div>
								<h2 class="text-light text-center nick" id="nick">Nick</h2>
						<div class="w-100 d-flex justify-content-center">
								<button  class="btn btn-outline-warning waves-effect mt-5 rounded" onclick="UpdateNick()">Сгенерировать</button>
						</div>
					</div>
					</div>
				</div>
				<video muted poster="img/preview_<?=$sourceNickGeneratorBg?>.png"
				class="fullscreen-bg__video" id="nickGeneratorBg">
					<source src="video/nickGeneratorBg_<?=$sourceNickGeneratorBg?>.mp4" id="sourceNickGeneratorBg" type="video/mp4">
				</video>
			 <script type="text/javascript">
							function UpdateNick()
              {
                  var arr = JSON.parse(<?php echo json_encode($nicks);?>);
                  document.getElementById("nick").innerHTML =  arr[randomInteger(1, 9999)].name;
                  document.getElementById("nickGeneratorBg").play();
              }
              function randomInteger(min, max) {
                  let rand = min - 0.5 + Math.random() * (max - min + 1);
                  return Math.round(rand);
              }
						</script>
			</div>
    </div>
  </section>
  <footer id="footer" class="bg-dark">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>gs-dev</strong> Все права защищены
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>