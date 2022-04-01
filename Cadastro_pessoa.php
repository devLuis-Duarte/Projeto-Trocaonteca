<?php
include "_funcoesConfigBanco.php";
$titulo = "TROCAONTECA";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

$con = conectarBanco("trocaonteca");

/*
$dadosMax = executarSelect($con, "SELECT max(codigo) as maximo FROM usuario");
print_r($dadosMax);
$maxId = $dadosMax[0]["maximo"];
$proximoId = $maxId + 1; 
*/

// obtendo todos os autores para carregar combobox (select)
$gravadoras  = executarSelect($con, "SELECT codigo, nome, email, senha, cidade FROM usuario ORDER BY nome");
//print_r($gravadoras);
desconectarBanco($con);


?>

<div class="container mb-5">

    
   
    <form action="SalvarUsuario.php" method="GET">


    <div class="row col-8 mt-5">
       
       <div class="mb-3 col-8">
        
       <label for="codigo" class="form-label">Código do usuario</label>
                    <input type="number" class="form-control" name="codigo" id="codigo" >
       </div>
      </div>




    <div class="row col-8 mt-5">
       
      <div class="mb-3 col-8">
       <label for="nome" class="nome">Nome:</label>
       <input type="text" class="form-control" name="nome" id="nome" aria-describedby="insira o nome" required>
       
      </div>
     </div>

     <div class="row col-8">
       
      <div class="mb-3 col-8">
       <label for="email" class="email">E-mail:</label>
       <input type="text" class="form-control" name="email" id="email" aria-describedby="e-mail" required>
       
      </div>
     </div>

     <div class="row col-8">
       
      <div class="mb-3 col-8">
       <label for="senha" class="senha">Senha:</label>
       <input type="password" class="form-control" name="senha" id="senha" aria-describedby="senha" required>
       
      </div>
     </div>
 
     <div class="row col-8">
       
      <div class="mb-3 col-8">
       <label for="cidade" class="cidade">Cidade</label>
       <input type="text" class="form-control" name="cidade" id="cidade" aria-describedby="cidade" required>
       
      </div>
     </div>
    <div class="col-1">
    <select class="form-select" aria-label="Default select example" >
     <option selected>Estado</option>
     <option value="AC">AC</option>
     <option value="AL">AL</option>
     <option value="AP">AP</option>
     <option value="AM">AM</option>
     <option value="BA">BA</option>
     <option value="CE">CE</option>
     <option value="ES">ES</option>
     <option value="GO">GO</option>
     <option value="MA">MA</option>
     <option value="MT">MT</option>
     <option value="MS">MS</option>
     <option value="MG">MG</option>
     <option value="PA">PA</option>
     <option value="PB">PB</option>
     <option value="PR">PR</option>
     <option value="PE">PE</option>
     <option value="PI">PI</option>
     <option value="RR">RR</option>
     <option value="RO">RO</option>
     <option value="RJ">RJ</option>
     <option value="RN">RN</option>
     <option value="RS">RS</option>
     <option value="SC">SC</option>
     <option value="SP">SP</option>
     <option value="SE">SE</option>
     <option value="TO">TO</option>

    </select>
    
    <div class="mt-5">
                <button type="submit" class="btn btn-primary">Entrar</button>
               
    </div>
  
   </form>
</div>

<?php

include "fragmentos/rodape.php";