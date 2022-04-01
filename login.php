<?php

// montar a pagina com os fragmentos de pagina
$titulo = "login";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

if (isset($_GET["msg"])) {
  $msg = "Escreva direito seu frouxo";
} else {
  $msg = ""; // caso contrario, eh a primeira vez que acessa a pagina
}

// conteudo vem aqui
?>
<br><br>
<div class="container">


            <form action="VerificarLogin.php" method="POST">

            <div class="row col-8 mt-5">
       
      <div class="mb-3 col-8">
       <label for="email" class="email">E-mail:</label>
       <input type="email" class="form-control"  id="email" name="email" aria-describedby="insira o e-mail">
       
      </div>
     </div>

     <div class="row col-8">
       
      <div class="mb-3 col-8">
       <label for="senha" class="senha">Senha:</label>
       <input type="password" class="form-control" id="senha" name="senha" aria-describedby="senha">
       
      </div>
     </div>
                <div class="mb-4">
                <button type="submit" class="btn btn-primary">Entrar</button>
               
              </div>
         
              <div class="text-danger"><?= $msg ?></div>
            
        
            </form>

            <div> <a href="Cadastro_pessoa.php">Criar conta</a> </div> 

        </div>
    </div>

</div>

<?php

include "fragmentos/rodape.php"; 
