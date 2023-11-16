<?php
    require '../../Controller/candidatC.php';
    $candidatC = new candidatC();
    if (isset ($_GET["cin"])&&!empty($_GET["cin"])){
        $list = $candidatC->delete($_GET["cin"]);
        header('location:afficherCandidats.php');
    }
    else {
        echo "undefined cin";
    }
?>