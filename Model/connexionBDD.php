<?php 
try
{
// On se connecte à MySQL

$dbh = new PDO('mysql:host=localhost;dbname=MaBanque', 'root', 'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);
}
catch (Exception $e)
{

    //En cas d'erreur, on affiche un message et on arrête tout
    die('erreur : '.$e->getMessages());
}

    //Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table account
$sqlQuery = 'SELECT * FROM Account';
$state = $dbh -> Prepare($sqlQuery);
$state -> execute();
$accounts = $state -> fetchAll();
var_dump ($accounts);

//On affiche chaque compte
foreach ($accounts as $account) {
?>
    <p><?php echo $account['']; ?>
    <?php
}

$sth = null;
$dbh = null;