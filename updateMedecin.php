<?php

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
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $medecin = new Medecin(
            null,
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['date_naissance'],
            $_POST['age'],
            $_POST['adresse'],
            $_POST['téléphone'],
            $_POST['spécialité']
        );
        var_dump($medecin);
        
        $medecinC->updateMedecin($medecin, $_POST['idMedecin']);

        header('Location:listMedecins.php');
    } else
        $error = "Missing information";
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="listMeddecins.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idMedecin'])) {
        $medecin = $medecinC->showMedecin($_POST['idMedecin']);
        
    ?>

        <form action="" method="POST">
            <table>
            <tr>
                    <td><label for="nom">IdMedecin :</label></td>
                    <td>
                        <input type="text" id="idMedecin" name="idMedecin" value="<?php echo $_POST['idMedecin'] ?>" readonly />
                        <span id="erreurNom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="cin">Cin :</label></td>
                    <td>
                        <input type="text" id="cin" name="cin" value="<?php echo $medecin['cin'] ?>" />
                        <span id="erreurCin" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom">Nom :</label></td>
                    <td>
                        <input type="text" id="nom" name="nom" value="<?php echo $medecin['nom'] ?>" />
                        <span id="erreurNom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="prenom">Prénom :</label></td>
                    <td>
                        <input type="text" id="prenom" name="prenom" value="<?php echo $medecin['prenom'] ?>" />
                        <span id="erreurPrenom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="date_naissance">Date_naissance :</label></td>
                    <td>
                        <input type="text" id="date_naisssance" name="date_naissance" value="<?php echo $medecin['date_naissance'] ?>" />
                        <span id="erreurDate_naissance" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="age">Age:</label></td>
                    <td>
                        <input type="text" id="age" name="age" value="<?php echo $medecin['age'] ?>" />
                        <span id="erreurAge" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="adresse">Adresse :</label></td>
                    <td>
                        <input type="text" id="adresse" name="adresse" value="<?php echo $medecin['adresse'] ?>" />
                        <span id="erreurAdresse" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="téléphone">Téléphone :</label></td>
                    <td>
                        <input type="text" id="téléphone" name="téléphone" value="<?php echo $medecin['téléphone'] ?>" />
                        <span id="erreurTéléphone" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="spécialité">Spécialité :</label></td>
                    <td>
                        <input type="text" id="spécialité" name="spécialité" value="<?php echo $medecin['spécialité'] ?>" />
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
    <?php
    }
    ?>
</body>

</html>