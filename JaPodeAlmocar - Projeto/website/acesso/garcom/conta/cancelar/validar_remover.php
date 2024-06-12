<?php
  require "../../../../conexao.php";
  session_start();

  $id = $_SESSION["id"];

  $sql = "DELETE FROM mesa WHERE num_mesa = $id";
  $result = mysqli_query($con, $sql);
  $sql = "DELETE FROM conta WHERE id_mesa_conta = $id";
  $result = mysqli_query($con, $sql);
  
  if ($result) {
    echo "<script>alert('Conta removida com sucesso!'); location.href = '../opcoes.html';</script>";
  } else {
    echo "<script>alert('ERRO! Entre em contato conosco'); location.href = '../opcoes.html';</script>";
  }
?>