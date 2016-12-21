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
<!--Inclui o Framework bootstrap e o CSS Personalizado!-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rek= "stylesheet" href="css/estilo.css">
</head>
<body>
<!--Banner!-->
<div class="jumbotron text-center" id="banner">
  <div class="container-fluid"><br><br><br><br><br>

      <h1>Cim</h1>
    <p>Saneamento Industrial</p>
  </div>
</div>
<!--Fim do banner!-->

<div class="container"><!--Inicio do container geral!-->
  <?php include 'includes/nav.html';?><!--Incluí a Navbar!-->












</div> <!--Fim do container Geral!-->


<!--Incluí Footer!-->
<?php include 'includes/footer.html';?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- No fim para carregar mais rapido -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</body>






</html>
