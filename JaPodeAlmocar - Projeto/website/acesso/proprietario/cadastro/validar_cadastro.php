<?php
  require "../../../conexao.php";

  $nome = $_POST["nome"];
  $dataNascimento = $_POST["dataNascimento"];
  $sexo = $_POST["sexo"];
  $email = $_POST["email"];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM gerente WHERE email_gerente = '$email'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email já cadastrado, por favor tente outro'); location.href = 'cadastro.html'</script>";
  } else {
    $sql = "INSERT INTO gerente VALUES(0,'$nome','$dataNascimento','$sexo','$email','$senha')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "<script>alert('Gerente cadastrado com sucesso!'); location.href = '../opcoes.html';</script>";
    } else {
      echo "<script>alert('ERRO! Entre em contato conosco'); location.href = '../opcoes.html';</script>";
    }
  }
?>