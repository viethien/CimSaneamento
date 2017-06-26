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
                    <span class="glyphicon glyphicon-phone-alt"></span>
                     <figcaption>
                        <h3>3549-4394 / (21) 3549-4394</h3>
                     </figcaption>
                  </figure>
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 text-center roundfigure">
                 <a href="mailto:cimsaneamento@cimsaneamento.com.br">
                  <figure class="text-center">
                    <span class="glyphicon glyphicon-envelope"></span>
                     <figcaption>
                        <h3>cimsaneamento@cimsaneamento.com.br</h3>
                     </figcaption>
                  </figure>
                </a>
               </div>
               <div class="col-md-4 col-sm-4 text-center roundfigure">
                  <figure class="text-center">
                    <span class="glyphicon glyphicon-time"></span>
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
            <section class="container-fluid" id="mapa">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h1 class="titulo">Localização</h1>
                  <h2 class="subtitulo">Endereço de nossa sede e centro operacional</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h1><span class="glyphicon glyphicon-map-marker"></span>Sede</h1>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117672.36554001049!2d-43.30888564035296!3d-22.8298156411521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e8fc6ee82b7%3A0xaff3433036ec1970!2sCim+Saneamento!5e0!3m2!1spt-BR!2sbr!4v1498261086054"></iframe>
                </div>
                <div class="col-md-6">
                  <h1><span class="glyphicon glyphicon-map-marker"></span>Operacional</h1>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117672.36554001049!2d-43.30888564035296!3d-22.8298156411521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e8fc6ee82b7%3A0xaff3433036ec1970!2sCim+Saneamento!5e0!3m2!1spt-BR!2sbr!4v1498261086054"></iframe>
                </div>
              </div>
            </section>
            <section class="container-fluid">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h1 class="titulo">Formulário de Contato</h1>
                  <h2 class="subtitulo">Preencha o formulário abaixo para nos enviar uma mensagem.</h2>
                </div>
              </div>
              <div class="row">
                <form id="formcontato" class="col-md-8 col-md-offset-2">
                  <label> Nome:</label>
                  <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
                   <div class="validacao" id="valida_nome">

                   </div>

                  <label>Email: </label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="exemplo@exemplo.com" aria-describedby="basic-addon1">
                  <div class="validacao" id="valida_email">

                  </div>

                  <label>Telefone:</label>
                  <input type="text" id="telefone" name="telefone" placeholder="00 0000-0000" class="form-control" aria-describedby="basic-addon1">
                  <div class="validacao" id="valida_telefone">

                  </div>

                  <label>Mensagem:</label>
                  <textarea rows="6" class="form-control" placeholder="Deixe sua mensagem" name="mensagem" id="mensagem"></textarea>
                  <div class="validacao" id="valida_mensagem">

                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn-default">Enviar <span class="glyphicon glyphicon-send"></span></button>
                  </div>

                  <div class="notificacao text-center" id="notificacao">
                    <h2 id="titnotif">
                    </h2>
                    <p id="txtnotif"></p>
                  </div>
                </form>

              </div>
            </section>

 <?php include 'includes/footer.html'; ?>
 <script type="text/javascript" src="js/validacao.js"></script>
</body>
</html>
