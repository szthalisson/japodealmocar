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
  <title>ALTERAÇÃO DE GARÇOM | GERENTE</title>
  <link rel="stylesheet" href="../../../../assets/css/cadastro_edicao.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <a href="../opcoes.html" class="sair"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <form action="validar_edicao.php" method="post" class="form">
      <h2>Alteração de garçom</h2>
      <div class="painel">
        <div class="input">
          <span><i class="fa-solid fa-user"></i></span>
          <input type="text" name="nome" placeholder="Nome" required value=<?php echo "{$row['nome_garcom']}"?>>
        </div>
        <div class="input">
          <span><i class="fa-solid fa-calendar-days"></i></span>
          <input type="text" name="dataNascimento" placeholder="Data de Nascimento" required value=<?php echo "{$row['dataNascimento_garcom']}"?>>
        </div>
        <div class="input">
          <span><i class="fa-solid fa-venus-mars"></i></span>
          <select name="sexo">
            <option value="Masculino" <?php if ($row['sexo_garcom'] == "Masculino") {echo "checked";}?>>Masculino</option>
            <option value="Feminino" <?php if ($row['sexo_garcom'] == "Feminino") {echo "checked";}?>>Feminino</option>
          </select>
        </div>
        <div class="input">
          <span><i class="fa-solid fa-lock"></i></span>
          <input type="password" name="senha" placeholder="Senha" required value=<?php echo "{$row['senha_garcom']}"?>>
        </div>
      </div>
      <button type="submit" class="button">Editar</button>
    </form>
  </main>
</body>
</html>

<?php
  } else {
    echo "<script>alert('ID não encontrado, tente outro!'); location.href = 'pegando_id.php';</script>";
  }
?>