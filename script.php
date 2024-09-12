<?php
$header = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDE - Instituto Nacional do Desenvolvimento da Educação</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/service.css">
    <link href="./assets/img/inde2.png" rel="icon">
</head>
<body>

<div class="verde1">
  <div class="container">
    <div class="webmail">
      <p class="cell">
        <i class="bi bi-phone"></i> +258 840000000
      </p>
      <p class="web">
        <a href="#" class="web">
          <i class="bi bi-envelope-at-fill"></i> Webmail
        </a>
      </p>
    </div>
  </div>
</div>



<div class="verde">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/img/indeNOVO.png" alt="Logo" class="img-fluid">
            </a>
            
        <div class="container-fluid">
            
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><b>Inicio</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Sobre a Instituição</b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="atribuicoes.php">Atribuições</a></li>
                        <li><a class="dropdown-item" href="competencias.php">Competencias</a></li>
                        <li><a class="dropdown-item" href="estrutura-organica.php">Estrutura Orgânica</a></li>
                        <li><a class="dropdown-item" href="./assets/pdf/mz-government-gazette-series-i-dated-1987-10-28-no-43 (1).pdf">Estatuto</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Documentos</b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="normas-regulamentos.php"><b>Normas e Regulamentos</b></a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="noticias.php"><b>Notícias</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php"><b>Contacto</b></a>
                </li>
            </ul>
        </div>
    </nav>
  </div>
 </div> 
';




$footer = '
<footer id="footer" class="footer">
<div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.php" class="logo d-flex align-items-center">
          <span>INDE</span>
        </a>
        <p>O Instituto Nacional do Desenvolvimento da Educação, neste estatuto também designado abreviadamente por INDE, é uma instituição destinada à planificação curricular e à investigação pedagógica, a qual compete no âmbito da política educativa expressa na Lei e Linhas Gerais do Sistema Nacional de Educação.</p>
        <div class="social-links d-flex mt-4">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
  
      <div class="col-lg-2 col-6 footer-links">
        <h4>Links Úteis</h4>
        <ul>
            <li><a href="https://www.mined.gov.mz/index.php" target="blank">Ministério da Educação e Desenvolvimento Humano</a></li>
          <li><a href="http://www.portaldogoverno.gov.mz/" target="blank">Portal do Governo</a></li>
          <li><a href="http://www.parlamento.mz/" target="blank">Assembleia da República</a></li>
          <li><a href="http://www.presidencia.gov.mz/" target="blank">Presidência da República</a></li>
         
        </ul>
      </div>
  
      <div class="col-lg-2 col-6 footer-links">
        <h4>O INDE</h4>
        <ul>
          <li><a href="atribuicoes.php">Atribuições</a></li>
          <li><a href="competencias.php">Competencias</a></li>
          <li><a href="./assets/pdf/mz-government-gazette-series-i-dated-1987-10-28-no-43 (1).pdf">Estatuto</a></li>
          <li><a href="estrutura-organica.php">Estrutura Organica</a></li>
        </ul>
      </div>
  
      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contactos</h4>
        <p>
          Avenida 24 Julho, Nº 167. P.O BOX 34<br>
          Maputo<br>
          Moçambique <br><br>
          <strong>Telefone:</strong><br>
          <strong>Email:</strong> <br>
        </p>
  
      </div>
  
    </div>
  </div>
  
  <div class="container mt-4">
    <div class="copyright">
      
      &copy; 2024 <strong><span>Instituto Nacional do Desenvolvimento da Educação</span></strong>
    </div>
  </div>
  
</footer>
';
?>

