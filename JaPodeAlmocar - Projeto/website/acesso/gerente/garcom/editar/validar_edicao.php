<?php
  require "../../../../conexao.php";
  session_start();

  $id = $_SESSION["id"];
  $nome = $_POST["nome"];
  $dataNascimento = $_POST["dataNascimento"];
  $sexo = $_POST["sexo"];
  $senha = $_POST['senha'];

  $sql = "UPDATE garcom SET nome_garcom = '$nome', dataNascimento_garcom = '$dataNascimento', sexo_garcom = '$sexo', senha_garcom = '$senha' WHERE id_garcom = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "<script>alert('Garçom editado com sucesso!'); location.href = '../opcoes.html';</script>";
  } else {
    echo "<script>alert('ERRO! Entre em contato conosco'); location.href = '../opcoes.html';</script>";
  }
?>