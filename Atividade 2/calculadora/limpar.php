<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<h1 class="texto">
<?php 
$arquivo = fopen("resultado.txt","w");
echo "Historico apagado!";
fclose($arquivo);

?>
<br>
<a href="form.html"><input type="submit" value="Calcular novamente"></a>
</h1>
</body>
</html>