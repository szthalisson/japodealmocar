<?php
  require "../../../../conexao.php";
  session_start();

  if ($_SESSION['prosseguir'] === 'nao') {
    $_SESSION['prosseguir'] = 'sim';
    echo "<script>alert('Preencha todos os campos!'); location.href = 'pegando_id.php'</script>";
  } else {
    $id = $_SESSION["id"];
    $nome = $_POST["nome"];
    $porcao = $_POST["porcao"];
    $valor = $_POST["valor"];
    $categoria = $_POST['categoria'];

    $sql = "UPDATE produto SET nome_produto = '$nome', porcao_produto = '$porcao', valor_produto = $valor, categoria_produto = '$categoria' WHERE id_produto = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "<script>alert('Produto editado com sucesso!'); location.href = '../opcoes.html';</script>";
    } else {
      echo "<script>alert('ERRO! Entre em contato conosco'); location.href = '../opcoes.html';</script>";
    }
  }
?>