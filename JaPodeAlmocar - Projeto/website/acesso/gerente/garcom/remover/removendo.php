<?php
  require "../../../../conexao.php";
  session_start();

  $_SESSION['id'] = $_POST['id'];

  $sql = "SELECT * FROM garcom WHERE id_garcom = {$_SESSION['id']}";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REMOÇÃO DE GARÇOM | GERENTE</title>
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
      <h2>Remoção de garçom</h2>
      <div class="painel">
        <div class="mensagem">Deseja remover?</div>
        <div class="infos">
          <div class="info">
            <div class="info-t">Nome:</div>
            <div class="info-d"><?php echo $row['nome_garcom']?></div>
          </div>
          <div class="info">
            <div class="info-t">E-mail:</div>
            <div class="info-d"><?php echo $row['email_garcom']?></div>
          </div>
          <div class="info">
            <div class="info-t">Data de nascimento:</div>
            <div class="info-d"><?php echo $row['dataNascimento_garcom']?></div>
          </div>
          <div class="info">
            <div class="info-t">Sexo:</div>
            <div class="info-d"><?php echo $row['sexo_garcom']?></div>
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