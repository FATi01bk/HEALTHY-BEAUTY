<?php

include '../controller/PatientC.php';
include '../model/Patient.php';
$error = "";

// create client
$patient = null;
// create an instance of the controller
$patientC = new PatientC();

// Check if the form is submitted and an idPatient is provided
echo "ID Patient from form: " . $_POST['idPatient'] . "<br>";

if (isset($_POST["idPatient"])) {
    $patient = $patientC->showPatient($_POST['idPatient']);
}

if (
    isset($_POST["cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["motdepasse"]) 
) {
    if (
        !empty($_POST['cin']) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["motdepasse"]) 
    ) {
        // Loop through POST data for debugging
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }

        // Create a new Patient object
        $patient = new Patient(
            null,
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['motdepasse']
        );

        // Display information about the patient
        var_dump($patient);

        // Update patient information using the controller
        var_dump($patient); // Add this line before the updatePatient call
        $patientC->updatePatient($patient, $_POST['idPatient']);
        var_dump($patient); // Add this line after the updatePatient call

        // Redirect to the list of patients
        header('Location:listPatients.php');
    } else {
        $error = "Missing information";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

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

    <title>User Display</title>

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
    <script src="validation.js"></script>
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
                                        <a class="nav-link" href="index.html">ACCUEIL</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="index.html">Mes données personnelles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact2.html"> MES RENDEZ-VOUS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quote_btn-container">
                                <a href="">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="espacemedecin.html">Espace Medecin</a>
                                    </li>
                                </a>
                                <a href="">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="espacepatient.html">Espace Patient </a>
                                    </li>
                                </a>
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
        
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form_container">
                        <form action="" method="POST" onsubmit="return validateForm();">
                            <div>
                                <label for="idPatient">IdPatient :</label>
                                <input type="text" id="idPatient" name="idPatient" value="<?php echo $_POST['idPatient'] ?>" readonly />
                                <span id="erreurIdPatient" style="color: red"></span>
                            </div>
                            <div>
                                <label for="cin">Cin :</label>
                                <input type="text" id="cin" name="cin" value="<?php echo $patient['cin'] ?>" />
                                <span id="erreurCin" style="color: red"></span>
                            </div>
                            <div>
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nom" value="<?php echo $patient['nom'] ?>" />
                                <span id="erreurNom" style="color: red"></span>
                            </div>
                            <div>
                                <label for="prenom">Prénom :</label>
                                <input type="text" id="prenom" name="prenom" value="<?php echo $patient['prenom'] ?>" />
                                <span id="erreurPrenom" style="color: red"></span>
                            </div>
                            <div>
                                <label for="email">Email :</label>
                                <input type="text" id="email" name="email" value="<?php echo $patient['email'] ?>" />
                                <span id="erreurEmail" style="color: red"></span>
                            </div>
                            <div>
                                <label for="motdepasse">Motdepasse :</label>
                                <input type="text" id="motdepasse" name="motdepasse" value="<?php echo $patient['motdepasse'] ?>" />
                                <span id="erreurMotdepasse" style="color: red"></span>
                            </div>

                            <div class="btn_box">
                                <button type="submit">Save</button>
                                <button type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- ... Votre contenu de la colonne droite ... -->
                </div>
            </div>
        </div>
    </section>
    <!-- End contact section -->

    <!-- ... Votre section info ... -->

    <!-- Footer section -->
    <footer class="footer_section">
        <div class="container">
            <!-- ... Votre contenu du pied de page ... -->
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
    <script src="validation.js"></script>
</body>

</html>


