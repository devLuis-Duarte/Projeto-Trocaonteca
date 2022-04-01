
<link rel="stylesheet" href="bibliotecas\bootstrap-5.0.1-dist\css\tamanho.css">
<?php

// montar a pagina com os fragmentos de pagina
//include "_funcoesConfigBanco.php";
$titulo = "TROCAONTECA";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

//$con = conectarBanco("TROCA"); // conectar no BD chamado "cd"
//$livros = executarSelect($con, "SELECT * FROM livro");
//desconectarBanco($con); // desconectar do BD

//print_r($livros);

// conteudo vem aqui
?>
<br><br>

<div class="container mb-5">

<div class="row py-12">

     <div class="col-12 text-center bg-primary text-white py-5 mt-5"> 
    
     <h1> Listagem de livros </h1>
     </div> 

 <br>
 


 <div class="row py-12 mt-5">
        <div class="col-3 py-6  text-dark ">
            <div class="card ">
            <img src="imagens/s1.jpg" style = "  width: 300px;  height: 450px;" class="card-img-top tamanho  img-thumbnail" alt="Foto do Perfil">
               <div class=card-body>
                    <h5 class=card-title> Dados do livro cadastrado</h5>
                    <p class=card-text>Título: O signo dos quatro</p>
                    <p class=card-text> Autor:  Arthur Conan Doyle</p>
                    <p class=card-text> Gênero: Policial</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>               
                  </div>
            </div>
        </div>
 
        <div class="col-3 py-6  text-dark ">
            <div class="card " >
            <img src="imagens/s2.png" style = "  width: 300px;  height: 450px;" class="card-img-top tamanho  img-thumbnail" alt="Foto do Perfil">
               <div class=card-body>
                    <h5 class=card-title> Dados do livro cadastrado</h5>
                    <p class=card-text>Título: A culpa é das estrelas</p>
                    <p class=card-text> Autor: John Green</p>
                    <p class=card-text> Gênero: Romance</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>  
                  </div>
            </div>
        </div>

        <div class="col-3 py-6  text-dark ">
            <div class="card"  >
            <img src="imagens/s3.jpg"  style = "  width: 300px;  height: 450px;" class="card-img-top tamanho  img-thumbnail"  alt="Foto do Perfil">
               <div class=card-body>
                    <h5 class=card-title> Dados do livro cadastrado</h5>
                    <p class=card-text>Título: O pequeno Principe</p>
                    <p class=card-text> Autor: Antoine de Saint-Exupéry</p>
                    <p class=card-text> Gênero: Ficção</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                  </div>
            </div>
        </div>

        <div class="col-3 py-6  text-dark ">
            <div class="card " >
            <img src="imagens/s4.jpg" style = "  width: 300px;  height: 450px;" class="card-img-top tamanho  img-thumbnail"  alt="Foto do Perfil">
               <div class="card-body">
                    <h5 class=card-title> Dados do livro cadastrado</h5>
                    <p class=card-text>Título: O CATADOR DE PAPEL</p>
                    <p class=card-text> Autor: Fernando Carraro</p>
                    <p class=card-text> Gênero: Ficção</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>              
                  </div>
            </div>
        </div>

 <?php
 /*
  echo "<div class=card text-center w-50>";
               
               echo"<img src=imagens/índice.png class=card-img-top img-thumbnail alt=Foto do Perfil>";
               echo "<div class=card-body>";
                    echo"<h5 class=card-title> Dados do livro cadastrado</h5>";
                    echo"<p class=card-text>Título: Alice no País das Maravilhas</p>";
                    echo"<p class=card-text> Autor: Lewis Carrol</p>";
                    echo"<p class=card-text> Gênero: Fantasia</p>";
                echo"</div>";

 
                echo"</div>";
 */
                ?>
</div> 
</div>
</div>
 <?php

 include "fragmentos/rodape.php"; // rodape ao final
