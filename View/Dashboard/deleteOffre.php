<?php
    require_once '../../Controller/OffreEmploiC.php';
    $OffreEmploiC = new OffreEmploiC();
    if (isset ($_GET["id_offre"])&&!empty($_GET["id_offre"])){
        $list = $OffreEmploiC->deleteOffreEmploi($_GET["id_offre"]);
        header('location:offre.php');
    }
    else {
        echo "undefined id";
    }
?>