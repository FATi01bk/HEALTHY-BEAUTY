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
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $rendez_vous = new rendez_vous(
            null,
            $_POST['nom_patient'],
            $_POST['nom_docteur'],
            $_POST['date_ren'],
            $_POST['type_ren']
        );
        var_dump($rendez_vous);
        
        $rendez_vous->updaterendez_vous($rendez_vous, $_POST['num_ren']);

        header('Location:list-rendez_vouss.php');
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
    <button><a href="list-rendez_vouss.php">retourner a la liste</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idrendez_vous'])) {
        $rendez_vous = $rendez_vousC->showrendez_vous($_POST['idrendez_vous']);
        
    ?>

        <form action="" method="POST">
            <table>
            <tr>
                    <td><label for="nom_patient">Idrendez_vous :</label></td>
                    <td>
                        <input type="text" id="idrendez_vous" name="idrendez_vous" value="<?php echo $_POST['idrendez_vous'] ?>" readonly />
                        <span id="erreurnom_patient" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom_patient">nom_patient :</label></td>
                    <td>
                        <input type="text" id="nom_patient" name="nom_patient" value="<?php echo $rendez_vous['nom_patient'] ?>" />
                        <span id="erreurnom_patient" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom_docteur">Prénom_patient :</label></td>
                    <td>
                        <input type="text" id="nom_docteur" name="nom_docteur" value="<?php echo $rendez_vous['nom_docteur'] ?>" />
                        <span id="erreurnom_docteur" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="date_ren">date_ren :</label></td>
                    <td>
                        <input type="text" id="date_ren" name="date_ren" value="<?php echo $rendez_vous['date_ren'] ?>" />
                        <span id="erreurdate_ren" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="type_renephone">Téléphone :</label></td>
                    <td>
                        <input type="text" id="type_renephone" name="type_ren" value="<?php echo $rendez_vous['type_ren'] ?>" />
                        <span id="erreurtype_renephone" style="color: red"></span>
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