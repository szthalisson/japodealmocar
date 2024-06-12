<?php
  require "../../../conexao.php";
  session_start();

  $id = $_SESSION["id"];
  $nome = $_POST["nome"];
  $dataNascimento = $_POST["dataNascimento"];
  $sexo = $_POST["sexo"];
  $senha = $_POST['senha'];

  $sql = "UPDATE gerente SET nome_gerente = '$nome', dataNascimento_gerente = '$dataNascimento', sexo_gerente = '$sexo', senha_gerente = '$senha' WHERE id_gerente = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "<script>alert('Gerente editado com sucesso!'); location.href = '../opcoes.html';</script>";
  } else {
    echo "<script>alert('ERRO! Entre em contato conosco'); location.href = '../opcoes.html';</script>";
  }
?>