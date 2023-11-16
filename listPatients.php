<?php
include "../controller/PatientC.php";

$c = new PatientC();
$tab = $c->listPatients();

?>

<center>
    <h1>List of patients</h1>
    <h2>
        <a href="addPatient.php">Add patient</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Cin Patient</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $patient) {
    ?>




        <tr>
            <td><?= $patient['cin']; ?></td>
            <td><?= $patient['nom']; ?></td>
            <td><?= $patient['prenom']; ?></td>
            <td><?= $patient['email']; ?></td>
            <td align="center">
                <form method="POST" action="updatePatient.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $patient['cin']; ?> name="idPatient">
                </form>
            </td>
            <td>
                <a href="deletePatient.php?id=<?php echo $patient['cin']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>