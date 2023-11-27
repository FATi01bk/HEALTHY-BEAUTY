<?php

include '../Controler/con-rendez_vous.php';
include '../model/rendez-vous.php';

$error = "";

$success = "";
$rendez_vous = null;


$rendez_vousC = new rendez_vousC();

if (isset($_GET["num_ren"])) {
    // Récupérer les informations du patient à mettre à jour
    $rendezvoustoupdateS = $rendez_vousC->showrendezvous($_GET["num_ren"]);

    // create rendez_vous
    $rendez_vous = null;

    // create an instance of the controller
    $rendez_vousC = new rendez_vousC();

    if (
        isset($_POST["num_ren"]) &&
        isset($_POST["nom_patient"]) &&
        isset($_POST["nom_docteur"]) &&
        isset($_POST["date_ren"]) &&
        isset($_POST["temp_ren"]) &&
        isset($_POST["tel_ren"]) &&
        isset($_POST["type_ren"]) 
    ) {
        
        $numren = intval($_POST["num_ren"]);
        

        if ($numren > 0) {  // Assurez-vous que c'est un nombre valide
            // Reste du code
            var_dump($_POST);  // Ajoutez cette ligne pour afficher les données du formulaire 
            
            try {
                // Prépare la requête
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE rendez_vous SET 
                        nom_patient = :nom_patient,
                        nom_docteur = :nom_docteur,
                        date_ren = :daye_ren, 
                        temp_ren = :temp_ren, 
                        tel_ren = :tel_ren,
                        type_ren= :type_ren,
                    WHERE num_ren= :num_ren'
                );

                // Exécute la requête
                $query->execute([
                    'nom_patient' => $_POST['nom_patient'],
                    'nom_docteur' => $_POST['nom_docteur'],
                    'date_ren' => $_POST['date_ren'],
                    'temp_ren' => $_POST['temp_ren'],
                    'type_ren' => $_POST['type_ren'],
                    'tel_ren' => $_POST['tel_ren'],
                    'num_ren' => $numren,
                ]);

                echo $query->rowCount() . " records UPDATED successfully <br>";
                if ($query->rowCount() > 0) {
                    $success = "rendez_vous mis à jour avec succès.";
                    header('Location: list-rendez_vous.php');
                    exit;
                } else {
                    $error = "La mise à jour du patient a échoué.";
                }

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
            // Reste du code
        } else {
            $error = "num_ren invalide.";
        }
    }
} else {
    echo 'Erreur : num_ren non défini.';
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
                             <a href="list-rendez_vous.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
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
                        <h4 class="page-title">Modifier un Rendez-vous</h4>
                    </div>
                </div>
                <div id="error">
        <?php echo $error; ?>
    </div>

    <div id="success">
        <?php echo $success; ?>
    </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    </div>
                        <form  action=""  method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
										<label  for="num_ren">Id de Rendez-vous</label>
										<input id="num_ren" class="form-control" type="text"  name="num_ren" value="<?php echo $rendezvoustoupdateS['num_ren'] ?>" />
                                        <span id="erreurnum_ren" style="color: red"></span>
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<label for="nom_patient">Nom Patient</label>   
										<input id="nom_patient" class="form-control"  name="nom_patient" value="<?php echo $rendezvoustoupdateS['nom_patient'] ?>">
                                       <span  style="color: red"></span>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_ren">Type de Rendez-vous</label>                                       
                                        <select class="select" name="type_ren">

                                            <option value="consultation">Consultation</option>
                                            <option value="seance">Seance</option>
                                        </select>
                                        <span style="color: red"></span>                                             
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom_docteur">Medenom_patient</label>
                                       
                                        <input class="form-control" name="nom_docteur" value="<?php echo $rendezvoustoupdateS['nom_docteur'] ?>"/> 
                                        <span   style="color: red"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_ren">Date</label>
                                        <span  style="color: red"></span>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="date_ren" value="<?php echo $rendezvoustoupdateS['date_ren'] ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="temp_ren">Temps</label>
                                        <span  style="color: red"></span>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker3" name="temp_ren" value="<?php echo $rendezvoustoupdateS['temp_ren'] ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tel_ren">Tel</label>
                                        <span  style="color: red"></span>
                                        <input class="form-control" type="text" name="tel_ren" value="<?php echo $rendezvoustoupdateS['tel_ren'] ?>">
                                    </div>
                                </div>
                            
                            <div class="form-group">
                                <label for="des_ren">Description</label>
                                <span  style="color: red"></span>
                                <textarea cols="30" rows="4" class="form-control" name="des_ren" value="<?php echo $rendezvoustoupdateS['des_ren'] ?>"></textarea>
                            </div>
                        </div>
                           </div>
                            <div class="m-t-20 text-center">
                                <input onclick="verifiajout()" type="submit" class="btn btn-primary submit-btn" value="Modifier ">
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


