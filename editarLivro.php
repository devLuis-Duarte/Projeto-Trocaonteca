<?php 

// sempre que for usar o BD, incluir este arquivo
include "_funcoesConfigBanco.php"; // vamos nos comunicar com o BD nesta pagina

// montar a pagina com os fragmentos de pagina
$titulo = "Alterar dados do Livro";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu


$con = conectarBanco("trocaonteca"); // conectar no BD chamado "cd"
$cod = $_GET["cod"];        // obtendo codigo da URL

$sql = "SELECT * FROM livro WHERE codigo=$cod";  // montagem do comando select
$livro = executarSelect($con, $sql);             // executa comando select
desconectarBanco($con); // desconectar do BD
print_r($livro);

/*if(count($autor)==0){
    echo "Dados não encontrados";
}*/


?>

<br>

<!-- container com conteudo-->
<div class="container mt-5 mb-5">
    <div class="row text-center">        

        <div class="col-3"></div>
        
        <div class="col-6">
            <div class="bg-dark text-white text-center fs-1 py-2 mb-5">
                Alteração de Dados do Livro
            </div>
            
            <!-- dados preenchidos pelo usuario precisam ser salvos com update no bd-->
            <form action="SalvarEditarLivro.php" method="GET">
                <!-- dica: cada par label e campo dentro de uma div -->
                <div class="mb-3"> <!-- lembram o que significa mb-3? -->
                    <label for="codigo" class="form-label">Código:</label>
                    <input type="number" class="form-control" name="codigo" 
                           id="codigo" value="<?= $cod ?>" required readonly>
                </div>

                <!-- outro campo, div, label e input -->
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo:</label>
                    <input type="text" class="form-control" name="titulo" 
                           id="titulo" value="<?= $livro[0]["titulo"] ?>" required>                    
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label">Autor:</label>
                    <input type="text" class="form-control" name="autor" 
                           id="autor" value="<?= $livro[0]["autor"] ?>" required>                    
                </div>



                <button type="submit" class="btn btn-primary">Salvar Alterações</button>

            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>


<?php
include "fragmentos/rodape.php"; // rodape ao final

