<?php
  require "../../conexao.php";
  session_start();

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM garcom WHERE email_garcom = '$email' AND senha_garcom = '$senha'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['nome_garcom'] = $row['nome_garcom'];
    $_SESSION['id_garcom'] = $row['id_garcom'];

    echo "<script>location.href = '../../acesso/garcom/inicio.php'</script>";
  } else {
    echo "<script>alert('E-mail ou senha incorretos, tente novamente!'); location.href = 'login.html'</script>";
  }
?>