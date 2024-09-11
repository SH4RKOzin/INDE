<?php
require_once 'script.php';
echo $header;
?>
<link rel="stylesheet" href="./assets/css/paginas.css">
<link rel="stylesheet" href="./assets/css/contacto.css">

   <div class="container">
<br>
    <section id="contact" class="contact">
      <div class="container" data-aos="">

        <div class="section-header">
          <h2>Fale connosco</h2>
          <br><br>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Endereço:</h4>
                  <p>Avenida 24 Julho, Nº 167. P.O BOX 34, Maputo, Moçambique</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>ined@ined.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telefone:</h4>
                  <p>+258 00000000</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Horário:</h4>
                  <p>Seg. - Sex.: 07:30 - 15:30</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

                     <div class="col-lg-8">
            <form action="contacto.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Processando</div>
                <div class="error-message"></div>
                <div class="sent-message">A sua mensagem foi enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->


   </div>
<br>

</body>
</html>

<?php
require_once 'script.php';
echo $footer;
?>
    