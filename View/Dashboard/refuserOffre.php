<?php
    require_once '../../Model/OffreEmploi.php';
    require_once '../../Controller/OffreEmploiC.php';
    $OffreEmploiC = new OffreEmploiC();
    $OffreEmplois = $OffreEmploiC->findOffreEmploi($_GET['id_offre']);
    if (isset ($_GET["id_offre"])&&!empty($_GET["id_offre"])){
        $OffreEmploi1 = new OffreEmploi($_GET["id_offre"], "Refusée", $_GET["cin_c"]);
        $OffreEmploiC = new OffreEmploiC();
        $OffreEmploiC->updateOffreEmploi($OffreEmploi1, $_GET['id_offre']);
        header('location:offre.php');
    }
    else {
        echo "undefined id";
    }
?>