<?php
include '../controller/PatientC.php';
$clientC = new PatientC();
$clientC->deletePatient($_GET["id"]);
header('Location:listPatients.php');
