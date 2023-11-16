<?php

include '../Controler/con-rendez_vous.php';
include '../model/rendez-vous.php';

$error = "";


$rendez_vous = null;


$rendez_vousC = new rendez_vousC();
if (
    isset($_POST["nom_patient"]) &&
    isset($_POST["nom_docteur"]) &&
    isset($_POST["date_ren"]) &&
    isset($_POST["type_ren"])
) {
    if (
        !empty($_POST['nom_patient']) &&
        !empty($_POST["nom_docteur"]) &&
        !empty($_POST["date_ren"]) &&
        !empty($_POST["type_ren"])
    ) {
        $rendez_vous = new rendez_vous(
            null,
            $_POST['nom_patient'],
            $_POST['nom_docteur'],
            $_POST['date_ren'],
            $_POST['type_ren']
        );
        $rendez_vousC->addrendezvous($rendez_vous);
        header('Location:list-rendez_vous.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez_vous </title>
</head>

<body>
    <a href="list-rendez_vous.php">retourner  </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
    <h1>Ajouter un rendez_vous</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="nom_patient">nom_patient :</label></td>
                <td>
                    <input type="text" id="nom_patient" name="nom_patient" />
                    <span id="rnom_patient" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="nom_docteur">Nom docteur</label></td>
                <td>
                    <input type="text" id="nom_docteur" name="nom_docteur" />
                    <span id="nom_docteur" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="date_ren">Date :</label></td>
                <td>
                    <input type="text" id="date_ren" name="date_ren" />
                    <span id="date_ren" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="type_ren">Type</label></td>
                <td>
                    <input type="text" id="type_ren" name="type_ren" />
                    <span id="type_ren" style="color: red"></span>
                </td>
            </tr>


            <td>
                <input type="submit" value="Save">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </table>

    </form>
</body>

</html>