<?php
  require "../../conexao.php";
  session_start();

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM proprietario WHERE email_proprietario = '$email' AND senha_proprietario = '$senha'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['nome_proprietario'] = $row['nome_proprietario'];
    $_SESSION['id_proprietario'] = $row['id_proprietario'];

    echo "<script>location.href = '../../acesso/proprietario/opcoes.html'</script>";
  } else {
    echo "<script>alert('E-mail ou senha incorretos, tente novamente!'); location.href = 'login.html'</script>";
  }
?>