<?php 
include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

$titulo = "Novo Usuario";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu


// logica para inserir - obter dados do form e montar o comando insert
   // codigo que foi digitado

   $codigo = $_GET["codigo"];
$nome = $_GET["nome"]; 
$email = $_GET["email"]; 
$senha = $_GET["senha"]; 
$cidade = $_GET["cidade"]; 


// nome que foi digitado
  // ...

// montando comando sql de insercao
$sql = "INSERT INTO usuario (codigo, nome, email, senha, cidade) 
                VALUES ($codigo,'$nome', '$email', '$senha', '$cidade')";
echo "<h1> $sql </h1>"; // exibindo so pra testar..

$con = conectarBanco("trocaonteca");
$res = executarInsert($con, $sql); // funcao executa o insert indicado
desconectarBanco($con);

if($res){
    $msg = "Dados do Usuario $nome registrados com sucesso!";
} else{
    $msg = "Houve um erro ao salvar os dados do Usuario $nome.";
}

?>

<!-- container com conteudo-->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="bg-info text-white text-center fs-1 py-2 mb-5">
                <?=$msg ?>
            </div>
        </div>
    </div>
</div>


<?php
include "fragmentos/rodape.php"; // rodape ao final
