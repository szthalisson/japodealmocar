<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VISUALIZAÇÂO DE PRODUTOS | GERENTE</title>
  <link rel="stylesheet" href="../../../../assets/css/visualizar.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>

  <?php
    require "../../../../conexao.php";

    $nome = $_POST['busca'];

    $sql = "SELECT * FROM produto WHERE nome_produto like '$nome%'";
    $result = mysqli_query($con, $sql);
  ?>
</head>
<body>
  <header>
    <a href="../opcoes.html" class="sair"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <div class="section">
      <h1>Visualização de produtos</h1>
      <form action="busca.php" method="post" class="busca">
        <div class="input">
          <input type="text" name="busca" placeholder="Nome do produto">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
      <table border="1px" class='table'>
        <thead>
          <th>ID</th>
          <th>NOME</th>
          <th>PORÇÃO</th>
          <th>VALOR</th>
          <th>CATEGORIA</th>
        </thead>
        <tbody>
          <?php
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                  <td>{$row['id_produto']}</td>
                  <td>{$row['nome_produto']}</td>
                  <td>{$row['porcao_produto']}</td>
                  <td>{$row['valor_produto']}</td>
                  <td>{$row['categoria_produto']}</td>
                </tr>";
              }
            } else {
              echo "<script>alert('Nome não encontado, tente outro!'); location.href = 'visualizar.php'</script>";
            }
          ?>
        </tbody>
      </table>

      <button onclick="voltar()" style='margin-top: 1rem; padding: 10px; cursor: pointer;'>Mostrar todos</button>
    </div>
  </main>
  <script defer>
    function voltar() {
      location.href = 'visualizar.php';
    }
  </script>
</body>
</html>