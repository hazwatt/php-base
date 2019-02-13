<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculette</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

</head>
<body>
    <?php
    
    $nb1  = $_POST['nombre1'];
    $nb2 = $_POST['nombre2'];
    
    if($_POST['operateur'] == '+'){
        $calcule = $nb1 + $nb2;
    }elseif($_POST['operateur'] == '-'){
        $calcule = $nb1 - $nb2;
    }elseif($_POST['operateur'] == '*'){
        $calcule = $nb1 * $nb2;
    }

        echo 'resultat '.$calcule;

    ?>
    <!--Formulaire-->
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col text-center">
                    <input type="number" name="nombre1">
                </div>
                <div class="col text-center">
                    <input type="number" name="nombre2">
                </div>
                <div class="col">
                <input type="radio" name="operateur" value="+" id="add">
                <label for="add">additions</label>
                <input type="radio" name="operateur" value="*" id="mult">
                <label for="mult">multiplication</label>
                <input type="radio" name="operateur" value="-" id="sous">
                <label for="sous">soustraction</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button>Calcule</button>
                </div>
            </div>
        </form>    
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>
</html>