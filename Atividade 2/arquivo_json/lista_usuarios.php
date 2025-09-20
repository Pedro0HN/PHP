<?php 
$conteudo = file_get_contents("usuarios.json");
$usuarios = json_decode($conteudo,true);
foreach( $usuarios as $usuario){
    echo "id: " . $usuario['id'] . "<br>";
    echo "Nome: " . $usuario['nome'] . "<br>";
    echo "Email: " . $usuario['email'] . "<br>";
    echo "---------------------------------------" . "<br>";

}



?>
<br>
<a href="form.html"> Cadastrar mais usuarios</a>