<?php include 'includes/header.html'; ?>
<body>
  <?php include 'includes/nav.html'; ?>
  <section class="container-fluid banner-5">
     <div class="row">
       <div class="col-md-12 text-center">
         <h1 class="titulo">Contato</h1>
         <h2 class="subtitulo">Estamos no Rio de Janeiro. Utilize os meios abaixo para contato  </h2>
       </div>
     </div>
 </section>
 <section class="container-fluid descricao text-center">

            <div class="row text-center" >
               <div class="col-md-4 col-sm-4 text-center roundfigure">
                 <a href="tel:+55 21 96576-4235">
                  <figure class="text-center">
                     <img src="img/telefone.svg" alt="Telefone de contato" >
                     <figcaption>
                        <h3>3549-4394 / (21) 3549-4394</h3>
                     </figcaption>
                  </figure>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 text-center roundfigure">
                 <a href="mailto:cimsaneamento@cimsaneamento.com.br">
                  <figure class="text-center">
                     <img src="img/email.svg" alt="E-mail"  >
                     <figcaption>
                        <h3>cimsaneamento@cimsaneamento.com.br</h3>
                     </figcaption>
                  </figure>
                </a>
               </div>
               <div class="col-md-4 col-sm-4 text-center roundfigure">
                  <figure class="text-center">
                     <img src="img/relogio.svg" alt="Horário" >
                     <figcaption>
                        <h3>08h - 18h</h3>
                     </figcaption>
                  </figure>
               </div>
            </div>
            </section>
            <div class="row text-center">
              <div class="triangulo ">

              </div>
            </div>
            <section class="container-fluid">
              <div class="row">

                    <form id="formcontato" class="col-md-6">

                       <label> Nome:</label>
                       <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
                       <p class="palerta" id="valida_nome"></p>

                       <label>Email: </label>
                       <input type="text" id="email" name="email" class="form-control" placeholder="exemplo@exemplo.com" aria-describedby="basic-addon1">
                       <p class="palerta" id="valida_email"></p>

                       <label>Telefone:</label>
                       <input type="text" id="telefone" name="telefone" placeholder="00 0000-0000" class="form-control" aria-describedby="basic-addon1">
                       <p class="palerta" id="valida_telefone"></p>

                       <label>Mensagem:</label>
                       <textarea rows="6" class="form-control" placeholder="Deixe sua mensagem" name="mensagem" id="mensagem"></textarea>
                       <p class="palerta" id="valida_mensagem"></p>

                       <div class="text-center">
                         <button type="submit" class="button" id="enviar">Enviar <span class="glyphicon glyphicon-send"></span></button>
                       </div>

                    <div class="notificacao text-center" id="notificacao">
                       <h2 id="titnotif">
                       </h2>
                       <p id="txtnotif"></p>
                    </div>
                 </form>

                 <adress class="col-md-6 text-center" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.022564071832!2d-43.39583268503625!3d-22.80162778506537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9964111249e0eb%3A0xc2d0e4e6c323f75!2sAv.+Ana+Brito+da+Silva%2C+1772+-+S%C3%A3o+Mateus%2C+S%C3%A3o+Jo%C3%A3o+de+Meriti+-+RJ!5e0!3m2!1sen!2sbr!4v1494890961824"  allowfullscreen></iframe>
                 </adress>
              </div>
            </section>


 <?php include 'includes/footer.html'; ?>
</body>
</html>
