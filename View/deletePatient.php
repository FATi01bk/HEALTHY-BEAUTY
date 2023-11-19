<?php
include '../Controller/Fiche_PatientC.php';
$PatientC = new Fiche_PatientC();
$PatientC->deletePatient($_GET["num_Fich"]);
header('Location:listPatient.php');
?>
