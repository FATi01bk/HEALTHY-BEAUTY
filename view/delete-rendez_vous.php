<?php
include '../Controler/con-rendez_vous.php';
$patientC = new rendez_vous();
$patientC->deleterendezvous($_GET["num_ren"]);
header('Location:list-rendez_vous.php');
