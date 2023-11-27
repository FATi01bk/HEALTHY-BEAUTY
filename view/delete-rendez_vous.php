<?php
include '../Controler/con-rendez_vous.php';
$clientC = new rendez_vousC();
$clientC->deleterendezvous($_GET["num_ren"]);
header('Location:list-rendez_vous.php');
