<?php

// montar a pagina com os fragmentos de pagina
$titulo = "TROCAONTECA";
include "fragmentos/cabecalho.php"; // incluir o cabecalho
include "fragmentos/menu_nav.php"; // incluir o menu

// conteudo vem aqui
?>

<div class="container mb-5 ">

    <div class="row py-5">
        <div class="col-12 text-center py-5 bg-primary text-white ">
            <h1> Sistema TROCAONTECA </h1>
            <div class="w-100"></div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/livro1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="bg-info">Troque seus livros</h5>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/livro2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class=" bg-secondary">Grande acervo de livros</h5>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/livro3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="bg-light text-dark">Livros de todos os gêneros</h5>
                            
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </div>

</div>

<?php

include "fragmentos/rodape.php"; // rodape ao final
