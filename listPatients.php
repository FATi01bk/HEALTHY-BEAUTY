<?php
include "../controller/PatientC.php";

$c = new PatientC();
$tab = $c->listPatients();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mico</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- Owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="owl.carousel.min.css" />

  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Nice Select -->
  <link rel="stylesheet" href="nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

  <!-- Datepicker -->
  <link rel="stylesheet" href="datepicker.css">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <header class="header_section">
      <div class="header_top">
        <!-- Header content (Call, Email, Location) -->
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
                    <a class="nav-link" href="index.html">Liste des patients</a>
                  </li>
                 
                </ul>
              </div>
              <div class="quote_btn-container">
                <i class="fa fa-user" aria-hidden="true"></i>
                <li class="nav-item">&nbsp;</li>
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
  </div>

  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>BIENVENUE</h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Id Patient</th>
                  <th>Cin</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Email</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tab as $patient): ?>
                  <tr>
                    <td><?= $patient['id']; ?></td>
                    <td><?= $patient['cin']; ?></td>
                    <td><?= $patient['nom']; ?></td>
                    <td><?= $patient['prenom']; ?></td>
                    <td><?= $patient['email']; ?></td>
                    <td>
                      <form method="POST" action="updatePatient.php">
                        <input type="submit" class="btn btn-primary" name="update" value="Update">
                        <input type="hidden" value="<?= $patient['id']; ?>" name="idPatient">
                      </form>
                    </td>
                    <td>
                      <a href="deletePatient.php?id=<?= $patient['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer_section">
    <div class="container">
      <!-- Footer content -->
    </div>
  </footer>

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
</body>

</html>
