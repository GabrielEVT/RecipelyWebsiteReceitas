<?php

    
require_once '../Database/conexao.php';
$conexao = new Conexao();
$pdo = $conexao->connectDatabase();

echo "ASSOC\n";
echo "<pre>";
print_r($conexao->connectDatabase()->query("SELECT * FROM `tb_usuario`")->fetchAll(PDO::FETCH_ASSOC));
echo "\n";


?>