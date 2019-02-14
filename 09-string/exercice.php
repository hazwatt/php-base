
<form action="" method="post"><input type="text" name="acro">
<button>clique</button>
</form>

<?php
if (!empty($_POST)) {
$acro = $_POST['acro'];

function acronym($acro){
    $keywords = $acro;
    $array_keywords = explode(' ', $keywords);  
    foreach($array_keywords as $mot){
        $premiere .= $mot[0];
    }
    return $premiere;
}
echo acronym($_POST['acro']);
}

?>
<?php
function conjuguer(){
    sub($verbe)
}


?>
