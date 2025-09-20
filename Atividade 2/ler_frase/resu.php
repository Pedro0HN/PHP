<?php 
$texto = $_POST['texto'];
$arquivo = fopen("salvar.txt","a");

fwrite($arquivo,"Frase 1");
fwrite($arquivo,"Frase 2");
fwrite($arquivo,"Frase 3");

fwrite($arquivo,$texto);



fclose($arquivo);




?>
<a href="form.html">Adicionar mais uma frase <br></a>
<a href="mostrar.php">Ver frases</a>