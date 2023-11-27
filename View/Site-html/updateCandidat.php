<?php
    require_once '../../Model/candidat.php';
    require_once '../../Controller/candidatC.php';
    $candidatC = new candidatC();
    $candidats = $candidatC->findCandidat($_GET['cin']);
    if (isset($_POST["cin"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["adresse"]) && isset($_POST["specialite"]) && isset($_FILES["cv"])) {
        if (!empty($_POST["cin"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["adresse"]) && !empty($_POST["specialite"]) && !empty($_FILES["cv"]["name"])) {
            $candidat1 = new candidat($_POST["cin"], $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["adresse"], $_POST["specialite"],$_FILES["cv"]);
            $candidatC = new candidatC();
            $candidatC->updatecandidat($candidat1, $_GET['cin']);
            header('location:afficherCandidats.php?cin=' . $_POST["cin"]);
        } else {
            echo ("Veuillez remplir tous les champs du formulaire, y compris le CV.");
        }
    }
?>



<!DOCTYPE html>
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
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    /* Styles pour le formulaire */
    .form-container {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
    }
  
    .form-container label {
      font-weight: bold;
    }
  
    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="tel"],
    .form-container select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
  
    .form-container input[type="submit"] {
      width: 100%;
      background-color: 41c080;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  
    .form-container input[type="submit"]:hover {
      background-color: #41c080;
    }
  </style>

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="">
            </a>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="treatment.php">Treatment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="doctor.php">Doctors</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="offredemploi.php">Offre d'emploi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Sign Up
                  </span>
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
  </div>

  <section class="offre_emploi_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span> Envoyer ma candidature</span>
        </h2>
      </div>
      <div class="col-lg-6 offset-lg-3 form-container">
            <form action="" method="POST" enctype="multipart/form-data">
              <label for="cin">CIN:</label><br>
              <input value ='<?php echo $candidats ['cin']; ?>' type="number" id="cin" name="cin"oninput="validateInput('cin', /^[0-9]+$/)"><br>
              <span id="cin_span"></span>

              <label for="nom">Nom:</label><br>
              <input value ='<?php echo $candidats ['nom']; ?>' type="text" id="nom" name="nom"oninput="validateInput('nom', /^[a-zA-Z]+$/)"><br>
              <span id="nom_span"></span>

              <label for="prenom">Prénom:</label><br>
              <input value ='<?php echo $candidats ['prenom']; ?>' type="text" id="prenom" name="prenom"oninput="validateInput('prenom', /^[a-zA-Z]+$/)"><br>
              <span id="prenom_span"></span>

              <label for="email">Email:</label><br>
              <input value ='<?php echo $candidats ['email']; ?>' type="email" id="email" name="email"oninput="validateInput('email', /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/)"><br>
              <span id="email_span"></span>

              <label for="adresse">Adresse:</label><br>
              <input value ='<?php echo $candidats ['adresse']; ?>' type="text" id="adresse" name="adresse"oninput="validateInput('adresse', /^.{5,}$/)"><br>
              <span id="adresse_span"></span>

              <label for="specialite">Spécialité:</label><br>
              <select value ='<?php echo $candidats ['specialite']; ?>' id="specialite" name="specialite">
                <option value="docteur">Docteur</option>
                <option value="infirmier">Infirmier</option>
                <option value="anesthesie">Anesthésiste</option>
              </select><br><br>

              <label for="cv">CV (Pièce jointe):</label><br>
              <input type="file" id="cv" name="cv" value ='<?php echo $candidats ['cv']; ?>'><br><br>

              <input type="submit" value="Postuler">
          </form>
          
          <script>
            function validateInput(inputId, regex) {
                const input = document.getElementById(inputId);
                const span = document.getElementById(`${inputId}_span`);

                if (regex.test(input.value)) {
                span.innerText = 'Correct';
                span.style.color = 'green';
                } else {
                span.innerText = 'Incorrect';
                span.style.color = 'red';
                }
            }
          </script> 

        </div>
      </div>
    </div>
  </section>



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
                <a href="index.php">
                  Home
                </a>
                <a href="about.php">
                  About
                </a>
                <a href="treatment.php">
                  Treatment
                </a>
                <a href="doctor.php">
                  Doctors
                </a>
                <a class="active" href="offredemploi.php">
                  Offre d'emploi
                </a>
                <a href="contact.php">
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

   <!-- Scripts -->
   <script src="js/jquery-3.4.1.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
   <script src="js/custom.js"></script>
 


</body>


</html>
