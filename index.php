<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <button id="botao" onclick="mudarTexto('Novo texto')">
        <?php
           $textoOriginal = "Texto original"

            function mudarTexto($novoTexto)
            {
                global $textoOriginal;
                $botao = document.getElementById("botao");
                $botao.innerHTML = $novoTexto
            }

        ?>
    </button>

    <script>
        function mudarTexto(novoTexto) 
        {
            <?php 
                mudarTexto($novoTexto) 
            ?>
        }
    </script>

</body>
</html>