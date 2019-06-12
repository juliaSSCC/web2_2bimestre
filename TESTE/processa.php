<?php
    require_once 'usuario.php'; //importar do usuarioPHP

    $user = new Usuario($_POST['nome'],$_POST['telefone'],$_POST['email'],$_POST['senha']);
    $nome = $user->getNome();
    $telefone = $user->getTelefone();
    $email = $user->getEmail();
    $senha = $user->getSenha();


    $link = mysqli_connect("localhost", "root", "", "projeto_php");

    $query_select = "SELECT email FROM usuario WHERE email = '$email'";

    $result = mysqli_query($link, $query_select);
    $array = mysqli_fetch_array($result);
    $logarray = $array['email'];

    if (!$link) {
        exit;
    }

    $sql = "INSERT INTO `usuario`(`nome`, `telefone`, `email`, `senha`) VALUES ('$nome', '$telefone', '$email', '$senha')";

    if ($email=="" || $email==null || $telefone==null || $telefone=="" || $nome=="" || $nome==null || $senha=="" || $senha==null){
      echo"<script language='javascript' type='text/javascript'> alert('Algum campo não preenchido'); window.location.href='cadastrar.php'; </script>";
  }else{
      if ($logarray == $email){
          echo"<script language='javascript' type='text/javascript'> alert('Usuário ja cadastrado'); window.location.href='cadastrar.php'; </script>";
      }
      else{
          if (mysqli_query($link, $sql)) {
              echo"<script language='javascript' type='text/javascript'> alert('Usuário cadastrado com sucesso!'); window.location.href='index.php'; </script>";
          } else {
              echo "error";
          }
      }
  }
  mysqli_close($link);

?>
