<?php 
include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

$titulo = "Novo Livro";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu


// logica para inserir - obter dados do form e montar o comando insert
   // codigo que foi digitado

   print_r($_POST);
   print_r($_FILES);  

$codigo = $_POST["codigo"];
$codus = $_POST["codigous"];
$titulo = $_POST["titulo"]; 
$autor = $_POST["autor"]; 
$imagems = realizarUploadImagemServidor();
$sinopse = $_POST["sinopse"];
$genero = $_POST["genero"];

print_r($codigo);
print_r($titulo);
print_r($genero);
   


$sql = "INSERT INTO livro(codigo, titulo, autor, imagem, usuario_codigo, sinopse) 
                VALUES ($codigo, '$titulo', '$autor', '$imagems', $codus, '$sinopse')";
echo "<h1> $sql </h1>"; 

$con = conectarBanco("trocaonteca");
$res = executarInsert($con, $sql); // funcao executa o insert indicado

if(isset($_POST["genero"]) ){

    for($i=0; $i<sizeof($genero);$i++) {
        
      echo  $sql2="INSERT INTO livro_genero (livro_codigo, genero_codigo)
                      VALUES ($codigo, {$genero[$i]} ) ";
   executarInsert($con, $sql2);       
}


}






desconectarBanco($con);

if($res){
    $msg = "Dados do Livro $titulo registrados com sucesso!";
} else{
    $msg = "Houve um erro ao salvar os dados do Livro $titulo.";
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
