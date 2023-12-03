<?php
include '../controller/AdminnC.php';
$clientC = new AdminnC();
$clientC->deleteAdminn($_GET["id"]);
header('Location:listAdminns.php');
