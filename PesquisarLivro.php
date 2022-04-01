<?php

// montar a pagina com os fragmentos de pagina
include "_funcoesConfigBanco.php";
$titulo = "TROCAONTECA";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu


$passado=["aut"];



if( isset($_GET["autor"])  ){ 
    
    $autor_dig = $_GET["autor"];
    
    $sql = "SELECT * FROM livro WHERE autor LIKE '%$autor_dig%' ORDER BY autor   "; 

} else {
    $autor_dig=""; 
    $sql = "SELECT * FROM livro ORDER BY autor"; 
}



if( isset($_GET["genero"])  ){ 

    $genero_dig = $_GET["genero"];
    
    $sql = "SELECT * FROM livro WHERE genero LIKE '%$genero_dig%' ORDER BY autor "; 



} 

else {
    
   
    $sql = "select l.* g.descricao as genero from livro_genero lc inner join livro l on(lc.livro_codigo = l.codigo) inner join genero g on (g.codigo = lc.genero_codigo)";
}

if(isset ($_GET["genero"]) && isset($_GET["autor"]) ){
    $autor_dig = $_GET["autor"];    
    $codigo_genero=$_GET["genero"];

    if(intval($codigo_genero)==0){

        $sql = 'select l.*, g.descricao as genero from livro_genero lc inner join livro l on(lc.livro_codigo = l.codigo)
        inner join genero g on (g.codigo = lc.genero_codigo) WHERE l.autor LIKE "%'.$autor_dig.'%"';
        
    }else{

    $sql = 'select l.*, g.descricao as genero from livro_genero lc inner join livro l on(lc.livro_codigo = l.codigo)
    inner join genero g on (g.codigo = lc.genero_codigo) WHERE l.autor LIKE "%'.$autor_dig.'%" AND lc.genero_codigo='.$codigo_genero;
    }

}
//echo $sql;

$con = conectarBanco("trocaonteca"); 

// echo $sql;

 
$autores = executarSelect($con, $sql,  );
//print_r($titulos);
//print_r($autores);

$comando = "select * from genero";
$genero = executarSelect($con,$comando);
//var_dump($genero);


desconectarBanco($con); 


?>



<div class="container mb-5 ">

<div class="row mb-5">
        <div class="col-3"></div>
        <div class="col-6">
            <form class="row" action="PesquisarLivro.php" method="GET">
                      
                <div class="col-8">
                    <input type="text" class="form-control" name="autor" id="autor" value="<?=$autor_dig?>" placeholder="Digite o autor" >
                </div>
      
                
        <select  name="genero" class="form-select" aria-label="Default select example">
     <!--<option selected>Gênero</option>
     <option value="terror">Terror</option>
     <option value="aventura">Aventura</option>
     <option value="misterio">Mistério</option>
     <option value="religioso">Religioso</option>
     <option value="suspense">Suspense</option>
     <option value="romance">Romance</option>
     <option value="hq">HQ</option>

     <option value="ficcao">Ficção</option>
     <option value="fantasia">Fantasia</option>
     <option value="nao_ficcao">Não ficção</option>
     <option value="policial">Policial</option>
     <option value="biografia">Biografia</option>-->
     <option selected value="0">Gênero</option>
     <?php
     
     for($i=0;$i<sizeof($genero);$i++){
         $idgenero = $genero[$i]["codigo"];
         echo '<option value="'.$idgenero.'">'.$genero[$i]["descricao"].'</option>';
     }
     
     ?>

     </select>
        

                <div class="col-4">
                    <button type="submit" class="btn btn-warning">Pesquisar</button>
                </div>
            </form>
        </div>
    </div>
    





    <div class="row">

<?php
foreach ($autores as $r) { 
?>

<div class="col mb-5">            
    
    <div class="card "  style="width: 350px;  " >
        <img src="upload/<?= $r["imagem"]?>" style="width: 3300px;  height: 480px;"  class="card-img-top tamanho  img-thumbnail" alt="imagem do Livro">
        <div class="card-body">
            <h5 class="card-title"> <?= $r["titulo"] ?>  </h5> 
            <p class="card-text">
                                  
               Autor:     <?= $r["autor"] ?> 
               
               
               <br>
               (<?= $r["codigo"] ?>)
               <br>
               <a href='editarLivro.php?cod=<?= $r["codigo"]  ?>'>
               <img src='imagens/engre.png' width=30>
               <a href='excluirLivro.php?cod=<?= $r["codigo"]  ?>'>
               <img src='imagens/lixeira.png' width=30>
               <br> <br>
               
               <?php
               if( !isset($_SESSION["logado"]) ){ ?>
               <a>Teste</a>
               <?php
               }
                          
            
               else { ?>
                <a  href="SaibaMais.php?codl=<?= $r["codigo"]  ?> &amp; titu=<?= $r["titulo"]  ?>  &amp; aut=<?= $r["autor"]  ?> &amp; img=upload/<?= $r["imagem"]?> &amp; sin=<?= $r["sinopse"]  ?>  &amp; coduse=<?= $r["usuario_codigo"] ?>"  class="btn btn-primary">Saiba mais</a>  
               <?php
               }
              ?>
            
            

        </p>
            
        </div>
    </div>

</div>


<?php
}
?>

</div>



</div>



<?php

include "fragmentos/rodape.php"; // rodape ao final
