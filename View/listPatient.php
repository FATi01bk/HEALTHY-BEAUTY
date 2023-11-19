<?php
include "../controller/Fiche_PatientC.php";

$S = new Fiche_PatientC();
$tab = $S->listPatient();

?>

<center>
    <h1>Liste des patients</h1>
    <h2>
        <a href="addPatient.php">Ajouter patient</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>CIN</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de naissance</th>
        <th>Age</th>
        <th>Adresse</th>
        <th>Num_tel</th>
        <th>Maladie</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $Fiche_Patient) {
    ?>




        <tr>
        <td><?= $Fiche_Patient['num_Fich']; ?></td>
            <td><?= $Fiche_Patient['Cin']; ?></td>
            <td><?= $Fiche_Patient['nom']; ?></td>
            <td><?= $Fiche_Patient['prenom']; ?></td>
            <td><?= $Fiche_Patient['date_naissance']; ?></td>
            <td><?= $Fiche_Patient['age']; ?></td>
            <td><?= $Fiche_Patient['adresse']; ?></td>
            <td><?= $Fiche_Patient['num_tel']; ?></td>
            <td><?= $Fiche_Patient['date_ajout']; ?></td>
            <td><?= $Fiche_Patient['maladie']; ?></td>
            <td><?= $Fiche_Patient['num_hisfiche']; ?></td>

            <td align="center">
                <form method="POST" action="updatePatient.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $Fiche_Patient['num_fich']; ?> name="num_Fich">
                </form>
            </td>
            <td>
                <a href="deletePatient.php?id=<?php echo $Fiche_Patient['num_fich']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>