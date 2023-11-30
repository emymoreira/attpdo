<?php include_once("conecta.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Nome de Usuário<input type="text" name="txtusu"></p>
        <p>Senha<input type="password" name="txtcom"></p>
        <p><input type="submit" name="btn" value="Enviar"></p>
    </form>

    <?php
    if (isset($_POST['btn'])) {
        $conexao = con();

        $usuario = $_POST['txtusu'];
        $senha = $_POST['txtcom'];

        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO usuarios (usuario, senha) VALUES (?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ss', $usuario, $senha);

        // Execute the statement
        $res = mysqli_stmt_execute($stmt);

        // Check if the query was successful
        if ($res) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao inserir registro: " . mysqli_error($conexao);
        }

        // Close the statement
        mysqli_stmt_close($stmt);

        // Close the connection
        mysqli_close($conexao);
    }
    ?>
</body>
</html>
