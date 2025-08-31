<?php 
$nome = $_POST['nome'];
$salario = $_POST['salario'];
$vendas = $_POST['vendas'];

$juros = $vendas * 0.04;
$resu = $salario + $juros;
echo "Ola $nome,com os 4% da comissao sobre os $vendas reias,recebendo $salario fixo. Você ficou com $resu reais";




?>