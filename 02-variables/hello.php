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
$prenom = 'baptiste';
echo '<h1> bonjour '.$prenom.' </h1>';

// interpolation de variable possible avec les doubles quotes
echo "<h1>Bonjour $prenom</h1>";
?>
</body>
</html>