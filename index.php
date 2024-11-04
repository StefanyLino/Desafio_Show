<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST">
            <h1>INGRESSOS</h1>
            <p>Nome:</p>
            <div class="input-box">
                <input type="text" name="nome" placeholder="Digite o seu nome" required>
            </div>
            <p>Idade:</p>
            <div class="input-box">
                <input type="number" name="idade" placeholder="Digite sua idade" required>
            </div>
            <p>Ingressos:</p>
            <div class="input-box">
                <select name="ingresso" id="ingresso" required>
                    <option value="">Escolha uma opção</option>
                    <option value="VIP">VIP</option>
                    <option value="Regular">Regular</option>
                    <option value="Basico">Básico</option>
                </select>
            </div>
            <div class="button"><button type="submit">ENVIAR</button></div>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idade = $_POST['idade'];
            $nome = $_POST['nome'];
            $ingresso = $_POST['ingresso'];
            $preco = 0;

            if ($idade < 18) {
                echo "<p>Venda não permitida para menores de 18!</p>";
            } else {
                switch ($ingresso) {
                    case "VIP":
                        $preco = 100;
                        break;
                    case "Regular":
                        $preco = 50;
                        break;
                    case "Basico":
                        $preco = 20;
                        break;
                    default:
                        exit;
                }
                echo "<p>Bem-vindo, $nome</p>";
                echo "Preço: R$" . number_format($preco, 2, ",", ".");
            }
        }
        ?>
    </div>
</body>
</html>
