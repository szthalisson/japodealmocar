<?php
  require "../../../../conexao.php";
  session_start();

  $_SESSION['id'] = $_POST['id'];
  $total = 0;

  $sql = "SELECT * FROM mesa WHERE num_mesa = {$_SESSION['id']}";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FECHAMENTO | GERENTE</title>
  <link rel="stylesheet" href="../../../../assets/css/cadastro_edicao.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <a href="../opcoes.html" class="sair"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <form action="validar_fechamento.php" method="post" class="form">
      <h2>FECHAMENTO DE CONTA</h2>
      <div class="painel">
        <div class="infos">
          <div class="info">
            <div class="info-t">Número mesa:</div>
            <div class="info-d"><?php echo $_SESSION['id'];?></div>
          </div>
          <div class="info" style="flex-direction: column;">
            <div class="info-t">Produtos:</div>
            <div class="info-d">
              <?php
                while ($row=mysqli_fetch_assoc($result)) {
                  $sql = "SELECT * FROM produto WHERE id_produto = {$row['id_produto_mesa']}";
                  $result1 = mysqli_query($con, $sql);
                  while($row2=mysqli_fetch_assoc($result1)) {
                    echo "<p>{$row['quantidade_produto_mesa']}x - {$row2['nome_produto']}</p>";
                    $total += $row2['valor_produto'] * $row['quantidade_produto_mesa'];
                  }
                }
              ?>
            </div>
          </div>
          <div class="info">
            <div class="info-t">Total:</div>
            <div class="info-d"><?php echo "R$".$total;?></div>
          </div>
        </div>
      </div>
      <button type="submit" class="button">Concluir</button>
    </form>
  </main>
</body>
</html>

<?php
  } else {
    echo "<script>alert('ID não encontrado, tente outro!'); location.href = 'pegando_id.php';</script>";
  }
?>