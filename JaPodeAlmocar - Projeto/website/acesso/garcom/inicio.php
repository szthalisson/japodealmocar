<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INÍCIO | GARÇOM</title>
  <link rel="stylesheet" href="../../assets/css/inicio.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>
  <?php
    session_start();
  ?>
</head>
<body>
  <header>
    <a href="../../login/garcom/login.html" class="sair"><i class="fa-solid fa-door-open"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <div class="section">
      <div class="mensagem">
        <h1>Seja bem-vindo(a), <?php echo ucwords($_SESSION['nome_garcom'])?>!</h1>
      </div>
      <div class="opcoes">
        <a href="conta/opcoes.html" class="opcao">Gerenciar conta</a>
        <a href="visualizar_produto/visualizar.php" class="opcao">Visualizar Produtos</a>
      </div>
    </div>
  </main>
</body>
</html>