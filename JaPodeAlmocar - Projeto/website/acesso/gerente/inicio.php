<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INÍCIO | GERENTE</title>
  <link rel="stylesheet" href="../../assets/css/inicio.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>
  <?php
    session_start();
  ?>
</head>
<body>
  <header>
    <a href="../../login/gerente/login.html" class="sair"><i class="fa-solid fa-door-open"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <div class="section">
      <div class="mensagem">
        <h1>Seja bem-vindo(a), <?php echo ucwords($_SESSION['nome_gerente'])?>!</h1>
      </div>
      <div class="opcoes">
        <a href="garcom/opcoes.html" class="opcao">Gerenciar garçom</a>
        <a href="produto/opcoes.html" class="opcao">Gerenciar produtos</a>
      </div>
    </div>
  </main>
</body>
</html>