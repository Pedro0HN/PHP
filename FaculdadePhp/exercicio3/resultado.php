<?php 
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$media = ($nota1 + $nota2) / 2;
if($media>= 7 ){
    echo "O aluno $nome ficou com $media pontos e está aprovado.";
}else{
    echo "O aluno $nome ficou com $media pontos e está reprovado.";
}







?>