<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../VIEW/css/estilo.css">
    <title>Confirmação</title>
</head>
<body>
    <header>
        <h1>Confirme seus dados</h1>
        <nav id="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <?php
            if (isset($_POST['botao'])){
                include '../MODEL/cliente.php';

                $nome = $_POST['nome'];
                $telefone = $_POST['tel'];
                $email = $_POST['email'];

                $c1 = new Cliente();

                $c1->exibirDados($nome, $telefone, $email);
            }
        ?>
        <a href="../VIEW/index.html">Confirmar</a>
    </section>
    <footer>
        <i>&copy;Lucas Dezembro.</i>
    </footer>
</body>
</html>