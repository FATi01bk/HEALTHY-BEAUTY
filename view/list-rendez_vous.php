<?php
include "../controler/con-rendez_vous.php";

$c = new rendez_vousC();
$tab = $c->listerendezvous();

?>

<!DOCTYPE html>
<html lang="en">


<!-- appointments23:19-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title>Healthy Beauty</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
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
						
                        <li class="active">
                        <a href="list-rendez_vous.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="schedule.html"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                        
						
						<li>
							<a href="liste-consultation.php"><i class="fa fa-bell-o"></i> <span>liste des demandes</span></a>
						</li>
						
                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>     
                    </ul>
                </div>
            </div>
        </div>
         <div class="page-wrapper">
            <div class="content">
     <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Les Rendez-vous</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-rendez_vous.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Ajouter un Rendez-vous</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
                        <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Nom Patient</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>        
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <a href="#" class="btn btn-success btn-block"> Chercher </a>
                    </div>
                </div>           
							<table class="table table-striped custom-table">
                            <thead>
									<tr>
										<th>ID de Rendez-vous</th>
										<th>Nom Patient</th>
										<th>Nom Docteur</th>
                                        <th>Type de Rendez-vous</th>
                                        <th>Date</th>
                                        <th>Temp</th>
										<th class="text-right"></th>
                                        <th></th>
									</tr>
								</thead>
								<tbody>
		<tr>
                                    <?php
                 foreach ($tab as $rendez_vous) {
               ?>
               <tr>
               <td><?= $rendez_vous['num_ren']; ?></td>
               <td><?= $rendez_vous['nom_patient']; ?></td>
               <td><?= $rendez_vous['nom_docteur']; ?></td>      
              <td><?= $rendez_vous['type_ren']; ?></td>
              <td><?= $rendez_vous['date_ren']; ?></td>
              <td><?= $rendez_vous['temp_ren']; ?></td>
             <td class="text-right">
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a  class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">                                 
                                               <button  class="dropdown-item"></button>
                                               <div>
                                               <a href="update-rendez_vous.php?num_ren=<?= $rendez_vous['num_ren']; ?>" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i>Modifier</a>
                                              </div>
                                            </form>

                                                 <div>
													<a href="delete-rendez_vous.php?num_ren=<?php echo $rendez_vous['num_ren']; ?>" class="dropdown-item" ><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                 </div>
                                                </div>
											</div>
										</td>
									</tr>
                                    <?php
    }
    ?>
								</tbody>
							</table>
						</div>
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
    <script src="js/app.js"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
				$('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
     </script>
</body>


<!-- appointments23:20-->
</html>