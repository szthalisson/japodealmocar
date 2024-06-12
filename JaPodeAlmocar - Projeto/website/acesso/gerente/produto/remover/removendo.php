<?php
  require "../../../../conexao.php";
  session_start();

  $_SESSION['id'] = $_POST['id'];

  $sql = "SELECT * FROM produto WHERE id_produto = {$_SESSION['id']}";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REMOÇÃO DE PRODUTO | GERENTE</title>
  <link rel="stylesheet" href="../../../../assets/css/cadastro_edicao.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <a href="../opcoes.html" class="sair"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <form action="validar_remover.php" method="post" class="form">
      <h2>Remoção de produto</h2>
      <div class="painel">
        <div class="mensagem">Deseja remover?</div>
        <div class="infos">
          <div class="info">
            <div class="info-t">Nome:</div>
            <div class="info-d"><?php echo $row['nome_produto']?></div>
          </div>
          <div class="info">
            <div class="info-t">Porção:</div>
            <div class="info-d"><?php echo $row['porcao_produto']?></div>
          </div>
          <div class="info">
            <div class="info-t">Valor:</div>
            <div class="info-d"><?php echo $row['valor_produto']?></div>
          </div>
          <div class="info">
            <div class="info-t">Categoria:</div>
            <div class="info-d"><?php echo $row['categoria_produto']?></div>
          </div>
        </div>
      </div>
      <button type="submit" class="button">Remover</button>
    </form>
  </main>
</body>
</html>

<?php
  } else {
    echo "<script>alert('ID não encontrado, tente outro!'); location.href = 'pegando_id.php';</script>";
  }
?>