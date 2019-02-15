<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Upload en PHP</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
            <button class="btn btn-primary">Upload</button>
    </form>
    <?php
        var_dump($_FILES);
    if(!empty($_FILES['image'])){
        //On récupére le fichier temporaire
        $tmpFile = $_FILES['image']['tmp_name'];
        // On récupere le nom du fichier
        $fileName = $_FILES['image']['name'];
        // generer un nom de fichier unique :
        // chaton .jpg -> a45da54_chaton.jpg 
        $fileName = substr(md5(time()),0,8).'_'.$fileName;
        //Ondéplace le fichier à l'endroit désiré
        move_uploaded_file($tmpFile, __DIR__.'/upload/'.$fileName);
       
    }
    $folder = opendir('./upload');
    while(($file = readdir($folder)) !== false){
        if($file !== '.' && $file !=='..'){
            echo '<img width="150" src="upload/'.$file.'">';
        }
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>