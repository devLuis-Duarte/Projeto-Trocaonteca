<?php

// montar a pagina com os fragmentos de pagina
include "_funcoesConfigBanco.php";
$titulo = "Seu Perfil no Sistema XXXXX";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

$con = conectarBanco("trocaonteca"); 

// echo $sql;


$autores = executarSelect($con, "SELECT codigo, nome, email, senha, cidade FROM usuario ORDER BY nome");

desconectarBanco($con); 
//$codigo = $_GET["codigo"];


//$codigo = $_GET["cod"]; 
//<?= $codigo


?>



<div class="container ">

<div>  
  
  <?php 
                if(isset($_SESSION["logado"])){ 
                    printf("<p> Você está logado como: %s <p>", $_SESSION["email"]);
                 
                  }
            
            ?> 
           
          </div>


<div class=" col-4 mt-5 h3">

<?php
foreach ($autores as $r) { 
?>

<div class="row py-12">
      <ul class="list-group list-group-flush">
  <li class="list-group-item ">Nome: <?= $r["nome"]  ?>   </li>
  <li class="list-group-item">Cidade: <?= $r["cidade"]  ?></li>
  <li class="list-group-item">E-mail:  <?= $r["email"]  ?></li>
  <li class="list-group-item">Codigo:<?= $r["codigo"]  ?> </li>
  <li class="list-group-item">Senha:********</li>
  <li class="list-group-item">Estado: SP</li>

</ul>

<a href='editarUsuario.php?cod=<?= $r["codigo"]  ?>'>
<img src='imagens/engre.png' width=30>
</a>

</div>
 
 <?php
}
?>


</div>




<div class="row py-12 mt-5">
        <div class="col-3 py-6  text-dark">
            <div class="card " >
            <img src=imagens/alice.jpg   style = "  width: 300px;  height: 450px;" class=card-img-top img-thumbnail alt=Foto do Perfil>
               <div class="card-body">
                    <h5 class="card-title"> Dados do livro cadastrado</h5>
                    <p class="card-text">Título: Alice no País das Maravilhas</p>
                    <p class="card-text">Autor: Lewis Carrol</p>
                    <p class="card-text">Gênero: Fantasia</p>              
                   
                    <div class="row g-3 mb-3">
                    <div class= "col-6">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Opção</option>
                    <option value="1">Disponível</option>
                    <option value="2">Indisponível</option>
                    </select>
                    </div>
                  
                    <div class="col-2">
                   <img src='imagens/lixeira.png' width=30>      
                   </div> 
                  
                   <div class="col-2">
                   <img src='imagens/engre.png' width=30> 
                   </div>    
                  
                  </div>

                  </div>
                 
                </div>
        </div>
 
        <div class="col-3 py-6  text-dark">
            <div class="card " >
            <img src=imagens/marley.png  style = "  width: 300px;  height: 450px;" class=card-img-top img-thumbnail alt=Foto do Perfil>
               <div class="card-body">
                    <h5 class="card-title"> Dados do livro cadastrado</h5>
                    <p class="card-text">Título: Marley & Eu</p>
                    <p class="card-text">Autor: John Grogan</p>
                    <p class="card-text">Gênero: Biografia</p>              
                    
                   <div class=" row col-3"> 

                    <?php
                    
                    //echo "<p onclick=\"return confirm('Você tem certeza que deseja excluir o livro?')\" href='excluirLivro.php?cod=$codigo'>";
                     //   echo "<img src='imagens/lixeira.png' width=30>";

                        ?>
                      
                       </div>

                        <div class="row g-3 mb-3">
                    <div class= "col-6">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Opção</option>
                    <option value="1">Disponível</option>
                    <option value="2">Indisponível</option>
                    </select>
                    </div>
                  
                    <div class="col-2">
                   <img src='imagens/lixeira.png' width=30>      
                   </div> 
                  
                   <div class="col-2">
                   <img src='imagens/engre.png' width=30> 
                   </div>    
                  
                  </div>

                  </div>
                 
                </div>






</div>



<?php

include "fragmentos/rodape.php"; // rodape ao final
