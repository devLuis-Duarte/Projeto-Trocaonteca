
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
    <div class="container-fluid">
    
    
    
    
    
    <a  href="PesquisarLivro.php" class="navbar-brand"> Inicio </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
      
         <li class="nav-item ">
         <div >  <img src='imagens/lupa.png' width=25> </div>
         </li>
        
         <li class="nav-item px-2">
      
     <input type="text" class="form-control" >
      </li>


        <li class="nav-item ">
        <select class="form-select" aria-label="Default select example">
     <option selected>Gênero</option>
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
     <option value="biografia">Biografia</option>

     </select>
        </li>
        
        <?php
               if( !isset($_SESSION["logado"]) ){ ?>
              
               <?php
               }
                          
            
               else { ?>
               <a class="navbar-brand" href="FormNovoitem.php"> Novo livro </a>
               <?php
               }
              ?>      
       

      
      </ul>

                  
         <form class="d-flex">
        <?php 
          if( !isset($_SESSION["logado"]) ){ // se nao esta logado, exibe botao entrar
             echo "<a class='btn btn-outline-success bg-light text-dark' href='login.php'>Entrar</a>";
          }   
          else{
            echo "<a class='btn btn-outline-success bg-warning text-dark' href='Logout.php'>Sair</a>";
           }
        ?>
      

      <?php
               if( !isset($_SESSION["logado"]) ){ ?>
              
               <?php
               }
                          
            
               else { ?>
               <a class="navbar-brand" href="perfil.php"> Perfil </a>
               <?php
               }
              ?>





    
    </form>
        

      
      </div>
    </div>
  </nav>
