<?php 
$arquivo = fopen("resultado.txt","r");
$conteudo = file_get_contents("resultado.txt");

echo nl2br($conteudo);
fclose($arquivo);



?>
<a href="form.html"><input type="submit" value="Calcular outro numero"></a>
<br>
<a href="limpar.php"><input type="submit" value="Limpar Historico"></a>

