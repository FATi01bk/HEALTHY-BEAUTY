<?php

include '../controller/MedecinC.php';
include '../model/Medecin.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$error = "";

// create client
$medecin = null;

// create an instance of the controller
$medecinC = new MedecinC();
if (
    isset($_POST["cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["date_naissance"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["numero"]) &&
    isset($_POST["specialite"]) &&
    isset($_POST["motdepasse"])
) {
    if (
        !empty($_POST['cin']) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["date_naissance"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["numero"]) &&
        !empty($_POST["specialite"]) &&
        !empty($_POST["motdepasse"]) 
    ) {
        $medecin = new Medecin(
            null,
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['date_naissance'],
            $_POST['adresse'],
            $_POST['numero'],
            $_POST['specialite'],
            $_POST['motdepasse']
        );
        if ($medecinC->addMedecin($medecin)) {
            echo "Data inserted successfully";
            header('Location: listMedecins.php');
            exit; // Important to exit after the header
        } else {
            $error = "Error inserting data";
        }
    } else {
        $error = "Missing information";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medecin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css" />

    <!-- Font Awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Nice select -->
    <link rel="stylesheet" href="nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- Datepicker -->
    <link rel="stylesheet" href="datepicker.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <script src="controledesaisie.js"></script>
   
</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- Header section starts -->
        <header class="header_section">
            <div class="header_top">
                <div class="container">
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call: +21625749863
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                Email: Healthy-beauty@gmail.com
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location: 09-rue ibn-esprit ariana-soghra
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
                                    <li class="nav-item ">
                                        <a class="nav-link" href="index.php">ACCUEIL</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="quote_btn-container">
                               
                                <form class="form-inline">
                                    <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End header section -->
    </div>

    <!-- Contact section -->
    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>BIENVENUE</h2>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form_container">
                        <form action="" method="POST" onsubmit="return validateForm();">
                            <div>
                                <label for="cin">Cin :</label>
                                <input type="text" id="cin" name="cin" />
                                <span id="erreurCin" style="color: red"></span>
                            </div>
                            <div>
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nom" />
                                <span id="erreurNom" style="color: red"></span>
                            </div>
                            <div>
                                <label for="prenom">Prénom :</label>
                                <input type="text" id="prenom" name="prenom" />
                                <span id="erreurPrenom" style="color: red"></span>
                            </div>
                            <div>
                                <label for="date_naissance">Date_naissance :</label>
                                <input type="date" id="date_naissance" name="date_naissance" />
                                <span id="erreurDate_naissance" style="color: red"></span>
                            </div>
                         
                            <div>
                                <label for="adresse">Adresse :</label>
                                <input type="text" id="adresse" name="adresse" />
                                <span id="erreurAdresse" style="color: red"></span>
                            </div>
                            <div>
                                <label for="numero">Numero :</label>
                                <input type="text" id="numero" name="numero" />
                                <span id="erreurNumero" style="color: red"></span>
                            </div>
                            <div>
                                <label for="specialite">Specialite :</label>
                                <input type="text" id="specialite" name="specialite" />
                                <span id="erreurSpecialite" style="color: red"></span>
                            </div>
                            <div>
                                <label for="motdepasse">Motdepasse :</label>
                                <input type="text" id="motdepasse" name="motdepasse" />
                                <span id="erreurMotdepasse" style="color: red"></span>
                            </div>

                            <div class="btn_box">
                                <button type="submit">Save</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- ... Existing content in the right column ... -->
                </div>
            </div>
        </div>
    </section>
    <!-- End contact section -->

    <!-- ... Your existing sections ... -->

    <!-- Footer section -->
    <footer class="footer_section">
        <div class="container">
            <!-- ... Your existing footer content ... -->
        </div>
    </footer>
    <!-- Footer section -->

    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <!-- Nice Select -->
    <script src="jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- Owl Slider -->
    <script src="owl.carousel.min.js"></script>
    <!-- Datepicker -->
    <script src="bootstrap-datepicker.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
    <!-- Validation JS -->
    <script src="controledesaisie.js"></script>
</body>

</html>