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

    $sql = "SELECT * FROM conta WHERE estado_conta = 1";
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
          <input type="text" name="busca" placeholder="Número da mesa">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
      <table border="1px" class='table'>
        <thead>
          <th>ID</th>
          <th>NÚMERO DA MESA</th>
          <th>PRODUTOS</th>
          <th>ESTADO</th>
        </thead>
        <tbody>
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                <td>{$row['id_conta']}</td>
                <td>{$row['id_mesa_conta']}</td>
                <td>";
              
              $sql = "SELECT * FROM mesa WHERE num_mesa = {$row['id_mesa_conta']}";
              $result1 = mysqli_query($con,$sql);

              while ($row1=mysqli_fetch_assoc($result1)) {
                $sql = "SELECT * FROM produto WHERE id_produto = {$row1['id_produto_mesa']}";
                $result2 = mysqli_query($con,$sql);

                while ($row=mysqli_fetch_assoc($result2)) {
                  echo "{$row1['quantidade_produto_mesa']}x - {$row['nome_produto']}<br>";
                }
              }
              
              echo "</td><td>ABERTA</td></tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>