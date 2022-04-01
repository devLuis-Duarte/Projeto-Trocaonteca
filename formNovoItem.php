<?php
include "_funcoesConfigBanco.php";
$titulo = "TROCAONTECA";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

$con = conectarBanco("trocaonteca");

/*
$dadosMax = executarSelect($con, "SELECT max(codigo) as maximo FROM livro");
print_r($dadosMax);
$maxId = $dadosMax[0]["maximo"];
$proximoId = $maxId + 1; 
*/


$sql="SELECT * FROM genero";
$livros  = executarSelect($con, "SELECT codigo, titulo, autor, sinopse ,u.codigo FROM livro, u.usuario ORDER BY titulo");
$genero= executarSelect($con, $sql);
print_r($genero);
print_r($livros);
desconectarBanco($con);


?>
<br><br>
<div class="container mb-5 ">

    <div class="row py-10">
         

    </div>          
  <br><br> 
     <div class="row col-8">
      <form action="SalvarLivro.php"  method="POST" enctype="multipart/form-data">
       
      <div class="row col-8 mt-5">
      
      <div class="mb-3 col-8">
        
        <label for="codigous" class="form-label">Código do Usuario</label>
                     <input type="number" class="form-control" name="codigous" id="codigous" >
        </div>
       </div>

      <div class="mb-3 col-8">
        
        <label for="codigo" class="form-label">Código do Livro</label>
                     <input type="number" class="form-control" name="codigo" id="codigo" >
        </div>
       </div>

      <div class="mb-3 col-8">
    <label for="titulo" class="Titulo">Título:</label>
    <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="coloque o titulo" required>
    <div id="titulo" class="form-text">Insira o titulo</div>
  </div>
  

  <div class="mb-3 col-8">
    <label for="autor" class="autor">Autor:</label>
    <input type="text" class="form-control" name="autor" id="autor" required>
  </div>

  <?php 
 
 for($i=0; $i<sizeof($genero);$i++)
 {
 $r=$genero[$i];  
?>
  <div class="form-check form-check-inline">
  <input type="checkbox" id="genero" name="genero[]" value=<?= $r["codigo"] ?>  >
<label for=<?=$r["codigo"]?>> <?=$r["descricao"] ?></label><br>
</div>

<?php
 }
?>

<br><br>

          <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem do Livro</label>
                    <input type="file" class="form-control" name="imagem" id="imagem" accept="image/png, image/jpeg" required>                    
                </div>

<form class="was-validated">
  <div class="mb-3 ">
    <label for="validationTextarea">Sinopse</label>
    <textarea class="form-control " name="sinopse" id="sinopse" placeholder="Digite a sinopse" ></textarea>
    
  </div>
  
  <button type="submit" class="btn btn-primary col-2 " >Enviar</button>
      
</form>
    
      

</div>

<?php

include "fragmentos/rodape.php";