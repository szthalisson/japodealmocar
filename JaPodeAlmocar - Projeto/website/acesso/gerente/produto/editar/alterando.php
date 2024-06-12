<?php
  require "../../../../conexao.php";
  session_start();

  $_SESSION['id'] = $_POST['id'];
  $_SESSION['prosseguir'] = 'sim';

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
  <title>ALTERAÇÃO DE PRODUTO | GERENTE</title>
  <link rel="stylesheet" href="../../../../assets/css/cadastro_edicao.css">
  <script src="https://kit.fontawesome.com/45923b0080.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <a href="../opcoes.html" class="sair"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="logo"></div>
  </header>
  <main>
    <form action="validar_edicao.php" method="post" class="form" id='form'>
      <h2>Alteração de produto</h2>
      <div class="painel">
        <div class="input">
          <span><i class="fa-solid fa-burger"></i></span>
          <input type="text" name="nome" placeholder="Nome" required value=<?php echo "{$row['nome_produto']}"?>>
        </div>
        <div class="input">
          <span><i class="fa-solid fa-bowl-food"></i></span>
          <select name="porcao" id="porcao">
            <option value="vazio">Selecione uma porção</option>
            <option value="Pequena" <?php if ($row['porcao_produto'] == 'Pequena') { echo "selected"; }?>>Pequena</option>
            <option value="Média" <?php if ($row['porcao_produto'] == 'Média') { echo "selected"; }?>>Média</option>
            <option value="Grande" <?php if ($row['porcao_produto'] == 'Grande') { echo "selected"; }?>>Grande</option>
          </select>
        </div>
        <div class="input">
          <span><i class="fa-solid fa-dollar-sign"></i></span>
          <input type="number" name="valor" placeholder="Valor" required value=<?php echo "{$row['valor_produto']}"?>>
        </div>
        <div class="input">
          <span><i class="fa-solid fa-list"></i></span>
          <select name="categoria" id="categoria">
            <option value="vazio">Selecione uma categoria</option>
            <option value="Massas" <?php if ($row['categoria_produto'] == 'Massas') { echo "selected"; }?>>Massas</option>
            <option value="Sobremesas" <?php if ($row['categoria_produto'] == 'Sobremesas') { echo "selected"; }?>>Sobremesas</option>
            <option value="Bebidas" <?php if ($row['categoria_produto'] == 'Bebidas') { echo "selected"; }?>>Bebidas</option>
            <option value="Refeições" <?php if ($row['categoria_produto'] == 'Refeições') { echo "selected"; }?>>Refeições</option>
          </select>
        </div>
      </div>
      <button type="submit" class="button" onclick="verificar_selects()">Editar</button>
    </form>
  </main>
  <script>
    let form = document.getElementById('form');
    form.addEventListener('submit', e => {
      let sel_porcao = document.getElementById('porcao');
      let porcao = sel_porcao.options[sel_porcao.selectedIndex].value;
      let sel_categoria = document.getElementById('categoria');
      let categoria = sel_categoria.options[sel_categoria.selectedIndex].value;

      if (porcao == "vazio" || categoria == "vazio") {
        e.preventDefault();
        alert('Por favor, preencha todos os campos!');
      }
    })
  </script>
</body>
</html>

<?php
  } else {
    echo "<script>alert('ID não encontrado, tente outro!'); location.href = 'pegando_id.php';</script>";
  }
?>