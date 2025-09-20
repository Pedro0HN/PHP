<?php 
$arquivo = fopen("salvar.txt","r");
$conteudo = file_get_contents("salvar.txt");

echo nl2br($conteudo);
fclose($arquivo);



?>
<br>
<a href="form.html">Colocar mais frases</a>