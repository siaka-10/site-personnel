<?php
$con= new PDO('mysql:host=localhost;dbname=bases_pscpd','root','');
$message = ""; 

if (isset($_POST['btn_valider'])) // si je clique sur le bouton connecter
{
// Récupérer les données du formulaire
$req = $con->prepare('SELECT * FROM connexion WHERE login=:login and mot_de_passe=:mot_de_passe');
$req->bindParam(':login',$_POST['sai_login']);
$req->bindParam(':mot_de_passe',$_POST['sai_mot_de_passe']);

// Remplacez ces informations par celles de votre système d'authentification
  //$_SESSION["login"] = $sol[0]['login'];
  //$_SESSION["mot_de_passe"] = $sol[0]['mot_de_passe'];
$login = 'login';
$mot_de_passe = 'mot_de_passe';

// Vérifier si les informations sont correctes
if ($login === $login && $mot_de_passe === $mot_de_passe) {
    // Authentification réussie
//header('location:page.php'); // Redirige vers la page protégée
    //exit();
} else {
    // Authentification échouée
    echo 'Nom d\'utilisateur ou mot de passe incorrect.';
}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="" method="POST">

        <label for="login">Nom d'utilisateur :</label>
        <input type="text" id="login" name="sai_login" required><br><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="sai_mot_de_passe" required><br><br>
         <div class="col-4">
        <button type="submit" name="btn_valider" ><h1></h1>Valider</h1></button>
    </form>

<!-- jQuery -->
<script src="http://localhost/pscpd/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/pscpd/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/pscpd/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
