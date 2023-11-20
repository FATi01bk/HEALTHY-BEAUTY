<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../controller/MedecinC.php';
include '../model/Medecin.php';

$error = "";

// create client
$medecin = null;

// create an instance of the controller
$medecinC = new MedecinC();
if (
    isset($_POST["cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["date_naissance"]) &&
    isset($_POST["age"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["téléphone"]) &&
    isset($_POST["spécialité"]) 
) {
    if (
        !empty($_POST['cin']) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["date_naissance"]) &&
        !empty($_POST["age"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["téléphone"]) &&
        !empty($_POST["spécialité"]) 
    ) {
        $medecin = new Medecin(
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['date_naissance'],
            $_POST['age'],
            $_POST['adresse'],
            $_POST['téléphone'],
            $_POST['spécialité'],
            null,
        );
        $medecinC->addMedecin($medecin);
        header('Location:listMedecins.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medecin </title>
</head>

<body>
    <a href="listMedecins.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table>
        <tr>
                <td><label for="cin">Cin :</label></td>
                <td>
                    <input type="text" id="cin" name="cin" />
                    <span id="erreurCin" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="nom">Nom :</label></td>
                <td>
                    <input type="text" id="nom" name="nom" />
                    <span id="erreurNom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="prenom">Prenom :</label></td>
                <td>
                    <input type="text" id="prenom" name="prenom" />
                    <span id="erreurPrenom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="date_naissance">Date_naissance :</label></td>
                <td>
                    <input type="text" id="date_naissance" name="date_naissance" />
                    <span id="erreurDate_naissance" style="color: red"></span>
                </td>
            </tr>
            
            <tr>
                <td><label for="age">Age :</label></td>
                <td>
                    <input type="text" id="age" name="age" />
                    <span id="erreurAge" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="adresse">Adresse :</label></td>
                <td>
                    <input type="text" id="adresse" name="adresse" />
                    <span id="erreurAdresse" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="téléphone">Téléphone :</label></td>
                <td>
                    <input type="text" id="téléphone" name="téléphone" />
                    <span id="erreurTéléphone" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="spécialité">Spécialité :</label></td>
                <td>
                    <input type="text" id="spécialité" name="spécialité" />
                    <span id="erreurSpécialité" style="color: red"></span>
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