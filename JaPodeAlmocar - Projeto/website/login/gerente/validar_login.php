<?php
  require "../../conexao.php";
  session_start();

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM gerente WHERE email_gerente = '$email' AND senha_gerente = '$senha'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['nome_gerente'] = $row['nome_gerente'];
    $_SESSION['id_gerente'] = $row['id_gerente'];

    echo "<script>location.href = '../../acesso/gerente/inicio.php'</script>";
  } else {
    echo "<script>alert('E-mail ou senha incorretos, tente novamente!'); location.href = 'login.html'</script>";
  }
?>