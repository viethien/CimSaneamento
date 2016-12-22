<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<!-- Compatibilidade com IE E EDGE-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--Para os Robôs!-->
<meta name="description" content="Cim Saneamento">
<meta name="author" content="Tiago Silveira">
<!--Define a viewport!-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Inclui o Framework bootstrap/CSS Personalizado/Fontes google!-->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel= "stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<!--Banner (Fora do container geral para pegar a tela toda)!-->
  <?php include 'includes/nav.html';?><!--Incluí a Navbar!-->


<!--========Início conteúdo!=========--->

<div class="container"><!--Inicio do container geral!-->
  <div class="row">
    <div class="col-md-4">
           <div class="page-header"><h4>Preencha o formulário abaixo:</h4><small>ou envie um e-mail <a href="mailto:cimsaneamento@cimsaneamento.com.br?subject=Contato - Website">cimsaneamento@cimsaneamento.com.br</a></small></div>
           <form id="contato" Method="POST">
            <div class="input-group">
             <span class="input-group-addon" id="nome"><img src="img/icon/nome.ico"></span>
               <input type="text" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
              </div><br>
            <div class="input-group">
             <span class="input-group-addon" id="email"><img src="img/icon/email.ico"></span>
              <input type="text" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
               </div><br>
            <div class="input-group">
             <span class="input-group-addon" id="email"><img src="img/icon/empresaicone.ico"></span>
              <input type="text" class="form-control" placeholder="Empresa" aria-describedby="basic-addon1">
               </div><br>

            <div class="input-group">
             <span class="input-group-addon" id="telefone"><img src="img/icon/telefone.ico"></span>
              <input type="text" class="form-control" placeholder="Telefone" aria-describedby="basic-addon1">
               </div><br>
            <div class="form-group">
             <label for="comment">Mensagem:</label>
              <textarea class="form-control" rows="5" placeholder="Deixe sua mensagem" id="mensagem"></textarea>
            </div>
            <input type="submit" class="btn btn-default" value="Enviar Mensagem"><br><br>
         </form>
    </div><br>
    <div class="col-md-3">
      <div class="page-header"><h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Localização <small>Sede</small></h3></div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.274360167583!2d-43.188913085117946!3d-22.903249143502656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e8fc6ee82b7%3A0xaff3433036ec1970!2sCim+Saneamento!5e0!3m2!1sen!2sbr!4v1482371865937" width="300" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-md-3 col-md-offset-1">
      <div class="page-header"><h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Localização <small>Unidade Operacional</small></h3></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117675.81954312201!2d-43.33595587633555!3d-22.825820318884503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997060ee07ffbf%3A0x74ea90428e8f9303!2sCim+Saneamento+Instrumental!5e0!3m2!1sen!2sbr!4v1482373832937" width="300" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><br>
  </div>
<!--========Fim conteúdo!=========--->

</div> <!--Fim do container Geral!-->

<!--Incluí Footer!-->
<?php include 'includes/footer.html';?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- No fim para carregar mais rapido -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
