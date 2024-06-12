<?php
  require "../../../../conexao.php";
  session_start();

  $id = $_SESSION["id"];

  $sql = "DELETE FROM produto WHERE id_produto = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "<script>alert('Produto removido com sucesso!'); location.href = '../opcoes.html';</script>";
  } else {
    echo "<script>alert('ERRO! Entre em contato conosco'); location.href = '../opcoes.html';</script>";
  }
?>