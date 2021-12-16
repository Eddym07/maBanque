<?php
if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ||
     (empty($_POST['message']))
    )
{
    echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}

$email = $_POST['email'];
$message = $_POST['message'];
?>

<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
{
 
}
?>


        <div class="container">


            <h1>Message bien reçu !</h1>

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
                </div>
            </div>
        </div>
    </body>
</html>