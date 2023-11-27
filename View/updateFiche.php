<?php
include '../Controller/Fiche_PatientC.php';
include '../Model/Fiche_Patient.php';
$error = "";
$success = "";

$PatientC = new Fiche_PatientC();

if (isset($_GET["Num_Fich"])) {
    // Récupérer les informations du patient à mettre à jour
    $patientToUpdate = $PatientC->showFiche($_GET["Num_Fich"]);

    // create Fiche_Patient
    $fiche_patient = null;

    // create an instance of the controller
    $fiche_PatientC = new Fiche_PatientC();

    if (
        isset($_POST["Num_Fich"]) &&
        isset($_POST["CIN"]) &&
        isset($_POST["Nom"]) &&
        isset($_POST["Prenom"]) &&
        isset($_POST["Date_naissance"]) &&
        isset($_POST["Age"]) &&
        isset($_POST["Adresse"]) &&
        isset($_POST["Num_tel"]) &&
        isset($_POST["Date_ajout"]) &&
        isset($_POST["Maladie"])
    ) {
        
        $numFich = intval($_POST["Num_Fich"]);
        

        if ($numFich > 0) {  // Assurez-vous que c'est un nombre valide
            // Reste du code
            var_dump($_POST);  // Ajoutez cette ligne pour afficher les données du formulaire 
            
            try {
                // Prépare la requête
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE fiche_patient SET 
                        CIN = :CIN,
                        Nom = :Nom,
                        Prenom = :Prenom, 
                        Date_naissance = :Date_naissance, 
                        Age = :Age,
                        Adresse = :Adresse, 
                        Num_tel = :Num_tel,
                        Date_ajout = :Date_ajout,
                        Maladie = :Maladie
                    WHERE Num_Fich= :Num_Fich'
                );

                // Exécute la requête
                $query->execute([
                    'CIN' => $_POST['CIN'],
                    'Nom' => $_POST['Nom'],
                    'Prenom' => $_POST['Prenom'],
                    'Date_naissance' => $_POST['Date_naissance'],
                    'Age' => $_POST['Age'],
                    'Adresse' => $_POST['Adresse'],
                    'Num_tel' => $_POST['Num_tel'],
                    'Date_ajout' => $_POST['Date_ajout'],
                    'Maladie' => $_POST['Maladie'],
                    'Num_Fich' => $numFich
                ]);

                echo $query->rowCount() . " records UPDATED successfully <br>";
                if ($query->rowCount() > 0) {
                    $success = "Fiche  Patient mis à jour avec succès.";
                    header('Location: listFiche.php');
                    exit;
                } else {
                    $error = "La mise à jour de fiche patient a échoué.";
                }

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
            // Reste du code
        } else {
            $error = "Num_Fich invalide.";
        }
    }
} else {
    echo 'Erreur : Num_Fich non défini.';
}
?>

<html lang="en">
<!-- add-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title>Healthy Beauty</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
    <script src="js\controle.js" ></script>
</head>

<body>

    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="img/logo.png" width="35" height="35" alt=""> <span>Healthy Beauty</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right"></span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">Mon Profile</a>
						<a class="dropdown-item" href="login.html">Déconexion</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">Mon Profile</a>
                    <a class="dropdown-item" href="login.html">Déconexion</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index-2.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="leaves.html"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                       
                        <li class="active">
                            <a href="appointments.html"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="schedule.html"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                      
						<li>
							<a href="activities.html"><i class="fa fa-bell-o"></i> <span>Activities</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="expense-reports.html"> Expense Report </a></li>
								<li><a href="invoice-reports.html"> Invoice Report </a></li>
							</ul>
						</li>
                        
                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"> Login </a></li>
                               
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="change-password2.html"> Change Password </a></li>

                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Mise à jour du Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <div id="error">
        <?php echo $error; ?>
    </div>
                        <form  action=""  method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Num_Fich">Num_Fich</label>
                                        <input type="text" id="Num_Fich" name="Num_Fich" value="<?php echo $patientToUpdate['Num_Fich']; ?>" readonly />
                
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
                                        <label for="CIN">CIN</label>
                                        <span id="erreurnom_patient" style="color: red"></span>
										<input  class="form-control" type="text" id="CIN" name="CIN" value="<?php echo $patientToUpdate['CIN']; ?>" />
                                        
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="Nom">Nom</label>
                                    <input class="form-control" type="text" id="Nom" name="Nom" value="<?php echo $patientToUpdate['Nom']; ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Nom">Prenom</label>
                                        <input class="form-control" type="text" id="Prenom" name="Prenom" value="<?php echo $patientToUpdate['Prenom']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Date_naissance">Date_naissance</label>
                                        <span id="erreurDate_naissance" style="color: red"></span>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker"  id="Date_naissance" name="Date_naissance" value="<?php echo $patientToUpdate['Date_naissance']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Age">Age</label>
                                        <span  style="color: red"></span>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="Age"  name="Age" value="<?php echo $patientToUpdate['Age']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Adresse">Adresse</label>
                                        <span id="erreurAdresse" style="color: red"></span>
                                        <input class="form-control" type="text" name="Adresse" value="<?php echo $patientToUpdate['Adresse']; ?>" />
                                    </div>
                                </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Num_tel">Num_tel</label>
                                        <span id="erreurNum_tel" style="color: red"></span>
                                        <input class="form-control" type="text" name="Num_tel" value="<?php echo $patientToUpdate['Num_tel']; ?>" />
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Date_ajout">Date_ajout</label>
                                        <span id="erreurDate_ajout" style="color: red"></span>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker"  id="Date_ajout" name="Date_ajout" value="<?php echo $patientToUpdate['Date_ajout']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="form-group">
                                <label for="Maladie">Maladie</label>
                                <span id="erreurMaladie" style="color: red"></span>
                                <textarea cols="30" rows="4" class="form-control" name="Maladie" value="<?php echo $patientToUpdate['Maladie']; ?>" ></textarea>
                            </div>
                        </div>
                           </div>
                            <div class="m-t-20 text-center">
                                <input onclick="validateForm()" type="submit" class="btn btn-primary submit-btn" value="Enregistrer les modifications">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/select2.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/app.js"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>


<!-- add-appointment24:07-->
</html>