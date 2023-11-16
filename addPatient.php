<?php

include '../controller/PatientC.php';
include '../model/Patient.php';

$error = "";

// create client
$patient = null;

// create an instance of the controller
$patientC = new PatientC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) 
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) 
    ) {
        $patient = new Patient(
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email']
        );
        $patientC->addPatient($patient);
        header('Location:listPatients.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient </title>
</head>

<body>
    <a href="listPatients.php">Back to list </a>
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
                <td><label for="cin">Nom :</label></td>
                <td>
                    <input type="text" id="nom" name="nom" />
                    <span id="erreurNom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom :</label></td>
                <td>
                    <input type="text" id="prenom" name="prenom" />
                    <span id="erreurPrenom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td>
                    <input type="text" id="email" name="email" />
                    <span id="erreurEmail" style="color: red"></span>
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