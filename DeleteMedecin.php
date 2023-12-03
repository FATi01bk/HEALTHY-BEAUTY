<?php
include '../controller/MedecinC.php';
$clientC = new MedecinC();
$clientC->deleteMedecin($_GET["id"]);
header('Location:listMedecins.php');

