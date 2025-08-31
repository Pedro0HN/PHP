<?php 
$nome = $_POST['nome'];
$valor = $_POST['valor'];
if($valor <= 39999.99){
    $resu1 = $valor * 1.05;
    echo " <h2> ola $nome. O valor do carro com a % ,ficou de $resu1 reais </h2>";
}elseif($valor <= 69999.99){
    $resu2 = $valor * 1.10 * 1.15;
    echo " <h2> Ola $nome. O valor do carro com a % ,ficou de $resu2 reais </h2>";
}else{
    $resu3 = $valor * 1.20 * 1.15;
    echo " <h2> Ola $nome. O valor do carro com a % ,ficou de $resu3 reais </h2>";
}

?>