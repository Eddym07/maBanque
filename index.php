<?php
include('Template/header.php');

// Ci dessous le formulaire d'identification
if (isset($_POST['prenom']) && isset($_POST['nom'])) { //isset détermine si une variable est déclaré et est différente de NULL
    
    $prenom = htmlspecialchars($_POST ['prenom']); //htmlspecialchars fait que tout ce qui sera tapé sera considéré comme caractère et non comme ligne de commande.
    $nom = htmlspecialchars($_POST ['nom']);
    
    echo'Bonjour' .' '. $_POST['prenom'] .' '. $_POST['nom'] .' !';
}
/* ci-dessous je dis de m'affiché un formulaire avec la méthode post et l'" action" c'est vers quel page sera envoyé les infos.   */
 include('Model/formulaireConnexion.php');

    include('Template/footer.php');
