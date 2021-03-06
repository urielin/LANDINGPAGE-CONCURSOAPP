<!DOCTYPE html>
<html lang="es">
    <head>

        <!-- /.website title -->
        <title>DesafioAPP Tacna2018</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> -->
        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/alertify.core.css" rel="stylesheet">
        <link href="css/alertify.default.css" rel="stylesheet">
        <link href="css/alertify.bootstrap.css" rel="stylesheet">

        <!-- Colors -->
        <!-- <link href="css/css-app.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-app-orange.css" rel="stylesheet" media="screen"> -->
        <link href="css/css-app-yellow.css" rel="stylesheet" media="screen">
        <link href="css/css-index-yellow.css" rel="stylesheet" media="screen">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">

          <!-- /.preloader -->

          <div id="top"></div>

          <!-- /.parallax full screen background image -->
          <div class="fullscreen landing parallax" style="background-image: url(&quot;assets/images/celular.png&quot;); background-attachment: fixed; background-size: 1348px 893.05px; background-position: 50% -265.735px;" data-img-width="2000" data-img-height="1325" data-diff="100">

              <div class="overlay">
                  <div class="container" style="text-align:center;">
                      <div class="row">
                          <div class="col-md-7">

                              <!-- /.logo -->
                              <div class="logo wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                                  <a>
                                      <div>
                                          <img src="assets/images/mpt.png" alt="logo">
                                          <div class="title-mpt" style="">Municipalidad<br>
                                              <span class="subtitle">Provincial de Tacna</span>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <!-- /.main title -->
                              <h1 class="wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                  Desaf�o APP Tacna 2018
                              </h1>

                              <!-- /.header paragraph -->
                              <div class="landing-text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                  <p>La mejor aplicaci�n de Tacna ganar� el concurso</p>
                              </div>

                              <!-- /.header button -->
                              <div class="head-btn wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                  <a href="https://drive.google.com/file/d/1YOTH3d8WvHZDlvt0iQL29SGANy17ppKn/view?usp=sharing" target="_blank" class="btn-primary">Bases para el concurso</a>
                                  <a href="#" data-toggle="modal" data-target="#modal-registrar" class="btn-default">Subscr�bete</a>
                              </div>

                              <!-- /.phone option -->
  <!--                             <div class="more wow fadeInLeft">
                                  <p>Available for:
                                      <a href="#download" class="btn option"><i class="fa fa-apple"></i>iOS</a>
                                      <a href="#download" class="btn option"><i class="fa fa-android"></i>Android</a>
                                  </p>
                              </div>
   -->
                          </div>

                          <!-- /.phone image -->
                          <div class="col-md-5">
                              <img src="assets/images/co02.png" alt="phone" class="header-phone img-responsive wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Button trigger modal -->

          <!-- Modal -->
          <div class="modal fade in" id="modal-registrar">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">�</span></button>
                          <div class="text-center">
                              <h2 class="wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">INSCR�BETE AL CONCURSO DE APLICACIONES M�VILES</h2>
                              <div class="title-line wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;"></div>
                              <h6 class="modal-title" style="text-align:center;">S�lo el representante se podr� inscribir en el siguiente formulario</h6>
                          </div>

                      </div>
                      <?php echo form_open('landingpage_mpt/registrar_participante'); ?>
                      <!-- <form class="form-horizontal" method="POST"  enctype="multipart/form-data" autocomplete="off"> -->
                        <div class="modal-body">
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name" class="form-control-label">Nombre:</label>
                            <input required="" class="form-control" id="recipient-name" name="nombre" type="text">
                          </div>
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name2" class="form-control-label">Apellido:</label>
                            <input required="" class="form-control" id="recipient-name2" name="apellido" type="text">
                          </div>
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name3" class="form-control-label">DNI:</label>
                            <input required="" class="form-control" id="recipient-name3" name="dni" type="text">
                          </div>
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name4" class="form-control-label">Ciudad:</label>
                            <input required="" class="form-control" id="recipient-name4" name="ciudad" type="text">
                          </div>
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name5" class="form-control-label">Celular:</label>
                            <input required="" class="form-control" id="recipient-name5" name="celular" type="text">
                          </div>
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name6" class="form-control-label">Email:</label>
                            <input required="" class="form-control" id="recipient-name6" name="email" type="text">
                          </div>
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name7" class="form-control-label">T�tulo de la aplicaci�n m�vil:</label>
                            <input required="" class="form-control" id="recipient-name7" name="titulo" type="text">
                          </div>
                          <div class="col-md-12 form-group ">
                            <label for="recipient-name8" class="form-control-label">Breve descripci�n de la aplicacion m�vil:</label>
                            <textarea required="" type="text" class="form-control" id="recipient-name8" name="descripcion"></textarea>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                          <button type="submit" id="btn_registrar" class="btn btn-primary">Registrar</button>
                        </div>
                      <!-- </form> -->
                      <?php echo form_close(); ?>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                    <!-- /.modal-dialog -->
          </div>

          <!-- NAVIGATION -->
          <div id="menu-sticky-wrapper" class="sticky-wrapper" style="height: 50px;"><div id="menu" style="">
              <nav class="navbar-wrapper navbar-default" role="navigation">
                  <div class="container">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand site-name" href="#top"><img src="assets/images/desafiaTXT.png" alt="logo"></a>
                      </div>

                      <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                          <ul class="nav navbar-nav">
                              <li class="active"><a href="#intro">Acerca de</a></li>
                              <li class=""><a href="#feature">Concurso</a></li>
                              <!-- <li><a href="#subscribe">Subscribe</a></li> -->
                              <li><a href="#beneficios">Beneficios</a></li>
                              <li><a href="#screenshot">Auspiciadores</a></li>
                              <!-- <li><a href="#testi">Reviews</a></li> -->
                              <li><a href="#contact">Contacto</a></li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div></div>

          <!-- /.intro section -->
          <div id="intro">
              <div class="container">
                  <div class="row">
                      <!-- /.intro image -->
                      <div class="col-md-6 intro-pic wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
                          <img src="assets/images/desafiaTXT2.png" alt="image" class="img-responsive">
                      </div>

                      <!-- /.intro content -->
                      <div class="col-md-6 wow slideInRight animated" style="visibility: visible; animation-name: slideInRight;">
                          <h2>DESAFIO APP 2018</h2>
                          <p style="text-align: justify;">DESAFIO APP 2018 es una iniciativa de la Municipalidad Provincial de Tacna, que mediante la Sub Gerencia de Tecnolog�as de  la Informaci�n y Comunicaciones, desea impulsar la creativa e innovaci�n de j�venes talentos, en la creaci�n de aplicaciones para celulares, que basados en la innovaci�n de productos, proceso y servicio de forma de comercializaci�n satisfagan las necesidades del ciudadano.  Contaremos con objetivos referentes a Salud, Medio Ambiente, Agrario,  Ganadero, Incentivar a las PYMES, ONG, negocios familiares y en el �mbito Educativo,  Deporte y Cultural entre otros.
                          </p>

                          <div class="btn-section"><a href="https://drive.google.com/file/d/1YOTH3d8WvHZDlvt0iQL29SGANy17ppKn/view?usp=sharing" target="_blank" class="btn-default">Leer M�s</a></div>

                      </div>
                  </div>
              </div>
          </div>

          <!-- /.feature section -->
          <div id="feature">
              <div class="container">
                  <div class="row">
                      <div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

                          <!-- /.feature title -->
                          <h2 class="wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">SOBRE EL CONCURSO DESAFIO APP 2018</h2>
                          <div class="title-line wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
                          <!-- <p>Increase your user loyalty by maintaining mutual communication and nurturing your online community.</p> -->
                      </div>
                  </div>
                  <div class="row row-feat">
                      <div class="col-md-4 text-center" style="margin-top: 75px;">

                          <!-- /.feature image -->
                          <div class="feature-img">
                              <img src="assets/images/desarrollo-de-aplicaciones-moviles-ios-android.png" alt="image" class="img-responsive wow fadeInLeft img-app  animated" style="margin: auto; visibility: visible; animation-name: fadeInLeft;">
                          </div>
                      </div>

                      <div class="col-md-8">

                          <!-- /.feature 1 -->
                          <div class="col-sm-6 feat-list" style="width: 100%;">
                              <i class="pe-7s-users pe-5x pe-va wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></i>
                              <div class="inner">
                                  <h4>Equipos de Trabajo</h4>
                                  <p>Para participar del concurso, deber�n formar equipos m�nimo de 03 personas y un m�ximo de 05 personas.
                                  </p>
                              </div>
                          </div>

                          <!-- /.feature 2 -->
                          <div class="col-sm-6 feat-list" style="width: 100%;">
                              <i class="pe-7s-cash pe-5x pe-va wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"></i>
                              <div class="inner">
                                  <h4>Costo</h4>
                                  <p> El costo por incripci�n es : SIN COSTO
                                  </p>
                              </div>
                          </div>

                          <!-- /.feature 3 -->
                          <div class="col-sm-6 feat-list" style="width: 100%;">
                              <i class="pe-7s-notebook pe-5x pe-va wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"></i>
                              <div class="inner">
                                  <h4>Que proyectos innovadores podr�n ser presentados</h4>
                                  <p style="text-align:justify;">Se aceptar�n proyectos en todos los sectores y actividades econ�mica, entre las cuales puede considerar Salud, Medio Ambiente, Incentivar a las PYMES, ONG, negocios familiares y en el �mbito Educativo, Deporte y Cultural, Agropecuario, Ganadero, etc.
                                  </p>
                              </div>
                          </div>

                          <!-- /.feature 4 -->
  <!--                         <div class="col-sm-6 feat-list" style="width: 100%;">
                              <i class="pe-7s-notebook pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
                              <div class="inner">
                                  <h4>Quienes pueden participar</h4>
                                  <p style="text-align:justify;">Para participar del concurso, deber�n forma equipos m�nimo de 03 personas y un m�ximo de 05 personas...
                                  </p>
                              </div>
                          </div> -->
  <!--                         <div style="text-align: center;">
                              <a href="#download" class="btn-default">Download Now</a>
                          </div> -->

                          <!-- <div class="col-sm-6 feat-list">
                              <div></div>
                              <div class="inner">
                                  <a href="https://drive.google.com/open?id=1bQNAOXMS20Bk3X37oIYCUbu5SgKuuJ0T"  target="_blank" class="btn-default">Leer M�s</a>
                              </div>
                          </div> -->
                      </div>
                  </div>
              </div>
          </div>
          <div id="beneficios">
              <div class="action fullscreen parallax" style="background-image: url(&quot;assets/images/celular.png&quot;); background-attachment: fixed; background-size: 1348px 899.116px; background-position: 50% -29.6616px;" data-img-width="2000" data-img-height="1334" data-diff="100">
                  <div class="overlay">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                                  <h2 class="wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">BENEFICIOS PARA LOS GANADORES</h2>
                                  <div class="title-line wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
                                  <!-- <p class="download-text wow fadeInRight">We'll research the market, identify the right target audience, analyze competitors and avoid users churn to increase retention. Download now for free and join with thousands happy clients.</p> -->

                                  <div class="row">
                                      <div class="col-md-7">
                                        <div class="row">
                                          <div class="col-sm-12 feat-list">
                                              <i class="pe-7s-gift pe-5x pe-va wow fadeInUp animated" data-wow-delay="0.2s" style="color: white; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"></i>
                                              <div class="inner" style="text-align:center;">
                                                  <h4>Se otorgar� un premio para incentivar la continuidad de su proyecto.</h4>
                                                  <p>
                                                  </p>
                                              </div>
                                          </div>
                                          <div class="col-sm-12 feat-list">
                                              <i class="pe-7s-news-paper pe-5x pe-va wow fadeInUp animated" data-wow-delay="0.2s" style="color: white; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"></i>
                                              <div class="inner">
                                                  <h4>Reconocimiento a nombre de la Municipalidad Provincial de Tacna</h4>
                                                  <p>
                                                  </p>
                                              </div>
                                          </div>
                                        </div>
                                      </div>

                                      <!-- /.phone image -->
                                      <div class="col-md-5" style="margin-bottom: 135px;">
                                          <img src="assets/images/winner.png" alt="phone">
                                      </div>
                                  </div>
                                  <!-- /.download buttons -->
                                  <!-- <ul class="download-store"> -->
                                      <!-- <li class="appstorebutton iphone wow fadeInUp">
                                          <a href="#"><i class="fa fa-apple"></i><p><small>Available on the</small></br>App Store</p></a>
                                      </li>
                                      <li class="appstorebutton android wow fadeInUp" data-wow-delay="0.2s">
                                          <a href="#"><i class="fa fa-android"></i><p><small>Available on the</small></br>Play Store</p></a>
                                      </li> -->
                                  <!-- </ul> -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- /.feature 2 section -->
          <!-- <div id="feature-2">
              <div class="container">
                  <div class="row">

                      <div class="col-md-6 wow fadeInLeft">
                          <h2>Learn how to make your app marketing efficient</h2>
                          <p>Good marketing makes the company look smart. <span class="highlight">Great marketing</span> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
                          </p>

                          <div class="btn-section"><a href="#download" class="btn-default">Download Now</a></div>

                      </div>


                      <div class="col-md-6 feature-2-pic wow fadeInRight">
                          <img src="assets/images/desarrollo-apps-mallorca.jpg" alt="image" class="img-responsive">
                      </div>
                  </div>

              </div>
          </div> -->


          <!-- /.subscribe section -->
  <!--         <div id="subscribe">
              <div class="subscribe fullscreen parallax" style="background-image:url('assets/images/bg.jpg');" data-img-width="1920" data-img-height="1281" data-diff="100">
                  <div class="overlay">
                      <div class="container">


                          <div class="col-md-4 col-md-offset-4 text-center">
                              <i class="pe-7s-mail pe-va letter wow fadeInUp"></i>
                          </div>
                          <div class="col-md-8 col-md-offset-2 text-center">
                              <p>We'll research the market, identify the right target audience, analyze competitors and avoid users churn to increase retention. Enter your email address and we will do the rest.</p>


                              <div class="subscribe-form wow fadeInUp">
                                  <form class="news-letter mailchimp" action="http://moxdesign.us10.list-manage.com/subscribe/post" role="form" method="POST">
                                      <input type="hidden" name="u" value="503bdae81fde8612ff4944435">
                                      <input type="hidden" name="id" value="bfdba52708">
                                      <input class="form-control" type="email" name="MERGE0" placeholder="Your email..." required="">
                                      <button type="submit" class="subscribe-btn btn">SUBSCRIBE</button>
                                  </form>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div> -->

          <!-- /.screenshot section -->
          <div id="screenshot">
              <div class="container">
                  <div class="text-center">
                      <h2 class="wow fadeInLeft" style="visibility: hidden; animation-name: none;">AUSPICIADORES</h2>
                      <div class="title-line wow fadeInRight" style="visibility: hidden; animation-name: none;"></div>
                  </div>
                  <div class="row screenshots">

                      <div id="screenshots" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                          <!-- /.screenshot images -->
                          <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4688px; left: 0px; display: block;"><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" style="visibility: hidden; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div><div class="owl-item" style="width: 293px;"><div class="screen wow fadeInUp" data-wow-delay="0.7s" style="visibility: hidden; animation-delay: 0.7s; animation-name: none;">
                              <a href="assets/images/screenshot.jpg" data-toggle="lightbox"><img src="assets/images/caja_tacna.jpg" alt="Screenshot"></a>
                          </div></div></div></div>
                  </div>
              </div>
          </div>

          <!-- /.client section -->

          <!-- /.testimonial section -->
          <!-- /.download section -->
          <!-- /.contact section -->
          <div id="contact">
              <div class="contact fullscreen parallax" style="background-image: url(&quot;assets/images/celular.png&quot;); background-attachment: fixed; background-size: 1348px 899.116px;" data-img-width="2000" data-img-height="1334" data-diff="100">
                  <div class="overlay">
                      <div class="container">
                          <div class="row contact-row">

                              <!-- /.address and contact -->
                              <div class="col-sm-5 contact-left wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                  <h2><span class="highlight">Contactanos</span> </h2>
                                  <ul class="ul-address">
                                      <li><i class="pe-7s-map-marker"></i>Calle Incl�n N� 404<br>
                                          Tacna.
                                      </li>
                                      <li><i class="pe-7s-phone"></i>52 426878<br>
                                          Anexo 211
                                      </li>
                                      <li><i class="pe-7s-mail"></i><a href="desafiomovil2018@munitacna.gob.pe">desafiomovil2018@munitacna.gob.pe</a></li>
                                      <li><i class="pe-7s-look"></i><a href="#">desafiomovil2018.gob.pe</a></li>
                                  </ul>

                              </div>

                              <!-- /.contact form -->
                              <div class="col-sm-7 contact-right">
                                  <!-- <form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert( 'Thank you for your feedback!' );">
                                      <div class="form-group">
                                          <input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
                                      </div>
                                      <div class="form-group">
                                          <input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
                                      </div>
                                      <div class="form-group">
                                          <textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
                                      </div>
                                      <div class="form-group">
                                          <input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
                                      </div>
                                  </form> -->
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.291917364511!2d-70.25569618555073!3d-18.011651187707354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915acf6fe5603b47%3A0x2143bf82f22799e!2sMunicipalidad+Provincial+de+Tacna!5e0!3m2!1ses!2spe!4v1516203028192" style="width: 100%;height: 50vh;border:0;" allowfullscreen="" frameborder="0"></iframe>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div id="maps">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.291917364511!2d-70.25569618555073!3d-18.011651187707354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915acf6fe5603b47%3A0x2143bf82f22799e!2sMunicipalidad+Provincial+de+Tacna!5e0!3m2!1ses!2spe!4v1516203028192" width="1400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          </div>
          <!-- /.footer -->
          <footer id="footer">
              <div class="container">
                  <div class="col-sm-8 col-sm-offset-2">
                      <!-- /.social links -->
                      <div class="social text-center">
                          <ul>
                              <li><a class="wow fadeInUp" href="https://twitter.com/muni_tacna" target="_blank" style="visibility: hidden; animation-name: none;"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="wow fadeInUp" href="https://www.facebook.com/munitacna" target="_blank" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"><i class="fa fa-facebook"></i></a></li>
                          </ul>
                      </div>
                      <div class="text-center wow fadeInUp" style="font-size: 14px; visibility: hidden; animation-name: none;">
                        <!-- <p>
                          <a href="desafiomovil2018@munitacna.gob.pe">desafiomovil2018@munitacna.gob.pe</a>
                        </p> -->

                        <p>�Copyright DesafioApp 2017 - Desarrollado por
                        </p>
                        <a href="http://munitacna.gob.pe/" target="_blank">� Sub Gerencia de Tecnolog�as de Informaci�n y Comunicaciones -&nbsp; MPT 2018
                        </a>
                      </div>
                      <a href="#" class="scrollToTop" style="display: none;"><i class="pe-7s-up-arrow pe-va"></i></a>
                  </div>
              </div>

          </footer>
          <div id="modals">
            <!-- <div class="modal" id="modal-file-concurso" role="dialog">
                <div class="modal-dialog">

                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Base de DesafioAPP Tacna</h4>
                    </div>
                    <div class="modal-body">
                      <div class="iframe-container">
                        <object src="assets/CONCURSO.pdf">
                          <embed style="width: 50vw; height: 70vh;" src="assets/CONCURSO.pdf"></embed></object></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div> -->
          </div>
          <!-- /.javascript files -->
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="js/jquery.sticky.js"></script>
          <script src="js/wow.min.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/ekko-lightbox-min.js"></script>
          <script src="js/alertify.min.js"></script>

          <script type="text/javascript">
              $( document ).delegate( '*[data-toggle="lightbox"]', 'click', function ( event ) {
                  event.preventDefault();
                  $( this ).ekkoLightbox();
              } );

          </script>
          <script>
              new WOW().init();
          </script>
          <script type="text/javascript">
            $(function () {
              $('#btn-showModal').click(function(event){
                event.preventDefault();
                $('#modal-file-concurso').modal();
              })
            });


          </script>



  </body>
</html>
