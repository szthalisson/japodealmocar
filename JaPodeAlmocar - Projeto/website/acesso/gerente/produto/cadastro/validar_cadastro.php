<?php
  require "../../../../conexao.php";

  $nome = $_POST["nome"];
  $porcao = $_POST["porcao"];
  $valor = $_POST["valor"];
  $categoria = $_POST["categoria"];

  $sql = "SELECT * FROM produto WHERE nome_produto = '$nome' AND porcao_produto = '$porcao' AND categoria_produto = '$categoria'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Produto já cadastrado, por favor tente outro'); location.href = 'cadastro.html'</script>";
  } else {
    $sql = "INSERT INTO produto VALUES(0,'$nome','$porcao','$valor','$categoria')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "<script>alert('Produto cadastrado com sucesso!'); location.href = '../opcoes.html';</script>";
    } else {
      echo "<script>alert('ERRO! Entre em contato conosco'); location.href = '../opcoes.html';</script>";
    }
  }
?>