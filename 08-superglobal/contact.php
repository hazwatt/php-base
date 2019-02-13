<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (!empty($_POST)) {
$email = $_POST['mail'];
$message = $_POST['message'];
$sujet = $_POST['sujet'];


if(false == filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email = 'cest pas bon ton email';
}else{
    $email = 'cest bon email';
}
if(strlen($sujet) == 0){
    $sujet = 'le sujet pas bon';
}else{
    $sujet = 'cest bon sujet';
}
if(strlen($message) < 15){
    $message = 'pas assez de caract';
}else{
    $message = 'cest bon message';
}

}

?>



    <form action="" method="post">
        <input type="text" name="message" id="message" value="<?php echo $message ?? ''; ?>">
        <input type="text" name="sujet" id="sujet" value="<?php echo $sujet ?? ''; ?>">
        <input type="text" name="mail" id="mail" value="<?php echo $email ?? ''; ?>">
        <button>envoie</button>
    </form>
</body>
</html>