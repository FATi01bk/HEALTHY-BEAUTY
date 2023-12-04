<?php

include '../Controler/con-consultation.php';
include '../model/consultation.php';

$error = "";


$consultation = null;


$consultationC = new consultationC();
if (
  isset($_POST["num_tel"]) &&
    isset($_POST["num_tel"]) &&
    isset($_POST["nom_patient"]) &&
    isset($_POST["nom_docteur"]) &&
    isset($_POST["date_ren"]) &&
    isset($_POST["temp_ren"]) &&
    isset($_POST["type_ren"])
) {
    if (
        !empty($_POST['num_tel']) &&
        !empty($_POST['nom_patient']) &&
        !empty($_POST["nom_docteur"]) &&
        !empty($_POST["date_ren"]) &&
        !empty($_POST["temp_ren"]) &&
        !empty($_POST["type_ren"])
    ) {
        $consultation = new consultation(
            $_POST['num_tel'],
            $_POST['nom_patient'],
            $_POST['nom_docteur'],
            $_POST['date_ren'],
            $_POST['temp_ren'],
            $_POST['type_ren']
        );
        $consultationC->addconsultation($consultation);
        header('Location:demanderendez_vous.php');
    } else
        $error = "Missing information";
}

?>

<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>

 
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
  <style type="text/css">
    .auto-style1 {
      color: #00C6A9;
    }
    </style>
  <script src="js/controle.js" ></script>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +21625749863
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : Healthy-beauty@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location:esprit arian_soghra
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Acceuil <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <li class="nav-item ">
                    <a class="nav-link" href="contact3.html">Se connecter</a>
                  </li>
                </a>
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <li class="nav-item ">
                    <a class="nav-link" href="contact4.html">S'inscrire</a>
                  </li>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      HEALTHY BEAUTY <br>
                      <span>
                        Clinique dermatologie
                      </span>
                    </h1>
                    <p>
                      Healthy beauty c'est une clinique dermatologie qui offre des séances de dermatologue et des consultations avec plusieurs médecins.
                    </p>
                    <a href="">
                      Demander un Rendez-vous
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      HEALTHY BEAUTY <br>
                      <span>
                        Espace patient
                      </span>
                    </h1>
                    <p>
                      veuilez clicker sur le boutton pour connecter a votre espace
                    </p>
                    <a href="contact3.html">
                      Espace Patient
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      HEALTHY BEAUTY <br>
                      <span>
                        Espace medecin
                      </span>
                    </h1>
                    <p>
                      veuilez clicker sur le boutton pour connecter a votre espace
                    </p>
                    <a href="contact3.html">
                      Espace Medecin
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- book section -->

  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <form method="post" >
            <h4>
              Demander <span>Rendez-vous</span>
            </h4>

            <div class="form-row ">
              <div class="form-group col-lg-4">
              <label for="nom_patient">Nom Patient</label>
               <span id="erreurnom_patient" style="color: red"></span>
						 	<input  class="form-control"  name="nom_patient">
              </div>

              <div class="form-group col-lg-4">
              <label for="nom_docteur">Nom Medecin</label>
                <span id="erreurnom_docteur" style="color: red"></span>
						  	<input  class="form-control"  name="nom_docteur">
              </div>

              <div class="form-group col-lg-4">
              <label for="type_ren">Type Rendez-vous</label>
                <select name="type_ren" class="form-control wide" id="type_ren">
                  <option value="consultation">Consultation</option>
                  <option value="Seance">Seance </option>
                </select>
              </div>

            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="num_tel">Tel</label>
                <input type="texte" class="form-control" id="num_tel" placeholder="XXXXXXXXXX">
              </div>

              <div class="form-group col-lg-4">
                <label for="age_patient">Age</label>
                <span id="erreurage_patient" style="color: red">
                <input type="text" class="form-control" id="age_patient" placeholder="">
              </div>

              <div class="form-group col-lg-4">
                <label for="date_ren"> Date </label>
                <div class="input-group date" id="date_ren" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" >
                  <span id="erreurdate_ren" class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
              <div class="form-group col-lg-4">
                <label for="temp_ren"> temp </label>
                <div cclass="time-icon" id="datetimepicker3" temp-temp-format="h:m">
                  <input id="erreurtemp_ren" type="text" class="form-control" >
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button onclick="verif()" class="btn ">Enovyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end book section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Address
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <a class="active" href="index.html">
                  Home
                </a>
                <a href="about.html">
                  About
                </a>
                <a href="treatment.html">
                  Treatment
                </a>
                <a href="doctor.html">
                  Doctors
                </a>
                <a href="testimonial.html">
                  Testimonial
                </a>
                <a href="contact.html">
                  Contact us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post1.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post2.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post3.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post4.png" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>
