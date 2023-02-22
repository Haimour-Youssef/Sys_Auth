<?php
use authentification\Verification;
require_once 'assets/php/Verification.php';

$ver =new Verification();
if (isset($_COOKIE["token"])) {
  if($ver->auth($_COOKIE["token"])){
    header("Location: welcome.php");
    die();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Imno - Participation and Registration Wizard Form for Events, Conference, Workshop, Courses, Seminar, Virtual Event, Wedding">
  <meta name="author" content="Ansonika">
  <title></title>
  <!-- Favicons-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">
  <!-- GOOGLE WEB FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- BASE CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/menu.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/vendors.css" rel="stylesheet">
  <!-- YOUR CUSTOM CSS -->
  <link href="assets/css/custom.css" rel="stylesheet">
  <!-- MODERNIZR MENU -->
  <script src="assets/js/modernizr.js"></script>
</head>

<body>
  <div id="preloader">
    <div data-loader="circle-side"></div>
  </div><!-- /Preload -->
  <div id="loader_form">
    <div data-loader="circle-side-2"></div>
  </div><!-- /loader_form -->
  <div class="container-fluid">
    <div class="row row-height">
      <div class="col-lg-6 background-image p-0" data-background="url(assets/img/main_img_1.jpg)">
        <div class="content-left-wrapper opacity-mask d-flex align-items-center text-center justify-content-center" data-opacity-mask="rgba(0, 0, 0, 0.50)">
          <!-- <a href="#0" id="logo"><img src="assets/img/logo.png" alt="" width="44" height="44"></a>
          <div class="social">
            <ul>
              <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
              <li><a href="#0"><i class="bi bi-twitter"></i></a></li>
              <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
            </ul>
          </div> -->
          <!-- /social -->
          <div>
            <div class="row mb-3">
              <div class="col-lg-6"><img src="assets/img/02.png"></div>
              <div class="col-lg-6"><img src="assets/img/03.png"></div>
            </div>
            <h1 style="color:#fff;"><small style="color:#fff;">Live Webinar</small> Les infections respiratoires <em>"Cas cliniques"</em></h1>
            <div class="countdown" style="color:#fff;">
              <h4 style="color:#fff;">28 Février 2023 à 20h00</h4>
              <div class="container_count">
                <div id="days">00</div>Jours
              </div>
              <div class="container_count">
                <div id="hours">00</div>Heures
              </div>
              <div class="container_count">
                <div id="minutes">00</div>minutes
              </div>
              <div class="container_count last">
                <div id="seconds">00</div>secondes
              </div>
            </div>
            <p> <a href="#panel_info" class="btn_info">Intervenants</a></p>
          </div>
          <a class="smoothscroll btn_scroll_to Bounce infinite" href="#wizard_container"><i class="bi bi-arrow-down-short"></i></a>
        </div>
      </div>
      <div class="col-lg-6 d-flex flex-column content-right">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-lg-9 col-xl-7 mx-auto">
              <div id="wizard_container">
                <div id="top-wizard">
                  <span id="location"></span>
                  <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="POST" action="assets/php/login.php">
                  <input id="website" name="website" type="text" value="">
                  <!-- Leave for security protection, read docs for details -->
                  <div id="middle-wizard">
                    <div class="step">
                      <h3 class="main_question">Merci de remplir vos coordonnées</h3>
                      <div class="mb-3 form-floating">
                        <input type="email" name="email" id="email" class="form-control required" placeholder="Votre Email">
                        <label for="email">Votre Email</label>
                      </div>
                      <div class="form-floating mb-4">
                        <input type="text" name="Code_Access" id="Code_Access" class="form-control" placeholder="Code d'accès">
                        <label for="Code_Access">Code d'accès</label>
                      </div>
                    </div>
                  </div>
                  <!-- /middle-wizard -->
                  <div id="bottom-wizard">
                    <button type="submit" name="forward" class="Hola">Se connecter</button>
                  </div>
                  <!-- /bottom-wizard -->
                </form>
              </div>
              <!-- /Wizard container -->
            </div>
          </div>
        </div>
        <div class="container pb-4 copy">
          <span class="float-start">© Origamy</span>
          <a class="btn_help float-end" href="#modal-help" id="modal_h"><i class="bi bi-question-circle"></i> Help</a><br>
          <!-- /social -->
        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
  <!-- <nav>
    <ul class="cd-primary-nav">
      <li><a href="index.html" class="animated_link">Wedding Version</a></li>
      <li><a href="index-2.html" class="animated_link">Workshop Version</a></li>
      <li><a href="index-3.html" class="animated_link">Party Version</a></li>
      <li><a href="index-4.html" class="animated_link">Conference Version</a></li>
      <li><a href="#0" class="animated_link">Purchase Template</a></li>
    </ul>
  </nav> -->
  <!-- /menu -->
  <div class="cd-overlay-nav">
    <span></span>
  </div>
  <!-- /cd-overlay-nav -->
  <div class="cd-overlay-content">
    <span></span>
  </div>
  <!-- /cd-overlay-content -->
  <!-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> -->
  <!-- /menu button -->
  <div class="panel" id="panel_info">
    <div class="panel__content">
      <a href="#" class="close_panel">
        <i class="bi bi-x-circle"></i>
      </a>
      <div class="container">
        <h2 class="mb-5">Intervenants</h2>
        <div class="strip_info">
          <div class="row">
            <div class="col-lg-6">
              <h3>Pr CHAKIB ABDELFATAH</h3>
            </div>
            <!-- <div class="col-lg-3">
              <p class="date_event">18.10.2023 <small>11.00am - 02.00pm</small></p>
            </div> -->
            <div class="col-lg-6">
              <p>Professeur de maladies infectieuses - CHU Ibn Rochd Casablanca</p>
            </div>
          </div>
        </div>
        <div class="strip_info">
          <div class="row">
            <div class="col-lg-6">
              <h3>Dr TAHRI CHAFIQ</h3>
            </div>
            <!-- <div class="col-lg-3">
              <p class="date_event">18.10.2023 <small>8.00pm - 11.00.pm</small></p>
            </div> -->
            <div class="col-lg-6">
              <p>Docteur en médecine générale</p>
            </div>
          </div>
        </div>
        <!-- <div class="row mt-5 d-flex align-items-center">
          <div class="col-lg-6">
            <div class="map_contact">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.4364241114604!2d-73.96780638459853!3d40.774418641731515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258a29d3847f5%3A0x564dfbba0141774a!2s5th%20Ave%2C%20New%20York%2C%20NY%2C%20Stati%20Uniti!5e0!3m2!1sit!2ses!4v1661414716655!5m2!1sit!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6">
                <h5 class="mb-3">Address</h5>
                <div class="list_icons">
                  <ul>
                    <li><i class="bi bi-geo-alt"></i> 11 Fifth Ave - New York 2863 <br><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Get directions</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <h5 class="mb-3">Contacts</h5>
                <div class="list_icons">
                  <ul>
                    <li><i class="bi bi-telephone"></i> +45 9483 2344</li>
                    <li><i class="bi bi-envelope"></i> <a href="mailto:event@domain.com">event@domain.com</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <!-- /panel_info  -->
  <!-- Modal terms -->
  <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="termsLabel">Privacy data terms</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
          <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
          <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- Help form Popup -->
  <div id="modal-help" class="custom-modal zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
      <h3>Avez-vous une question?</h3>
      <p class="mb-3">Veuillez remplir le formulaire avec vos questions et nous vous répondrons bientôt!</p>
    </div>
    <div id="message-help"></div>
    <form method="post" action="phpmailer/help.php" id="helpform" autocomplete="off">
      <div class="modal-wrapper">
        <div class="mb-3 form-floating">
          <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nom & Prénom">
          <label for="fullname">Nom & Prénom</label>
        </div>
        <div class="mb-3 form-floating">
          <input type="email" name="email_help" id="email_help" class="form-control" placeholder="Addresse Email">
          <label for="email_help">Addresse Email</label>
        </div>
        <div class="mb-3 form-floating">
          <textarea name="message_help" id="message_help" class="form-control short" placeholder="Votre Message"></textarea>
          <label for="message_help">Votre Message</label>
        </div>
        <div class="mb-5 form-floating">
          <input class="form-control" type="text" name="verify_help" id="verify_help" placeholder="Êtes-vous un humain? 3 + 1 =">
          <label for="verify_help">Êtes-vous un humain? 3 + 1 =</label>
        </div>
        <div class="text-center submit"><input type="submit" value="Envoyer" class="btn_1" id="submit-help"></div>
      </div>
    </form>
  </div>
  <!-- /Help form Popup -->
  <!-- COMMON SCRIPTS -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/common_scripts.min.js"></script>
  <script src="assets/js/velocity.min.js"></script>
  <script src="assets/js/functions.js"></script>
</body>

</html>