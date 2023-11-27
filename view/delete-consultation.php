<?php
include '../Controler/con-consultation.php';
$clientC = new consultationC();
$clientC->deleteconsultation($_GET["num_tel"]);
header('Location:demanderendez_vous.php');
