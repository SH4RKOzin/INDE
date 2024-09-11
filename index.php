<?php
require_once 'script.php';
echo $header;
?>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/img/imagem1.png" class="d-block w-100" alt="Description of slide 1">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/imagem2.png" class="d-block w-100" alt="Description of slide 2">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/imagem3.png" class="d-block w-100" alt="Description of slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Sobre o INDE</h1>
                <p>O Instituto Nacional do Desenvolvimento da Educação, neste estatuto também designado abreviadamente por INDE, é uma instituição destinada à planificação curricular e à investigação pedagógica, a qual compete no âmbito da política educativa expressa na Lei e Linhas Gerais do Sistema Nacional de Educação.</p>
            </div>
            <div class="col-md-6">
                <img src="./assets/img/inde2.png" alt="Instituto Nacional do Desenvolvimento da Educação" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Notícias</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./assets/img/imagem1.png" class="card-img-top" alt="Sessao colaborativa">
                    <div class="card-body">
                        <h5 class="card-title">5 Sessão Colaborativa</h5>
                        <p class="card-text">Algum texto de exemplo rápido para construir o título do card e formar a maior parte do conteúdo do card.</p>
                        <p style="font-size:11px"><i class="bi bi-stopwatch"></i>06/08/2024</p>
                        <a href="#" class="btn btn-success">Ir para...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./assets/img/imagem2.png" class="card-img-top" alt="PR nas escolas">
                    <div class="card-body">
                        <h5 class="card-title">PR nas Escolas</h5>
                        <p class="card-text">Algum texto de exemplo rápido para construir o título do card e formar a maior parte do conteúdo do card.</p>
                        <p style="font-size:11px"><i class="bi bi-stopwatch"></i>06/08/2024</p>
                        <a href="#" class="btn btn-success">Ir para...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./assets/img/imagem3.png" class="card-img-top" alt="Moz na diáspora">
                    <div class="card-body">
                        <h5 class="card-title">Moz na Diáspora</h5>
                        <p class="card-text">Algum texto de exemplo rápido para construir o título do card e formar a maior parte do conteúdo do card.</p>
                        <p style="font-size:11px"><i class="bi bi-stopwatch"></i>06/08/2024</p>
                        <a href="#" class="btn btn-success">Ir para...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="noticias.php" class="btn btn-success">Ver mais...</a>
        </div>
    </div>


    <div class="servicos">
        <br>
        <div class="container">
            <section class="services-container">
                <h2 class="text-center mb-4">Nossos Serviços</h2>
                <div class="services-section">
                    <article class="card1">
                        <div class="icon1">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h3>Design e Planning</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste fuga eaque animi expedita, quisquam corrupti et sed aliquam natus optio culpa officia qui neque porro consectetur sit tempore, sunt voluptatibus!</p>
                    
                    </article>
                    <article class="card1">
                        <div class="icon1">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h3>Services</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste fuga eaque animi expedita, quisquam corrupti et sed aliquam natus optio culpa officia qui neque porro consectetur sit tempore, sunt voluptatibus!</p>
                    
                    </article>
                    <article class="card1">
                        <div class="icon1">
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <h3>Help</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste fuga eaque animi expedita, quisquam corrupti et sed aliquam natus optio culpa officia qui neque porro consectetur sit tempore, sunt voluptatibus!</p>
                    </article>
                </div>
            </section>
        </div>
    </div>
</body>
</html>

<?php
echo $footer;
?>