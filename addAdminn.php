<?php
include '../controller/AdminnC.php';
include '../model/Adminn.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$error = "";
// create client
$adminn = null;

// create an instance of the controller
$adminnC = new AdminnC();
if (
    isset($_POST["cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["motdepasse"]) 
) {
    if (
        !empty($_POST['cin']) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["motdepasse"]) 
    ) {
        $adminn = new Adminn(
            null,
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['motdepasse']
        );
        if ($adminnC->addAdminn($adminn)) {
            echo "Data inserted successfully";
            header('Location: listAdminns.php');
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
    <title>Adminn</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="checksaisie.js"></script>
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                <form action="" method="POST" onsubmit="return validateForm()" class="form-signin">

                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="cin">CIN</label>
                            <input type="text" id="cin" name="cin" class="form-control" autofocus>
                            <span id="erreurCin" style="color: red"></span>
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                            <span id="erreurNom" style="color: red"></span>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control">
                            <span id="erreurPrenom" style="color: red"></span>
                        </div>
                        <div class="form-group">
                            <label for="motdepasse">Mot de passe</label>
                            <input type="password" id="motdepasse" name="motdepasse" class="form-control">
                            <span id="erreurMotdepasse" style="color: red"></span>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" value="Sauvegarder" class="btn btn-primary account-btn">
                            <input type="reset" value="Reset" class="btn btn-primary account-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="checksaisie.js"></script>
</body>
</html>
