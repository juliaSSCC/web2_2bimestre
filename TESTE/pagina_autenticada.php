<?php
  session_start();
  include('verificar_sessao.inc');
?>
<html>
    <head>
    <?php
    echo
    "<script language='javascript' type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>";
    echo
    "<script language='javascript' type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>";
    echo
    "<script language='javascript' type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>";
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    .alinhamento{
      text-align: center;
    }
    .corCodigo{
      font-size: 20px;
      background-color: #A9E2F3;
      border-radius: 25px;
      border-color: #A9E2F3;
    }
    </style>
    <title>Main</title>
    </head>

    <body>
      <br><br>
      <div class="container alinhamento">
        <div class="alert alert-info">
          <strong>Sucesso! Você conseguiu! </strong><br>
        </div>
        <form method="GET">
            <input type="submit" name="logout" value="Sair" class="corCodigo">
        </form>

      </div>


    </body>
</html>
