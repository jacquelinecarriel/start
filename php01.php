<?php
$nome="Marcos";
$idade=19;
$casado = true;

if($casado) {
    $msg="casado";
   } else {
       $msg="solteiro";
    }
jacj
if( $idade < 18 ){
        $deMaior = "menor";
            } else {
                $deMaior = "maior"; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aula 02</title>
</head>

<body>
    Aula 01 php
    <h1>
        <?php echo $nome;?>
     <p>   
        Tenho <?php echo $idade ?> anos e sou <?php echo $msg ?>!
</p>
    <p>
        Eu sou de <?php echo $deMaior ?>.
        </p>

</body>

</html>