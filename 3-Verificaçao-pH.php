<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);
    
    if ($numero >= 1 && $numero <= 14) {
        header("Location: pagina{$numero}.html");
        exit();
    } else {
        $mensagem = "Por favor, insira um número entre 1 e 14.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Redirecionamento</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Ocupa 100% da altura da viewport */
            margin: 0; /* Remove margens padrão */
            background-color: #F0EAD6; /* Cor de fundo */
            overflow: hidden; /* Impede a rolagem */
        }

        .container {
            text-align: center;
            width: 100%;
            max-width: 600px; /* Limita a largura do container */
            box-sizing: border-box;
        }

        .daCerto {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            margin: 10px 0; /* Ajuste o espaço ao redor do contêiner */
            margin-top: 100px; /* Espaço acima do contêiner */
            position: fixed; /* Fixa o contêiner na tela */
            top: 32%; /* Centraliza verticalmente em relação à altura da tela */
            left: 50%; /* Centraliza horizontalmente em relação à largura da tela */
            transform: translate(-50%, -50%); /* Ajusta a posição para centralizar exatamente */
            width: 50%; /* Largura do contêiner, ajuste conforme necessário */
        }

        form {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            margin: 10px 0; /* Ajuste o espaço ao redor do contêiner */
            position: fixed; /* Fixa o contêiner na tela */
            top: 70%; /* Centraliza verticalmente em relação à altura da tela */
            left: 50%; /* Centraliza horizontalmente em relação à largura da tela */
            transform: translate(-50%, -50%); /* Ajusta a posição para centralizar exatamente */
            width: 500px; /* Ajuste conforme necessário */
            z-index: 1000; /* Adiciona um índice z alto para que fique acima de outros elementos */
        }

        label {
            margin-right: 10px; /* Espaço à direita do rótulo */
        }

        input[type="number"] {
            padding: 10px;
            border: 1px solid #000;
            border-radius: 8px; 
            width: 400px; /* Ajuste a largura da caixa de entrada para um tamanho mais adequado */
            margin-right: 10px; /* Espaço entre a caixa de entrada e o botão */
            font-size: 16px; /* Aumenta o tamanho da fonte para facilitar a digitação */
        }

        input[type="submit"] {
            padding: 10px 20px; /* Ajusta o padding do botão */
            background-color: #6e6e6280;
            color: rgb(255, 255, 255);
            cursor: pointer;
            border: none; /* Remove borda padrão */
            border-radius: 8px; /* Bordas arredondadas */
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="number"]::placeholder {
            color: #999; /* Cor do texto do placeholder */
            opacity: 1; /* Aumenta a visibilidade */
        }

        .mensagem {
            color: red;
            margin-top: 10px; 
        }

        .segundaImagem, .amem {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            position: fixed; /* Fixa as imagens na tela */
        }

        .segundaImagem {
            top: 35%; /* Ajuste o valor conforme necessário para posicionar abaixo */
            left: 50%; /* Centraliza horizontalmente em relação à largura da tela */
            transform: translateX(-50%); /* Ajusta a posição horizontalmente para centralizar */
            width: 60%;
        }

        .amem {
            top: 55%; /* Ajusta a posição vertical */
            left: 50%; /* Centraliza horizontalmente */
            transform: translate(-50%, -50%); /* Ajusta a posição para centralizar exatamente */
            width: 1300px; /* Ajuste conforme necessário */
        }
        .amen {
            top: 55%; /* Ajusta a posição vertical */
            left: 50%; /* Centraliza horizontalmente */
            transform: translate(-30%, 40%); /* Ajusta a posição para centralizar exatamente */
            width: 1400px; /* Ajuste conforme necessário */
        }
        .retro{
            top: 55%; /* Ajusta a posição vertical */
            left: 50%; /* Centraliza horizontalmente */
            transform: translate(-30%, -40%); /* Ajusta a posição para centralizar exatamente */
            width: 1400px; /* Ajuste conforme necessário */
        }
        .me{
         
                
        }

       
    </style>
</head>
<body>
    <div class="container">
        <img src="./imagens-2/mudapH.png" class="daCerto" alt="Imagem Descritiva">
        
        <form method="post" action="">
            <label for="numero"></label>
            <input type="number" id="numero" name="numero" min="1" max="14" required placeholder="Insira o valor aqui">
            <input type="submit" value="Verificar">
        </form>
        
        <?php if (isset($mensagem)): ?>
            <div class="mensagem"><?php echo $mensagem; ?></div>
        <?php endif; ?>
        
        <img src="./imagens-2/CorespH.png" class="segundaImagem" alt="Imagem Abaixo">
        <img src="./imagens-2/1.png" class="amem">
        <img src="./imagens/1.png" class="amen">
        <img src="./imagens/2.png"class="retro">
    </div>
</body>
</html>