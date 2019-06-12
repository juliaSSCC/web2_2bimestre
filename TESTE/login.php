<?php
session_start();

$email= $_POST['email'];
$senha = $_POST['senha'];

$link = mysqli_connect("localhost", "root", "", "projeto_php");
$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'" or die(mysqli_error());

$checar = mysqli_query($link, $query);


if (mysqli_num_rows($checar) > 0){
  $_SESSION['email'] = $email;
  $_SESSION['senha'] = $senha;
  header('location:home.php');
}  else{
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    echo"<script language='javascript' type='text/javascript'> alert('Login/Senha incorretos'); window.location.href='index.php'; </script>";
  }


?>
