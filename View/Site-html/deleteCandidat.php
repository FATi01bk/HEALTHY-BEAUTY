<?php
    require_once '../../Controller/candidatC.php';
    require_once '../../Controller/OffreEmploiC.php';
    $OffreEmploiC = new OffreEmploiC();
    $candidatC = new candidatC();
    if (isset ($_GET["cin"])&&!empty($_GET["cin"])){
        $list = $OffreEmploiC->deleteOffreByCin($_GET["cin"]);
        $list = $candidatC->delete($_GET["cin"]);
        header('location:offredemploi.php');
    }
    else {
        echo "undefined cin";
    }
?>