<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PomboCorreio</title>

    <!-- Bootstrap core CSS -->
    <script src="Assets/js/Jquery.min.js"></script>
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="Assets/js/bootstrap.min.js" rel="stylesheet"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body class="container">

    <?php require_once('buttonChatBox.php'); ?>

    <!-- Chatbox -->
    <div class="modal fade" id="CONTATOS" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-danger">&times;</span></button>
            <h4 class="modal-title text-center">ESCOLHA CONTATO PARA ENVIAR UMA MENSAGEM</h4>
          </div>
          <div class="modal-body">
            <button class="btn btn-default btn-block" id="chat1" onclick="$('#chatBox').modal('hide');$('#aleckyann').modal('show')">Dr. Aleck yann</button>
            <button class="btn btn-default btn-block" id="chat2" onclick="$('#chatBox').modal('hide');$('#kennedy').modal('show')">Dr. Kennedy</button>
            <button class="btn btn-default btn-block" id="chat3" onclick="$('#chatBox').modal('hide');$('#teste').modal('show')">Dr. teste</button>
          </div>
        </div>
      </div>
    </div>

<?php require_once('modals.php'); ?>


  </body>
</html>
