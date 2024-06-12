<?php
  require "../../../../conexao.php";

  $num_mesa_conta = $_POST['num_mesa_conta'];
  $id_produto = $_POST['id_produto'];
  $quantidade_produto = $_POST['quantidade_produto'];

  $sql = "SELECT num_mesa FROM mesa WHERE num_mesa = $num_mesa_conta";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Conta já aberta nesta mesa'); location.href = '../opcoes.html'</script>";
  } else {
    $sql = "INSERT INTO mesa VALUES(0,$num_mesa_conta,$id_produto,$quantidade_produto)";
    $result = mysqli_query($con,$sql);

    if ($result) {
      $sql = "SELECT * FROM mesa WHERE num_mesa = $num_mesa_conta and id_produto_mesa = $id_produto and quantidade_produto_mesa = $quantidade_produto";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_assoc($result);
      $num_mesa = $row['num_mesa'];
      $sql = "INSERT INTO conta VALUES(0,$num_mesa,1,0)";
      $result = mysqli_query($con,$sql);
      echo "<script>alert('Produto adicionado a conta'); location.href = '../opcoes.html'</script>";
    } else {
      echo "<script>alert('ERRO! Contate os desenvolvedores do sites'); location.href = '../opcoes.html'</script>";
    }
  }
?>