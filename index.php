<?php
	
	// Start a Session, You might start this somewhere else already.
		session_start();

	// What languages do we support
	$available_langs = array('en','fr','it');

	// Set our default language session ONLY if we've got nothing
	if ($_SESSION['lang']=='') {
		$_SESSION['lang'] = 'it';

	}  

  if(isset($_GET['lang']) && $_GET['lang'] != ''){ 
    // check if the language is one we support
    if(in_array($_GET['lang'], $available_langs))
    {       
      $_SESSION['lang'] = $_GET['lang']; // Set session
    }
  }
  
  // Include active language
  include('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');
  
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="it">
 <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Bead&Breakfast, b&b, Hotel, affitacamere, San Giuseppe Vesuviano, Napoli">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Palazzo Giordano</title>

    <!-- Bootstrap core CSS -->
    <link href="Content/Theme/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="Content/Theme/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="Content/Theme/css/general.min.css" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link href="Content/Theme/css/custom.min.css" rel="stylesheet">
    <link href="Content/Theme/css/owl.carousel.min.css" rel="stylesheet">
    <link href="Content/Theme/css/owl.theme.min.css" rel="stylesheet">
    <link href="Content/Theme/css/style.min.css" rel="stylesheet">
    <link href="Content/Theme/css/animate.min.css" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="Content/Theme/css/magnific-popup.min.css">
</head>

<body id="home">

<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
<!-- NavBar-->
<nav class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home">Palazzo Giordano</a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li class="menuItem"><a href="#benvenuti"><?php echo $lang['Benvenuti']; ?></a></li>
                <li class="menuItem"><a href="#chisiamo"><?php echo $lang['ChiSiamo']; ?></a></li>
                <li class="menuItem"><a href="#galleria"><?php echo $lang['Galleria']; ?></a></li>
                <li class="menuItem"><a href="#camere"><?php echo $lang['Camere']; ?></a></li>
                <li class="menuItem"><a href="#serviziextra"><?php echo $lang['ServiziExtra']; ?></a></li>
                <li class="menuItem"><a href="#dovesiamo"><?php echo $lang['DoveSiamo']; ?></a></li>
                <li class="menuItem"><a href="#contati"><?php echo $lang['Contatti']; ?></a></li>             
                <li class="dropdown language-selector">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                        <?php echo $lang['Language']; ?>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="?lang=en" >
                                <span>English</span>
                            </a>
                        </li>
                        <li>
                            <a href="?lang=fr" >
                                <span>François</span>
                            </a>
                        </li>
                        <li>
                            <a href="?lang=it" >
                                <span>Italiano</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="?lang=es" >
                                <span>Español</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- FullScreen -->
<div class="intro-header">
    <div class="col-xs-12 text-center abcen1">
        <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Palazzo Giordano</h1>
        <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s"><?php echo $lang['WelcomeMessage']; ?></h3>
    </div>
    <!-- /.container -->
    <div class="col-xs-12 text-center abcen wow fadeIn">
        <div class="button_down ">
            <a class="imgcircle wow bounceInUp" data-wow-duration="1.5s" href="#benvenuti"> <img class="img_scroll" src="Content/Theme/img/icon/circle.png" alt="b&b San giuseppe Vesuviano Napoli Vesuvio"> </a>
        </div>
    </div>
</div>



<!-- benvenuti -->
<div id="benvenuti" class="content-section-b" style="border-top: 0">
    <div class="container">

        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2><?php echo $lang['Benvenuti']; ?></h2>
            <p class="lead" style="margin-top:0"><?php echo $lang['BenvenutiMessage']; ?></p>
        </div>

        <div class="row">

            <div class="col-sm-4 wow fadeInDown text-center">
            <a href="#">
                <img class="rotate" src="Content/Theme/img/icon/001-facebook.svg" alt="b&b San giuseppe Vesuviano Napoli Facebook">
                <!-- <h3>Seguici</h3> -->
                <p class="lead"><?php echo $lang['FB']; ?></p>
            </a>
            </div>

            <div class="col-sm-4 wow fadeInDown text-center">
                <a href="https://www.booking.com/hotel/it/palazzo-giordano.it.html?aid=807124;sid=1cabbc01a293ee8d255ac2db5ed55efe;dest_id=-127698;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1592299342;srpvid=4ec141e6ed78019d;type=total;ucfs=1&#hotelTmpl">
                    <img class="rotate" src="Content/Theme/img/icon/Logo BookingCom (SVG-240p) - FileVector69.svg" alt="b&b San giuseppe Vesuviano Napoli Booking">
                </a>
                <!-- <h3>Esperienze</h3> -->
                <p class="lead"><?php echo $lang['Booking']; ?></p>
            </div>

            <div class="col-sm-4 wow fadeInDown text-center">
                <a href="https://www.instagram.com/palazzo_giordano3/">
                    <img class="rotate" src="Content/Theme/img/icon/002-instagram-sketched.svg" alt="b&b San giuseppe Vesuviano Napoli instagram">
                </a>
                <!-- <h3>Instagram</h3> -->
                <p class="lead"><?php echo $lang['Instagram']; ?></p>
            </div>

        </div>
    </div>
</div>

<!-- chisiamo -->
<div id="chisiamo" class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 pull-right wow fadeInRightBig">
                <h3 class="section-heading"></h3>
                <img class="img-responsive img-rounded " src="Content/Theme/img/sangiusepenatale.jpg" alt="b&b San giuseppe Vesuviano Napoli Piazza">
            </div>
            <div class="col-sm-6 wow fadeInLeftBig" data-animation-delay="200">
                <h3 class="section-heading"><?php echo $lang['ChiSiamo']; ?></h3>
                <p class="lead">
                <?php echo $lang['ChiSiamo1']; ?>
                </p>
                <p class="lead">
                <?php echo $lang['ChiSiamo2']; ?>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Galeria -->
<div id="galleria" class="content-section-b">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
                <h2><?php echo $lang['Galleria']; ?></h2>
                <p class="lead" style="margin-top:0"></p>
            </div>
        </div>
        <div class="row wow bounceInUp">
            <div id="owl-demo" class="owl-carousel">
                <a href="Content/Theme/img/camere/1.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/1.s.jpg" alt="b&b San giuseppe Vesuviano Napoli camere">
                    </div>
                </a>
                <a href="Content/Theme/img/camere/2.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/2.s.jpg" alt="b&b San giuseppe Vesuviano Napoli patio">
                    </div>
                </a>
                <a href="Content/Theme/img/camere/5.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/5.s.jpg" alt="b&b San giuseppe Vesuviano Napoli Terrazo">
                    </div>
                </a>
                <a href="Content/Theme/img/camere/7.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/7.jpg" alt="b&b San giuseppe Vesuviano Napoli vacanze">
                    </div>
                </a>
                <a href="Content/Theme/img/camere/11.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/11.jpg" alt="b&b San giuseppe Vesuviano Napoli collazione">
                    </div>
                </a>
                <a href="Content/Theme/img/camere/20.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/20.jpg" alt="b&b San giuseppe Vesuviano Napoli Natura">
                    </div>
                </a>
                <a href="Content/Theme/img/camere/99.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/99.s.jpg" alt="b&b San giuseppe Vesuviano Napoli Relax">
                    </div>
                </a>
                <a href="Content/Theme/img/camere/15.jpg" class="image-link">
                    <div class="item">
                        <img class="img-responsive img-rounded" src="Content/Theme/img/camere/15.jpg" alt="b&b San giuseppe Vesuviano Napoli Relax">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- camere -->
<div id="camere" class="content-section-a">
    <div class="container">
	    <div class="row">
            <div class="col-md-12 text-center wrap_title ">
                <h2 class="section-heading"><?php echo $lang['Camere']; ?></h2>
                <!-- <p class="lead">gli appartamenti sono molto apprezzati da parenti e ospiti di sposi che desiderano fare foto prima della celebrazione.</p> -->
            </div>
        </div>
        <div class="row  wow">
	        <div class="col-sm-6 wow fadeInLeftBig">
			    <div id="owl-demo-1" class="owl-carousel">
                    <a href="Content/Theme/img/camere/foto/camere1.JPG" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="Content/Theme/img/camere/foto/camere1.JPG" alt="b&b San giuseppe Vesuviano Napoli camere">
                        </div>
                    </a>
                    <a href="Content/Theme/img/camere/foto/camere3.JPG" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="Content/Theme/img/camere/foto/camere3.JPG" alt="b&b San giuseppe Vesuviano Napoli famiglia">
                        </div>
                    </a>
                    <a href="Content/Theme/img/camere/foto/camere4.JPG" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="Content/Theme/img/camere/foto/camere4.JPG" alt="b&b San giuseppe Vesuviano Napoli centro">
                        </div>
                    </a>
                    <a href="Content/Theme/img/camere/foto/camere6.JPG" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="Content/Theme/img/camere/foto/camere6.JPG" alt="b&b San giuseppe Vesuviano Napoli studio">
                        </div>
                    </a>
                    <a href="Content/Theme/img/camere/foto/breakfast.jpg" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="Content/Theme/img/camere/foto/breakfast.jpg" alt="b&b San giuseppe Vesuviano Napoli Matrimoni">
                        </div>
                    </a>
                    <a href="Content/Theme/img/camere/foto/greenroom.jpg" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="Content/Theme/img/camere/foto/greenroom.jpg" alt="b&b San giuseppe Vesuviano Napoli Matrimoni">
                        </div>
                    </a>
                    <a href="Content/Theme/img/camere/foto/frigo.jpg" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="Content/Theme/img/camere/foto/frigo.jpg" alt="b&b San giuseppe Vesuviano Napoli Matrimoni">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInRightBig">
                <h3><?php echo $lang['Camere']; ?></h3>
                <ul class="descp lead2">
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereDescription1']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereDescription2']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereDescription3']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereDescription4']; ?></li>

                </ul>
                <h3><?php echo $lang['CamereConfort']; ?></h3>
                <ul class="descp lead2">
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereConfort1']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereConfort2']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereConfort3']; ?></li>
                </ul>

                <h3><?php echo $lang['CamereDisponible']; ?></h3>
                <ul class="descp lead2">
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereDisponible1']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['CamereDisponible2']; ?></li>
                </ul>
            </div>
		</div>
    </div>
</div>
<!-- serviziextra -->
<div id="serviziextra" class="content-section-b" style="border-top: 0">
    <div class="container">

        <div class="col-md-12 text-center wrap_title">
            <h2><?php echo $lang['ServiziExtra']; ?></h2>
            <!-- <p class="lead" style="margin-top:0">ti aspettiamo</p> -->
        </div>
        <div class="row">

            <div class="col-sm-3 wow fadeInDown text-center">
                <img class="rotate" src="Content/Theme/img/icon/bicycle.svg" alt="b&b San giuseppe Vesuviano Napoli biclette gratis">
                <h3><?php echo $lang['ServiziExtraBici1']; ?></h3>
                <p class="lead"><?php echo $lang['ServiziExtraBici2']; ?></p>
            </div>

            <div class="col-sm-3 wow fadeInDown text-center">
                <img class="rotate" src="Content/Theme/img/icon/books-svgrepo-com.svg" alt="b&b San giuseppe Vesuviano Napoli libri gratis">
                <h3><?php echo $lang['ServiziExtraLibri1']; ?></h3>
                <p class="lead"><?php echo $lang['ServiziExtraLibri2']; ?></p>
            </div>

            <div class="col-sm-3 wow fadeInDown text-center">
                <img class="rotate" src="Content/Theme/img/icon/casino.svg" alt="b&b San giuseppe Vesuviano Napoli Giochi di società">
                <h3><?php echo $lang['ServiziExtraGiochi']; ?></h3>
                <p class="lead"></p>
            </div>

            <div class="col-sm-3 wow fadeInDown text-center">
                <img class="rotate" src="Content/Theme/img/icon/pet.jpg" alt="b&b San giuseppe Vesuviano Napoli Pet friendly">
                <h3><?php echo $lang['ServiziExtraPet1']; ?></h3>
                <p class="lead"><?php echo $lang['ServiziExtraPet2']; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- dovesiamo -->
<div id="dovesiamo" class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2><?php echo $lang['DoveSiamo']; ?></h2>
                <p class="lead" style="margin-top:0"><?php echo $lang['DoveSiamo1']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 wow " style="max-width: 100%">
            <a href="https://goo.gl/maps/Cn2tSv6p1ut2Wgg5A">
                <img class="img-responsive" src="Content/Theme/img/map.jpg" alt="palazzo giordano map">
            </a>
            </div>
            <div class="col-sm-6 wow fadeInRightBig">
                <h3><?php echo $lang['AttrazioniPopolari']; ?></h3>
                <ul class="descp lead2">
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['AttrazioniPopolari1']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['AttrazioniPopolari2']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['AttrazioniPopolari3']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['AttrazioniPopolari4']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['AttrazioniPopolari5']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['AttrazioniPopolari6']; ?></li>
                </ul>
                <h3><?php echo $lang['Inzona']; ?></h3>
                <ul class="descp lead2">
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['Inzona1']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['Inzona2']; ?></li>
                    <li><i class="glyphicon glyphicon-leaf"></i><?php echo $lang['Inzona3']; ?></li>
                </ul>
            </div>
		</div>

	</div>
</div>



<!-- contati -->
<div id="contati" class="content-section-b">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Contatti</h2>
            </div>
        	<form role="form" action="mail.php" method="POST" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName"><?php echo $lang['Nome']; ?></label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="<?php echo $lang['Nome']; ?>" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<div class="form-group">
						<label for="InputEmail"><?php echo $lang['Email']; ?></label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="<?php echo $lang['Email']; ?>" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<div class="form-group">
						<label for="InputMessage"><?php echo $lang['Mesaggio']; ?></label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="<?php echo $lang['Invio']; ?>" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>

			<div class="col-md-5 col-md-push-1 address">
				<address>
					<h3><?php echo $lang['Email']; ?></h3>
					<p class="lead">info@palazzogiordano.it</p>
				</address>
			</div>
            <div class="col-md-5 col-md-push-1 address">
              <address>
					<h3><?php echo $lang['Telefono']; ?></h3>
					<p class="lead">+39 351 0782 565</p>
				</address>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
             <div class="col-md-7">
                <h3 class="footer-title"></h3>
                <p>
                </p>
                by fajouri.
             </div>
             <div class="col-md-5">
            </div>
        </div>
    </div>
</footer>

    <!-- JavaScript -->
    <script src="Scripts/modernizr-2.6.2.min.js"></script>
    <script src="Scripts/jquery-1.10.2.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
	<script src="Scripts/owl.carousel.js"></script>
	<script src="Scripts/script.min.js"></script>
	<!-- StikyMenu -->
	<script src="Scripts/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();

		});
	  });

	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="Scripts/jquery.corner.js"></script>
	<script src="Scripts/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="Scripts/classie.min.js"></script>
	<script src="Scripts/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="Scripts/jquery.magnific-popup.js"></script>
</body>
</Html>