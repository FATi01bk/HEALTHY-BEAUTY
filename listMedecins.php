<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../controller/MedecinC.php";

$c = new MedecinC();
$tab = $c->listMedecins();

?>

<center>
    <h1>List of medecins</h1>
    <h2>
        <a href="addMedecin.php">Add medecin</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id Medecin</th>
        <th>Cin</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date_naissance</th>
        <th>Age</th>
        <th>Adresse</th>
        <th>Téléphone</th>
        <th>Spécialité</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $medecin) {
    ?>




        <tr>
            <td><?= $medecin['id']; ?></td>
            <td><?= $medecin['cin']; ?></td>
            <td><?= $medecin['nom']; ?></td>
            <td><?= $medecin['prenom']; ?></td>
            <td><?= $medecin['date_naissance']; ?></td>
            <td><?= $medecin['age']; ?></td>
            <td><?= $medecin['adresse']; ?></td>
            <td><?= $medecin['téléphone']; ?></td>
            <td><?= $medecin['spécialité']; ?></td>
            <td align="center">
                <form method="POST" action="updateMedecin.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $medecin['id']; ?> name="idMedecin">
                </form>
            </td>
            <td>
                <a href="DeleteMedecin.php?id=<?php echo $medecin['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>