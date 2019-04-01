<?php
    include_once('headerAdmin.php');
    $service = new UserC();
    $clients = $service->getClients();
?>
<div class="content">
    <table class="table">
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Nom d'utilisateur</th>
            <th>Cin</th>
            <th>Région</th>
            <th>Ville</th>
            <th>Numéro</th>
            <th>Action</th>
        </thead>
        <tbody>
<?php
    foreach ($clients as $row)
    {
        echo'
            <tr>
                <td>'.$row["nom"].'</td>
                <td>'.$row["prenom"].'</td>
                <td>'.$row["username"].'</td>
                <td>'.$row["cin"].'</td>
                <td>'.$row["region"].'</td>
                <td>'.$row["ville"].'</td>
                <td>'.$row["numero"].'</td>
            </tr>
        ';
    }
?>


        </tbody>
    </table>
</div>
<?php
    include_once('footerAdmin.php');
?>
