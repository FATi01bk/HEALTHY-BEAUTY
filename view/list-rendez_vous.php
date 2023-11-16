<?php
include "../controler/con-rendez_vous.php";

$c = new rendez_vousC();
$tab = $c->listerendezvous();

?>
<center>
    <h1>Liste des rendez_vous</h1>
    <h2>
        <a href="add-rendez_vous.php">Ajouter rendez_vous</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id rendez_vous</th>
        <th>Nom patient</th>
        <th>Nom medecin</th>
        <th>Date</th>
        <th>Type ren</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($tab as $rendez_vous) {
    ?>

        <tr>
            <td><?= $rendez_vous['num_ren']; ?></td>
            <td><?= $rendez_vous['nom_patient']; ?></td>
            <td><?= $rendez_vous['nom_docteur']; ?></td>
            <td><?= $rendez_vous['date_ren']; ?></td>
            <td><?= $rendez_vous['type_ren']; ?></td>
            <td align="center">
                <form method="POST" action="update-rendez_vous.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $rendez_vous['num_ren']; ?> name="num_ren">
                </form>
            </td>
            <td>
                <a href="delete-rendez_vous.php?num_ren=<?php echo $rendez_vous['num_ren']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>