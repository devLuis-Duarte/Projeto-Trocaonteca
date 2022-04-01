<?php
include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

$titulo = "Salvando alterações do Livro";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

// logica para alterar - receber os dados e alterar com base na chave primaria
$codigo  = $_GET["codigo"];   // codigo que foi digitado
$titulo = $_GET["titulo"];
$autor = $_GET["autor"]; // nome que foi digitado

// montando comando sql de update
$sql = "UPDATE livro SET titulo='$titulo' , autor='$autor' WHERE codigo=$codigo";
echo "<h1> $sql </h1>"; // exibindo so pra testar..enquanto esta desenvolvendo


$con = conectarBanco("trocaonteca");
$res = executarUpdate($con,  $sql); // funcao executa o update
desconectarBanco($con);

if ($res) {
    $msg = "Dados do autor $titulo alterados.";
} else {
    $msg = "Não houve alteração de dados do autor $titulo.";
}

$urlVoltar  = "editarLivro.php?cod=$codigo";
$urlVoltar2 = "PesquisarLivro.php";

?>

<br>

<!-- container com conteudo-->
<div class="container mt-5 mb-5">
    <div class="row text-center">
        <div class="col-12">
            <!-- criando uma caixa de mensagem para exibir -->
            <div class="bg-info text-white border border-5 p-5">
                <h1>
                    <?= $msg ?>
                </h1>
                <a href=<?= "$urlVoltar" ?>>
                    Clique aqui para voltar à edição do Livro
                </a>
                <hr>
                <a href=<?= "$urlVoltar2" ?>>
                    Clique aqui para voltar à Pagina principal
                </a>
            </div>
        </div>
    </div>
</div>


<?php
include "fragmentos/rodape.php"; // rodape ao final