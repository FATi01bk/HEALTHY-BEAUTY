<?php

include '../Controller/Fiche_PatientC.php';
include '../model/Fiche_Patient.php';
$error = "";


// create  Fiche_Patient
$Fiche_patient = null;

// create an instance of the controller
$fiche_PatientC = new Fiche_PatientC();


if (
    isset($_POST["num_Fich"]) &&
    isset($_POST["Cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["date_naissance"]) &&
    isset($_POST["age"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["num_tel"]) &&
    isset($_POST["date_ajout"]) &&
    isset($_POST["maladie"]) &&
    isset($_POST["num_hisfiche"]) 
) {
    if (
        !empty($_POST["num_Fich"]) &&
        !empty($_POST["Cin"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["date_naissance"]) &&
        !empty($_POST["age"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["num_tel"]) &&
        !empty($_POST["date_ajout"]) &&
        !empty($_POST["maladie"]) &&
        !empty($_POST["num_hisfiche"])
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $Fiche_Patient = new Fiche_Patient(
            null,
            $_POST["num_Fich"],
            $_POST["Cin"],
            $_POST["nom"],
            $_POST["prenom"],
            $_POST["prenom"],
            $_POST["age"],
            $_POST["adresse"],
            $_POST["num_tel"],
            $_POST["date_ajout"],
            $_POST["maladie"],
            $_POST["num_hisfiche"]
        );
        var_dump($Fiche_Patient);

        $fiche_PatientC->updatePatient($Fiche_Patient, $_POST['num_Fich']);

        header('Location:listPatient.php');
    } else
        $error = "Missing information";

}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les Patients</title>
</head>

<body>
    <button><a href="listPatient.php">Retour à la liste</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    
        
    ?>
    
        <form action="" method="POST">
            <table>
            <tr>
                    <td><label for="num_Fich">N]fiche:</label></td>
                    <td>
                        <input type="text" id="num_Fich" name="num_Fich" value="<?php echo $_POST['num_Fich'] ?>" />
                        <span id="erreurNum_Fich" style="color: blue"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="cin">CIN :</label></td>
                    <td>
                        <input type="text" id="Cin" name="Cin" value="<?php echo $_POST['Cin'] ?>" />
                        <span id="erreurNom" style="color: blue"></span>
                    </td>
                </tr>
                <tr>
                <td><label for="nom">Nom :</label></td>
                <td>
                    <input type="text" id="nom" name="nom" value="<?php echo $_POST['nom'] ?>" />
                    <span id="erreurNom" style="color: blue"></span>
                </td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom :</label></td>
                <td>
                    <input type="text" id="prenom" name="prenom"  value="<?php echo $_POST['prenom'] ?>"/>
                    <span id="erreurPrenom" style="color: blue"></span>
                </td>
            </tr>
            <tr>
                <td><label for="date_naissance">Date de naissance :</label></td>
                <td>
                    <input type="text" id="dob" name="date_naissance" value="<?php echo $_POST['date_naissance'] ?>" />
                    <span id="erreurDate_naissance" style="color: blue"></span>
                </td>
            </tr>
            <tr>
                <td><label for="age">Age :</label></td>
                <td>
                    <input type="text" id="age" name="age" value="<?php echo $_POST['age'] ?>" />
                    <span id="erreurAge" style="color: blue"></span>
                </td>
            </tr>
            <tr>
                <td><label for="adresse">Adresse :</label></td>
                <td>
                    <input type="text" id="adresse" name="adresse" value="<?php echo $_POST['adresse'] ?>" />
                    <span id="erreurAdresse" style="color: blue"></span>
                </td>
            </tr>
            <tr>
                <td><label for="num_tel">N°Téléphone :</label></td>
                <td>
                    <input type="text" id="telephone" name="num_tel" value="<?php echo $_POST['num_tel'] ?>" />
                    <span id="erreurNum_tel" style="color: blue"></span>
                </td>
            </tr>
            <tr>
                <td><label for="date_ajout">Date d'ajout :</label></td>
                <td>
                    <input type="text" id="date" name="date" value="<?php echo $_POST['date_ajout'] ?>"/>
                    <span id="erreurDate_ajout" style="color: blue"></span>
                </td>
            </tr>
            <tr>
                <td><label for="maladie">Maladie :</label></td>
                <td>
                    <input type="text" id="maladie" name="maladie" value="<?php echo $_POST['maladie'] ?>"/>
                    <span id="erreurMaladie" style="color: blue"></span>
                </td>
            </tr>

            <tr>
                <td><label for="num_hisfiche">N°historique fiche :</label></td>
                <td>
                    <input type="text" id="num_hisfiche" name="num_hisfiche" value="<?php echo $_POST['num_hisfiche'] ?>"/>
                    <span id="erreurnum_hisfiche" style="color: blue"></span>
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

