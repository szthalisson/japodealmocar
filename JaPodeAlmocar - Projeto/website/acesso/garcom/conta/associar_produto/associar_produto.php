<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ASSOCIAMENTO DE PRODUTO | GARÇOM</title>
  <link rel="stylesheet" href="../../../../assets/css/cadastro_edicao.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>
  <?php
    require "../../../../conexao.php";

    $sql = "SELECT * FROM produto";
    $result = mysqli_query($con, $sql);
  ?>
</head>
<body>
  <header>
    <a href="../opcoes.html" class="sair"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <form action="adicionar_produto_conta.php" method="post" class="form">
      <h2>Associando Produto</h2>
      <div class="painel">
        <div class="input">
          <i class="fa-solid fa-hashtag" style="padding-left: 6px"></i>
          <input type="text" name="num_mesa_conta" placeholder="Número da mesa" required>
        </div>
        <div class="input">
          <span><i class="fa-solid fa-list"></i></span>
          <select name="id_produto" id="categoria">
            <?php
              while($row=mysqli_fetch_array($result)) {
                echo "<option value='{$row['id_produto']}'>{$row['nome_produto']} - {$row['porcao_produto']}</option>";
              }
            ?>
          </select>
        </div>
        <div class="input">
          <i class="fa-solid fa-hashtag" style="padding-left: 6px"></i>
          <input type="text" name="quantidade_produto" placeholder="Quantidade" required>
        </div>
      </div>
      <button type="submit" class="button">Adicionar</button>
    </form>
  </main>
</body>
</html>