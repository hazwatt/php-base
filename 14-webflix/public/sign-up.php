<?php
/**
 * Inscription de l'utilisateur
 * Etape 1 : Créer une nouvelle table user dans la base de données avec PHPMyAdmin.
 *           On va créer les colonnes id (INT), email (VARCHAR) et password (VARCHAR).
 * Etape 2 : Ajouter un formulaire sur cette page pour que l'utilisateur puisse s'inscrire.
 *           On aura trois champs : email, password, et confirm-password.
 *           Pour être valide, l'email devra être un email valide. Le mot de passe devra correspondre au second
 *           champ de confirmation de mot de passe. (BONUS: Carmelo nous propose de valider le mot de passe
 *           avec un minimum de 8 caractères contenant au moins un chiffre et un caractère spécial).
 * Etape 3 : Avec les données du formulaire, insérer le nouvel d'utilisateur dans la base de données.
 */
include(__DIR__.'/../partials/header.php');
$email = null;
$password = null;
$verifpassword = null;
$errors = [];
if(!empty($_POST)){
    $email = $_POST['email'];
    $password = trim($_POST['password']);
    $verifpassword = trim($_POST['verifpassword']);
    if (empty($email)) {
        $errors['email'] = 'email vide';
    }
    if (empty($password)) {
    $errors['password'] = 'mot de pass vide';
    }
    if (empty($verifpassword)) {
    $errors['verifpassword'] = 'verif vide';
    }
    if($password !== $verifpassword){
    $errors['verifpassword'] = 'mot de passe different';
    }
    
    if (empty($errors)) {
    $query = $db->prepare('INSERT INTO user (email, password) VALUES (:email, :password)');
    $query->bindValue(':email', $email);
    $query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
        if ($query->execute()) {
        echo '<div class="alert alert-success">Le noob a bien etait ajouté</div>';
        }
    }
}
?>
<?php
        // S'il y a des erreurs
        if (!empty($errors)) {
            echo '<div class="alert alert-danger">';
            echo '<p>Le formulaire contient des erreurs</p>';
            echo '<ul>';
            foreach ($errors as $field => $error) {
                echo '<li>'.$field.' : '.$error.'</li>';
            }
            echo '</ul>';
            echo '</div>';
        }
?>
<div class="container">
<div class="row">
        <div class="col-md-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="verifpassword">tes sur du pasword</label>
                    <input type="password" name="verifpassword" id="verifpassword" class="form-control">
                </div>
                    <button class="btn btn-primary btn-block">Ajouter un noob</button>
                    
            </form>
        </div>
    </div>
</div>



<?php require_once __DIR__ . '/../partials/footer.php'; ?>
