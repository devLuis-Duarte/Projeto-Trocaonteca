<?php

// montar a pagina com os fragmentos de pagina
include "_funcoesConfigBanco.php";
$titulo = "Seu Perfil no Sistema XXXXX";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu
$con = conectarBanco("trocaonteca");

$cod = $_GET["codl"]; 
$ti = $_GET["titu"]; 
$au  = $_GET["aut"]; 
$us  = $_GET["coduse"]; 
$im  = $_GET["img"]; 
$si = $_GET["sin"]; 
//$no = $_GET["nom"]; 

$autores = "SELECT u.codigo, u.nome, u.email, u.cidade, l.usuario_codigo, FROM usuario u , livro l,   WHERE l.usuario_codigo = u.codigo ORDER BY nome";
//$usea ="SELECT nome, codigo FROM usuario";
$livros  = executarSelect($con,$autores);



print_r($livros);
print_r($autores);
desconectarBanco($con);



// conteudo vem aqui
?>

<div class="container">




<div class="row py-12 mt-2 mb-5">





<div class="col-3 py-6  text-dark ">



<div class="card " >
       <img src="<?= $im ?>" style = "  width: 300px;  height: 450px;" class="card-img-top tamanho  img-thumbnail" alt="Foto do Perfil">
          <div class=card-body>
          <h5 class=card-title> Dados do livro cadastrado</h5>
            <p class=card-text>Título: <?= $ti ?> </p> 
           
            <p class=card-text> Autor: <?= $au ?>  </p>
              
               <p class=card-text> Gênero: Romance</p>
               <p class=card-text> Nome: Jóse da Silva    <?= $us ?>   </p>
               <p class=card-text> Cidade:São Paulo</p>
               <p class=card-text> email: jossesilv@gmail.com</p>
               <p class=card-text> Estado: SP </p>
               <p class=card-text> Codigo: <?= $cod ?> </p>
            </div>
       </div>
  
 

      </div>

 
   
   <div class="col-3 py-6  text-dark ">
   <div class="card " >
   <div class="mb-3 ">
    <label for="validationTextarea">Sinopse</label>
    <textarea class="form-control " id="validationTextarea" placeholder="" required>  <?= $si ?> </textarea>
  </div>
</div>




</div>
 

</div>



</div>






   <?php





include "fragmentos/rodape.php"; 