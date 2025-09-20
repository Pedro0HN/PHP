<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="formhtml">
<?php 
$nome = $_POST['nome'];
$num = $_POST['num'];
$arquivo = fopen("resultado.txt","a");

function calcular($tabuada){
    $resultado = "";
    echo "Resultado" . "<br>";

    for($i = 1;$i <= 10;$i++){
       $resultado .= "$tabuada x $i = " . ($tabuada * $i) . "\n" ;
       
       echo "$tabuada x $i = " . ($tabuada * $i) . "<br>";
    }
    return $resultado;

}
fwrite($arquivo,calcular($num));
fclose($arquivo);

?>

<a href="mostrar.php"><input type="submit" value="Ver todas as tabuadas"></a>
<br>
<a href="form.html"><input type="submit" value="Calcular outro numero"></a>
</h1>
</body>
</html>