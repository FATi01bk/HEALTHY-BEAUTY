<?php
include '../Controller/Fiche_PatientC.php';

$PatientC = new Fiche_PatientC();

if (isset($_GET["Num_Fich"])) {
    try {
        $PatientC->deleteFiche($_GET["Num_Fich"]);
        header('Location:listFiche.php');
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    echo 'Erreur : Num_Fich non défini.';
}
?>