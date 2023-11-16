<?php

include '../controller/PatientC.php';
include '../model/Patient.php';
$error = "";

// create client
$patient = null;
// create an instance of the controller
$patientC = new PatientC();


if (
    isset($_POST["cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) 
) {
    if (
        !empty($_POST['cin']) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) 
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $patient= new Patient(
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email']
        );
        var_dump($patient);
        
        $patientC->updatePatient($patient, $_POST['cin']);

        header('Location:listPatients.php');
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
    <button><a href="listPatients.php">Back to list</a></button>
    <hr>

    <div cin="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['cinPatient'])) {
        $patient = $patientC->showPatient($_POST['cinPatient']);
        
    ?>

        <form action="" method="POST">
            <table>
            <tr>
                    <td><label for="nom">CINPatient :</label></td>
                    <td>
                        <input type="text" id="cinPatient" name="cinPatient" value="<?php echo $_POST['cinPatient'] ?>" readonly />
                        <span id="erreurCin" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom">Nom :</label></td>
                    <td>
                        <input type="text" id="nom" name="nom" value="<?php echo $patient['nom'] ?>" />
                        <span id="erreurNom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="prenom">Prénom :</label></td>
                    <td>
                        <input type="text" id="prenom" name="prenom" value="<?php echo $patient['prenom'] ?>" />
                        <span id="erreurPrenom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td>
                        <input type="text" id="email" name="email" value="<?php echo $patient['email'] ?>" />
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
    <?php
    }
    ?>
</body>

</html>