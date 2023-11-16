<?php
include '../controller/PatientC.php';
$patientC = new PatientC();
$patientC->deletePatient($_GET["cin"]);
header('Location:listPatients.php');