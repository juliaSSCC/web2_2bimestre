<!DOCTYPE html>
<html lang="pt-br">
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
      text-align: left;
    }
    </style>
    <title>Login</title>
    <meta charset="utf-8">
  </head>
  <body>
  <div class="container alinhamento"> <br><br>
    <h1>Entrar</h1> <br>
    <form method="POST" action="login.php">
      <label for="usr">Usuário:</label><br>
      <input type="email" name="email" placeholder=" Email" maxlength="40" size ="32"> <br> <br>
      <div class="container" >
        <label for="usr">Senha:</label><br>
      </div>
      <input type="password" name="senha" placeholder=" Senha" maxlength="16" size ="32"> <br> 
      <strong> Ainda não é cadastrado?</strong>
      <a href="cadastrar.php">Cadastre-se</a><br>
      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Entrar">
      </div>    
    </form>
  </div>
  </body>
</html>
