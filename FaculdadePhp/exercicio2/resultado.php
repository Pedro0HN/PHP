<?php 
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$meses = $_POST['meses'];
$tipo = $_POST['tipo'];

if($tipo == 1){
    $juros = $valor * pow((1 + 0.03), $meses);
    echo "Ola $nome,O valor de $valor reais em $meses meses na poupança rendeu r$". number_format($juros, 2, ',', '.');

}elseif($tipo == 2){
    $juros1 = $valor * pow((1 + 0.04), $meses);
    echo "Ola $nome,O valor de $valor reais em $meses meses na poupança rendeu r$" . number_format($juros1, 2, ',', '.');
}




?>