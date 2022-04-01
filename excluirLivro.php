<?php

// sempre que for usar o BD, incluir este arquivo
include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

$titulo = "Exclusão de Livro";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

$codigo = $_GET["cod"];


$con = conectarBanco("trocaonteca"); 
$sql = "DELETE FROM livro WHERE codigo = $codigo ";

echo $sql;
$res = executarDelete($con, $sql);
desconectarBanco($con); // desconectar do BD

//print_r($musicas); // print_r eh uma funcao pra ajudar o desenvolvedor

if($res){
    $msg = "Dados do Livro foram excluídos!";
} else{
    $msg = "Infelizmente, este Livro não pode ser excluída pois já faz parte de um ..";
}

?>

<!-- container com conteudo-->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="bg-dark text-white text-center fs-1 py-2 mb-5">
                <?=$msg ?>
            </div>
        </div>
    </div>
</div>





<?php
include "fragmentos/rodape.php"; // rodape ao final
